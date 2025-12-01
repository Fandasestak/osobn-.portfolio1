
// === MOBILNÍ MENU ===
document.addEventListener('DOMContentLoaded', () => {
  const hamburgerButton = document.getElementById('hamburgerButton');
  const mobileMenu = document.getElementById('mobileMenu');
  const mobileMenuLinks = mobileMenu ? mobileMenu.querySelectorAll('a') : [];

  function toggleMenu() {
	if (!hamburgerButton || !mobileMenu) return;
	hamburgerButton.classList.toggle('open');
	mobileMenu.classList.toggle('open');
	document.body.style.overflow = mobileMenu.classList.contains('open') ? 'hidden' : '';
  }

  if (hamburgerButton) {
	hamburgerButton.addEventListener('click', toggleMenu);
  }

  mobileMenuLinks.forEach(link => {
	link.addEventListener('click', () => {
	  setTimeout(() => {
		if (mobileMenu.classList.contains('open')) toggleMenu();
	  }, 200);
	});
  });
});


// horizontální scroll + klávesy
const scroller = document.getElementById('scroller');
let wheelLock = false, wheelAccum = 0, wheelTimer = null;
const WHEEL_THRESHOLD = 80;
const panelCount = document.querySelectorAll('.panel').length;

scroller.addEventListener('wheel', (e) => {
  if (Math.abs(e.deltaY) < Math.abs(e.deltaX)) return;
  e.preventDefault();
  if (wheelLock) return;

  wheelAccum += e.deltaY;
  clearTimeout(wheelTimer);
  wheelTimer = setTimeout(() => {
	if (Math.abs(wheelAccum) >= WHEEL_THRESHOLD) {
	  wheelLock = true;
	  const currentPanel = Math.round(scroller.scrollLeft / scroller.clientWidth);
	  const isFirstPanel = currentPanel <= 0;
	  const isLastPanel = currentPanel >= panelCount - 1;
	  if (wheelAccum < 0 && !isFirstPanel) {
		scroller.scrollBy({left: -scroller.clientWidth, behavior: 'smooth'});
	  } else if (wheelAccum > 0 && !isLastPanel) {
		scroller.scrollBy({left: scroller.clientWidth, behavior: 'smooth'});
	  }
	  setTimeout(() => { wheelLock = false; }, 100);
	}
	wheelAccum = 0;
  }, 100);
}, {passive:false});


function scrollNext(){ scroller.scrollBy({left: scroller.clientWidth, behavior: 'smooth'}) }
window.scrollNext = scrollNext;


// Funkce pro stáhnutí PDF
function downloadCV() {
  const link = document.createElement('a');
  link.href = 'zivotopis.pdf';
  link.download = 'Životopis';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}
window.downloadCV = downloadCV;


// === 3D POZADÍ THREE.JS ===
(function createBackground() {
  if (window.innerWidth < 1025) {
	const container = document.getElementById('three-bg');
	if (container) container.style.display = 'none';
	return;
  }

  const container = document.getElementById('three-bg');
  if (container) container.style.display = 'block';
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
  
  const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
  renderer.setSize(window.innerWidth, window.innerHeight);
  renderer.setPixelRatio(window.devicePixelRatio);
  container.appendChild(renderer.domElement);

  // Světla
  scene.add(new THREE.AmbientLight(0xffffff, 1.0));
  const dirLight = new THREE.DirectionalLight(0xffffff, 1.0);
  dirLight.position.set(1,1,1);
  scene.add(dirLight);

  // Částice písmena F
  const particles = [];
  const particleCount = 100;
  const colors = [0xffffff, 0x3b82f6, 0xaa8541];

  function generateLetterPoints() {
	const points = [];
	const letterHeight = 10.0;
	const letterWidth = 5.0;
	const thickness = 1;
	for(let y=-letterHeight/2;y<=letterHeight/2;y+=0.05){
	  for(let x=-thickness/2;x<=thickness/2;x+=0.05){
		points.push([x,y,0]);
	  }
	}
	for(let x=-thickness/2;x<=letterWidth;x+=0.05){
	  for(let y=letterHeight/2-thickness/2;y<=letterHeight/2+thickness/2;y+=0.05){
		points.push([x,y,0]);
	  }
	}
	for(let x=-thickness/2;x<=letterWidth*0.7;x+=0.05){
	  for(let y=-thickness/2;y<=thickness/2;y+=0.05){
		points.push([x,y,0]);
	  }
	}
	return points;
  }

  const letterPoints = generateLetterPoints();
  const geometry = new THREE.SphereGeometry(0.03, 32, 32);
  for (let i = 0; i < particleCount; i++) {
	const material = new THREE.MeshPhongMaterial({
	  color: colors[Math.floor(Math.random() * colors.length)],
	  shininess: 250,
	  emissive: colors[Math.floor(Math.random() * colors.length)],
	  emissiveIntensity: 0.3
	});
	const particle = new THREE.Mesh(geometry, material);
	particle.position.set(Math.random()*20-10, Math.random()*20-10, Math.random()*10-5);
	const targetPoint = letterPoints[i % letterPoints.length];
	particle.targetPosition = new THREE.Vector3(...targetPoint);
	particle.originalPosition = particle.position.clone();
	particle.velocity = new THREE.Vector3(
	  (Math.random()-0.5)*0.05,
	  (Math.random()-0.5)*0.05,
	  (Math.random()-0.5)*0.05
	);
	particles.push(particle);
	scene.add(particle);
  }

  camera.position.z = 10;
  let isMouseMoving = false, mouseTimer, transitionProgress = 0;

  // Černá koule pro slučování
  const dotGeometry = new THREE.SphereGeometry(0.2, 32, 32);
  const dotMaterial = new THREE.MeshBasicMaterial({ color: 0x2362de });
  const dot = new THREE.Mesh(dotGeometry, dotMaterial);
  dot.visible = false;
  scene.add(dot);

  let mouseX = 0, mouseY = 0, mouse3D = new THREE.Vector3(), merged = false;

  document.addEventListener('mousemove', (event) => {
	mouseX = (event.clientX / window.innerWidth) * 2 - 1;
	mouseY = -(event.clientY / window.innerHeight) * 2 + 1;

	const vector = new THREE.Vector3(mouseX, mouseY, 0.5);
	vector.unproject(camera);
	const dir = vector.sub(camera.position).normalize();
	const distance = -camera.position.z / dir.z;
	mouse3D = camera.position.clone().add(dir.multiplyScalar(distance));

	merged = true;
	dot.visible = true;
	dot.position.copy(mouse3D);

	clearTimeout(mouseTimer);
	mouseTimer = setTimeout(() => {
	  merged = false;
	  dot.visible = false;
	}, 1000);

	camera.position.x += (mouseX * 2 - camera.position.x) * 0.05;
	camera.position.y += (mouseY * 2 - camera.position.y) * 0.05;
	camera.lookAt(scene.position);
  });

  function animate() {
	requestAnimationFrame(animate);

	if (isMouseMoving && transitionProgress < 1) transitionProgress = Math.min(1, transitionProgress + 0.02);
	else if (!isMouseMoving && transitionProgress > 0) transitionProgress = Math.max(0, transitionProgress - 0.01);

	particles.forEach(p => {
	  if (merged) {
		p.position.lerp(mouse3D, 0.1);
	  } else if (isMouseMoving) {
		p.position.lerp(p.targetPosition, transitionProgress * 0.1);
		p.rotation.x += 0.005;
		p.rotation.y += 0.005;
	  } else {
		if (transitionProgress < 0.3) {
		  p.position.add(p.velocity);
		  p.velocity.add(new THREE.Vector3(
			(Math.random()-0.5)*0.01,
			(Math.random()-0.5)*0.01,
			(Math.random()-0.5)*0.01
		  ));
		  p.velocity.multiplyScalar(0.99);
		  p.rotation.x += p.velocity.length() * 0.2;
		  p.rotation.y += p.velocity.length() * 0.2;
		}
	  }
	});

	renderer.render(scene, camera);
  }
  animate();

  window.addEventListener('resize', () => {
	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize(window.innerWidth, window.innerHeight);
  });
})();


// === MOBILNÍ GESTA: dolů → vlevo, nahoru → vpravo ===
let startY = 0;
let endY = 0;
document.addEventListener('touchstart', (e) => {
  startY = e.touches[0].clientY;
});
document.addEventListener('touchend', (e) => {
  endY = e.changedTouches[0].clientY;
  const diffY = startY - endY;
  const threshold = 50;
  if (Math.abs(diffY) > threshold) {
	if (diffY > 0) {
	  scroller.scrollBy({ left: scroller.clientWidth, behavior: 'smooth' }); // nahoru -> vpravo
	} else {
	  scroller.scrollBy({ left: -scroller.clientWidth, behavior: 'smooth' }); // dolů -> vlevo
	}
  }
});

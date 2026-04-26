<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Šesty | Design & Vývoj</title>

    <meta name="description" content="Šesty – Profesionální web design a vývoj. Tvořím digitální ekosystémy a vizuální identity. Prohlédněte si mé projekty." />
    <meta name="keywords" content="Šesty, sesty , sesty smysl , acnod, web design, vývoj webů, portfolio, UI/UX, ses-ty, František, Šesták, Frantisek, Sestak" />
    <meta name="author" content="František Šesták" />
    <meta name="robots" content="index, follow" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://sesty.dev" />
    <meta property="og:title" content="Šesty | Design & Vývoj" />
    <meta property="og:description" content="Premiové portfolio & eshop pro premiové hráče." />
    <meta property="twitter:card" content="summary_large_image" />

    <meta name="twitter:image" content="https://raw.githubusercontent.com/Fandasestak/osobn-.portfolio1/main/Document1.png" />

    <meta property="og:image" content="https://raw.githubusercontent.com/Fandasestak/osobn-.portfolio1/main/Document1.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="auto">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="main.png" rel="shortcut icon">
    <link id="favicon" rel="icon" type="svg">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="progress-container"><div class="progress-bar" id="progressBar">
        <div class="tr">
            <a href="https://bauherr.tech" class="tr" target="_blank" style="text-align: center; justify-content: center; align-items: center; display: flex; position: relative; padding-top: 12px; width: 100%;">
                <img src="powerbylogo.svg" height="auto" width="100px" alt="Powered by Logo" style="display: block; margin: 0;">
            </a>
        </div>
    </div></div>
<div class="vertical-progress-container">
    <div class="vertical-progress-bar" id="verticalProgressBar"></div>
</div>

<button class="back-btn" id="backBtn" data-key="btn-back">Vrátit zpět</button>

<div class="canvas-3d" aria-hidden="true"><div class="scene" id="scene"><div class="grid-plane"></div></div></div>

<header>
    <a href="#home" class="brand" aria-label="Domů - Šesty Portfolio">
        <div class="logo-svg">
            <svg viewBox="0 0 4500 4500" aria-hidden="true" focusable="false"><path d="M1429.687,3259.243c-742.688,0 -1345.657,-602.969 -1345.657,-1345.657l1345.657,1345.657Z" fill="#fff"/><path d="M2775.344,1913.586c0,742.688 -602.969,1345.657 -1345.657,1345.657l1345.657,-1345.657Z" fill="#fff"/><path d="M3064.064,1240.757c742.688,0 1345.657,602.969 1345.657,1345.657l-1345.657,-1345.657Z" fill="#fff"/><path d="M1718.407,2586.414c0,-742.688 602.969,-1345.657 1345.657,-1345.657l-1345.657,1345.657Z" fill="#fff"/></svg>
        </div>
        <div class="brand-text">
            <span class="name">ŠESTY</span>
            <span class="tagline" data-key="brand-tagline">Design & vývoj</span>
        </div>
    </a>

    <button class="menu-toggle" id="menuToggle" aria-label="Otevřít menu" aria-expanded="false" aria-controls="navMenu">
        <span></span><span></span><span></span>
    </button>

    <nav id="navMenu" aria-label="Hlavní navigace">
        <a href="#about" data-key="nav-services">Služby</a>
        <a href="#projects" data-key="nav-work">Portfolio</a>
        <a href="#contact" data-key="nav-contact">Kontakt</a>
    </nav>

    <div class="lang-switch">
        <button class="lang-btn active" id="btn-cz" onclick="setLang('cz')">CZ</button>
        <button class="lang-btn" id="btn-en" onclick="setLang('en')">EN</button>
    </div>
</header>

<main class="main-container" id="scroller">
    <section class="section" id="home">
        <div class="glass-card" data-speed="2">
            <div class="badge" data-key="badge-available">Připraven k realizaci</div>
            <h1 data-key="h1-home" class="Text">Digitální vize,<br>které mění trh.</h1>
            <p data-key="p-home">Strategický design a precizní inženýrství. Tvořím digitální ekosystémy pro vaše podnikání.</p>
            <div class="counter" aria-hidden="true">01</div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="glass-card" data-speed="1.5">
            <div class="badge" data-key="badge-offer">Expertíza</div>
            <h2 data-key="h1-about" class="Text">Estetika & <br>Výkon.</h2>
            <p data-key="p-about">Komplexní řešení od vizuální identity po robustní backend. Architektura zaměřená na prožitek.</p>
            <div class="counter" aria-hidden="true">02</div>
        </div>
    </section>
    <section class="section" id="projects">
        <div class="glass-card" data-speed="2.5">
            <div class="badge" data-key="badge-work">Vybrané práce</div>
            <h2 data-key="h1-projects"class="Text" >Excelence v <br>každém detailu.</h2>
            <p data-key="p-projects">Prohlédněte si výběr projektů, kde se snoubí inovace s funkčností.</p>

            <a href="#" class="cta-button" id="openPortfolioBtn" data-key="btn-projects">Zobrazit portfolio</a>

            <div class="counter" aria-hidden="true">03</div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="glass-card" data-speed="2">
            <div class="badge" data-key="nav-contact">Kontakt</div>
            <h2 data-key="h1-contact"class="Text">Zahajte svou <br>transformaci.</h2>
            <p data-key="p-contact">Spojme se a vytvořme společně digitální produkt světové úrovně.</p>
            <a href="mailto:frantisek.sestak@tutamail.com" class="cta-button" data-key="btn-email">Sjednat konzultaci</a>
            <div class="counter" aria-hidden="true">04</div>
        </div>
    </section>
</main>

<div id="portfolio-layer">
    <div class="portfolio-header">
        <h2 data-key="h2-portfolio" class="Text">Kompletní Portfolio</h2>
        <a href="https://github.com/Fandasestak" class="github-btn" aria-label="GitHub Profil">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.419-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
            </svg>
        </a>
    </div>
    <!--   -->

    <div class="portfolio-grid">
        <!--
        <div class="project-item neonys-item">
         <div class="project-img">
           <img src="projekt1.png">
           <video src="..." muted loop playsinline></video>
         </div>
         <div class="project-title" data-key="proj-1-title" >Holdingová společnost</div>
         <p class="project-desc" data-key="proj-1-desc">Korporátní identita • Webová prezentace • Vizuální systém • Investice</p>
         <a class="project-link" href="https://sesty.dev">https://scorpio.capital</a>
       </div>
        -->

        <div class="project-item neonys-item">
            <div class="project-img">
                <img src="webg.png" alt="WebGL">
                <video src="Neonys.mp4" muted loop playsinline></video>
            </div>
            <div class="project-title" data-key="neonys-title">Neonys</div>
            <p class="project-desc" data-key="neonys-desc">Webová identita • Digitální design • Branding • UI/UX</p>
            <a class="project-link" href="https://neonys.sesty.dev" target="_blank">https://neonys.sesty.dev</a>
        </div>

        <div class="project-item placeholder">
            <div class="placeholder-content">
                <div class="placeholder-visual">
                    <svg viewBox="0 0 24 24" fill="none" stroke="grey" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                </div>
                <div class="placeholder-text">
                    <h3 data-key="placeholder-title" class="Text">Tvé portfolio?</h3>
                    <p data-key="placeholder-desc">Zde může být tvůj e-shop nebo osobní prezentace.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const translations = {
        cz: {
            "brand-tagline": "Design & Vývoj", "nav-services": "Služby", "nav-work": "Portfolio", "nav-contact": "Kontakt",
            "badge-available": "Připraven k realizaci", "h1-home": "Digitální vize,<br>které mění trh.", "p-home": "Strategický design a precizní inženýrství. Tvořím digitální ekosystémy pro vaše podnikání.",
            "badge-offer": "Expertíza", "h1-about": "Estetika & <br>Výkon.", "p-about": "Komplexní řešení od vizuální identity po robustní backend. Architektura zaměřená na prožitek.",
            "badge-work": "Vybrané práce", "h1-projects": "Excelence v <br>každém detailu.", "p-projects": "Prohlédněte si výběr projektů, kde se snoubí inovace s funkčností.", "btn-projects": "Zobrazit portfolio",
            "h1-contact": "Zahajte svou <br>transformaci.", "ontacp-ct": "Spojme se a vytvořme společně digitální produkt světové úrovně.", "btn-email": "Domluvte si konzultaci",
            "h2-portfolio": "Kompletní Portfolio", "btn-back": "Vrátit zpět",
            "proj-1-title": "Holdingová společnost",
            "proj-1-desc": "Korporátní identita • Webová prezentace • Vizuální systém • Investice",
            "neonys-title": "Neonys",
            "neonys-desc": "Webová identita • Digitální design • Branding • UI/UX",
            "placeholder-title": "Tvé portfolio?",
            "placeholder-desc": "Zde může být tvůj e-shop nebo osobní prezentace."
        },
        en: {
            "brand-tagline": "Design & Dev", "nav-services": "Services", "nav-work": "Work", "nav-contact": "Contact",
            "badge-available": "Ready for work", "h1-home": "Digital visions<br>shaping markets.", "p-home": "Strategic design and precision engineering. I build digital ecosystems for your business.",
            "badge-offer": "Expertise", "h1-about": "Aesthetics & <br>Performance.", "p-about": "Comprehensive solutions from visual identity to robust backend. Architecture focused on experience.",
            "badge-work": "Selected work", "h1-projects": "Excellence in <br>every detail.", "p-projects": "Explore a selection of projects, where innovation meets functionality.", "btn-projects": "View portfolio",
            "h1-contact": "Start your <br>transformation.", "p-contact": "Let's connect and create a world-class digital product together.", "btn-email": "Arrange a consultation",
            "h2-portfolio": "Full Portfolio", "btn-back": "Go Back",
            "proj-1-title": "Holding Company",
            "proj-1-desc": "Corporate Identity • Web Presentation • Visual System • Investments",
            "neonys-title": "Neonys",
            "neonys-desc": "Web Identity • Digital Design • Branding • UI/UX",
            "placeholder-title": "Your Portfolio?",
            "placeholder-desc": "Your e-shop or personal presentation could be here."
        }
    };

    const scroller = document.getElementById("scroller");
    const progressBar = document.getElementById("progressBar");
    const verticalProgressBar = document.getElementById("verticalProgressBar");
    const scene = document.getElementById('scene');
    const cards = document.querySelectorAll('.glass-card');
    const openPortfolioBtn = document.getElementById('openPortfolioBtn');
    const backBtn = document.getElementById('backBtn');
    const portfolioLayer = document.getElementById('portfolio-layer');

    function setLang(lang) {
        document.querySelectorAll('[data-key]').forEach(el => {
            const key = el.getAttribute('data-key');
            if(translations[lang][key]) el.innerHTML = translations[lang][key];
        });
        const btns = document.querySelectorAll('.lang-btn');
        btns.forEach(btn => btn.classList.toggle('active', btn.id === `btn-${lang}`));
        localStorage.setItem('sesty_lang', lang);
    }

    let isThrottled = false;
    function scrollSlide(dir) {
        if (isThrottled) return;
        isThrottled = true;
        const step = scroller.clientWidth;
        const target = Math.max(0, Math.min(Math.round(scroller.scrollLeft / step) + dir, 3));
        scroller.scrollTo({ left: target * step, behavior: 'smooth' });
        setTimeout(() => isThrottled = false, 800);
    }

    scroller.onwheel = (e) => {
        if(window.innerWidth > 768 && !document.body.classList.contains('portfolio-open')) {
            e.preventDefault();
            if(Math.abs(e.deltaY) > 18) scrollSlide(e.deltaY > 0 ? 1 : -1);
        }
    };

    scroller.onscroll = () => {
        const max = scroller.scrollWidth - scroller.clientWidth;
        const p = max > 0 ? (scroller.scrollLeft / max) * 75 + 25 : 25;
        progressBar.style.width = `${p}%`;
    };

    openPortfolioBtn.addEventListener('click', (e) => {
        e.preventDefault();
        document.body.classList.add('portfolio-open');
        portfolioLayer.scrollTop = 0;
    });

    backBtn.addEventListener('click', () => {
        document.body.classList.remove('portfolio-open');
    });

    portfolioLayer.addEventListener('scroll', () => {
        const scrollTop = portfolioLayer.scrollTop;
        const scrollHeight = portfolioLayer.scrollHeight - portfolioLayer.clientHeight;
        const scrollPercent = scrollHeight > 0 ? (scrollTop / scrollHeight) * 100 : 0;
        verticalProgressBar.style.height = `${scrollPercent}%`;
    });

    // --- VIDEO RESTART LOGIC ---
    const projectItems = document.querySelectorAll('.project-item');
    projectItems.forEach(item => {
        const video = item.querySelector('video');
        if(video) {
            item.addEventListener('mouseenter', () => {
                video.currentTime = 0; // Reset videa na začátek
                video.play();
            });
            item.addEventListener('mouseleave', () => {
                video.pause();
            });
        }
    });

    let mx = 0, my = 0;
    window.addEventListener('mousemove', (e) => {
        if(window.innerWidth > 768) {
            mx = (e.clientX / window.innerWidth - 0.5);
            my = (e.clientY / window.innerHeight - 0.5);
        }
    });

    function animate() {
        if(window.innerWidth > 768) {
            scene.style.transform = `rotateY(${mx * 10}deg) rotateX(${-my * 10}deg)`;
            cards.forEach(card => {
                const speed = card.dataset.speed || 1;
                card.style.transform = `translate3d(${mx * 45 * speed}px, ${my * 45 * speed}px, 80px) rotateY(${-mx * 5}deg) rotateX(${my * 5}deg)`;
            });
        }
        requestAnimationFrame(animate);
    }
    requestAnimationFrame(animate);

    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    menuToggle.onclick = () => {
        const isOpen = menuToggle.classList.toggle('open');
        navMenu.classList.toggle('open');
        menuToggle.setAttribute('aria-expanded', isOpen);
    };

    document.querySelectorAll('nav a').forEach(link => {
        link.addEventListener('click', () => {
            menuToggle.classList.remove('open');
            navMenu.classList.remove('open');
            document.body.classList.remove('portfolio-open');
        });
    });

    window.onload = () => {
        setLang(localStorage.getItem('sesty_lang') || 'cz');
    };
</script>
<script src="favicon.js" defer></script>

<!-- OFFLINE WARNING -->
<div id="offline-overlay" aria-live="assertive" aria-label="Offline upozornění">
    <div class="offline-card">
        <div class="offline-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1l22 22M16.72 11.06A10.94 10.94 0 0 1 19 12.55M5 12.55a10.94 10.94 0 0 1 5.17-2.39M10.71 5.05A16 16 0 0 1 22.56 9M1.42 9a15.91 15.91 0 0 1 4.7-2.88M8.53 16.11a6 6 0 0 1 6.95 0M12 20h.01" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <h2 class="offline-title">Jsi offline</h2>
        <p class="offline-desc">Zkontroluj připojení k internetu<br>a zkus to znovu.</p>
        <button class="offline-retry" onclick="window.location.reload()">Zkusit znovu</button>
    </div>
</div>

<style>
    #offline-overlay {
        position: fixed;
        inset: 0;
        z-index: 9999;
        background: var(--bg);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.5s ease;
    }
    #offline-overlay.visible {
        opacity: 1;
        pointer-events: all;
    }
    .offline-card {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
        text-align: center;
        padding: 50px 40px;
        background: var(--glass);
        border: 1px solid var(--border);
        border-radius: 30px;
        backdrop-filter: blur(25px);
        max-width: 380px;
        width: 90%;
        box-shadow: 0 40px 100px rgba(0,0,0,0.4);
    }
    .offline-logo svg {
        width: 100%;
        height: 100%;
    }
    .offline-logo svg path {
        fill: var(--accent);
    }
    @keyframes logo-blink {
        0%, 100% { opacity: 1; filter: drop-shadow(0 0 12px var(--accent)); transform: scale(1); }
        50%       { opacity: 0.25; filter: drop-shadow(0 0 0px var(--accent)); transform: scale(0.92); }
    }
    .offline-icon {
        color: var(--text-muted);
        width: 36px;
        height: 36px;
        animation: icon-shake 2.8s ease-in-out infinite;
    }
    .offline-icon svg {
        width: 100%;
        height: 100%;
    }
    @keyframes icon-shake {
        0%, 90%, 100% { transform: translateX(0); }
        92%           { transform: translateX(-4px); }
        94%           { transform: translateX(4px); }
        96%           { transform: translateX(-3px); }
        98%           { transform: translateX(3px); }
    }
    .offline-title {
        font-size: 1.6rem;
        font-weight: 800;
        color: var(--text);
        margin: 0;
    }
    .offline-desc {
        font-size: 0.95rem;
        color: var(--text-muted);
        line-height: 1.6;
        margin: 0;
        max-width: none;
        margin-bottom: 0;
    }
    .offline-retry {
        margin-top: 8px;
        padding: 11px 32px;
        background: var(--accent);
        color: #000;
        font-weight: 800;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border: none;
        border-radius: 50px;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        transition: box-shadow 0.3s, transform 0.2s;
        box-shadow: 0 0 20px rgba(2,255,180,0.3);
    }
    .offline-retry:hover {
        box-shadow: 0 0 35px var(--accent);
        transform: scale(1.06);
    }
</style>

<script>
    (function () {
        /* --- OFFLINE --- */
        const overlay = document.getElementById('offline-overlay');
        function show() { overlay.classList.add('visible'); }
        function hide() { overlay.classList.remove('visible'); }
        if (!navigator.onLine) show();
        window.addEventListener('offline', show);
        window.addEventListener('online', hide);

        /* --- THEME DETECTION (light / dark) ---
           Nastavuje data-theme na <html> okamžitě při načtení
           a sleduje změny systémového nastavení v reálném čase.
           Funguje na všech zařízeních – iPhone, Android, desktop. */
        const mq = window.matchMedia('(prefers-color-scheme: dark)');

        function applyTheme(dark) {
            document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
        }

        applyTheme(mq.matches);
        mq.addEventListener('change', e => applyTheme(e.matches));
    })();
</script>
</body>
</html>
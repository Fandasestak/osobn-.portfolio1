// nastavení faviconu podle modu(light/dark) uživatele.
const mqc = window.matchMedia("(prefers-color-scheme: dark)");
const mqb = window.matchMedia("(prefers-color-scheme: light)");
const favicon = document.getElementById("favicon");

function updateFavicon() {
    favicon.href = mqc.matches ? "logoforwebDark.svg" : "logoforweb.svg";
    favicon.href = mqb.matches ? "logoforweb.svg" : "logoforwebDark.svg";
}
updateFavicon();

mqc.addEventListener("change", updateFavicon);
mqb.addEventListener("change", updateFavicon);

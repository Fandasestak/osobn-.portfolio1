// nastavení faviconu podle modu (light/dark) uživatele.
const mqc = window.matchMedia("(prefers-color-scheme: dark)");
const favicon = document.getElementById("favicon");

function updateFavicon() {
    favicon.href = mqc.matches ? "personal-logo-white.svg" : "personal.svg";
}
updateFavicon();

mqc.addEventListener("change", updateFavicon);
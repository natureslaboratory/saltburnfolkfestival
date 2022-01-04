import "@natureslaboratory/animations";
import './header.ts';




console.log("loaded");


const navBar = document.getElementsByClassName("c-navigation")[0];
const navLinks = Array.from(navBar.getElementsByTagName("a"));
const urlParts = window.location.pathname.split("/").filter(p => p);

navLinks.forEach(l => {
    if (l.href == "/" && window.location.pathname == "/") {
        l.classList.add("selected");
        return;
    }

    const urlBase = window.location.protocol + "//" + window.location.host;

    let baseHref = l.href;
    if (baseHref.includes(urlBase)) {
        baseHref = baseHref.split(urlBase).filter(p => p)[0].split("/").filter(p => p)[0];
    }

    if (urlParts.length > 0 && (urlParts[0] == baseHref)) {
        l.classList.add("selected");
        return;
    }
})
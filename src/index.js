import "@natureslaboratory/animations";


function offsetHeader() {
    let header = document.getElementById("header");
    let headerBox = header.getBoundingClientRect();
    let headerHeight = headerBox.bottom - headerBox.top;

    const body = document.getElementsByTagName("body")[0];

    body.style.paddingTop = `${headerHeight}px`;


    console.log(headerHeight);
    
    if (window.innerWidth < 680) {
        setNavMobile(headerHeight);
    } else {
        setNavDesktop();
    }

}

function setNavMobile(headerHeight) {
    let navigation = document.getElementById("navigation");
    // if (navigation.classList.contains("mobile")) {
    //     return;
    // }

    navigation.style.transition = "0ms";

    navigation.classList.add("mobile");

    
    navigation.style.top = `${headerHeight}px`;
    navigation.style.height = `${window.innerHeight - headerHeight}px`;
}

function setNavDesktop() {
    navigation.classList.remove("mobile");
    navigation.style.top = "unset";
    navigation.style.height = "unset";
}

const hamburgerButton = document.getElementById("hamburger_button");
const navigation = document.getElementById("navigation");
hamburgerButton.addEventListener("click", () => {
    navigation.style.transition = null;
    navigation.classList.toggle("show")
});

document.addEventListener("DOMContentLoaded", offsetHeader);
document.addEventListener("load", offsetHeader);
window.addEventListener("resize", offsetHeader);


console.log("loaded");


const navBar = document.getElementsByClassName("c-navigation")[0];
const navLinks = Array.from(navBar.getElementsByTagName("a"));
const splitUrl = window.location.pathname.split("/");
console.log(splitUrl);
const urlParts = splitUrl.filter(p => p);
console.log(urlParts);

navLinks.forEach(l => {
    if (l.href == "/" && window.location.pathname == "/") {
        l.classList.add("selected");
        return;
    }

    const splitHref = l.href.split("/").filter(p => p);
    if (urlParts.length > 0 && (urlParts[0] == splitHref[0])) {
        l.classList.add("selected");
        return;
    }
})
function offsetHeader() {
    const header = document.getElementById("header");
    const headerBox = header.getBoundingClientRect();
    const headerHeight = headerBox.bottom - headerBox.top;
    const body = document.getElementsByTagName("body")[0];

    body.style.paddingTop = `${headerHeight}px`;
    
    if (window.innerWidth < 680) {
        setNavMobile(headerHeight);
    } else {
        setNavDesktop();
    }

}

function setNavMobile(headerHeight) {
    const navigation = document.getElementById("navigation");

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

const headerLogo = (document.getElementsByClassName("c-header__logo") as HTMLCollectionOf<HTMLElement>)[0];

document.addEventListener("DOMContentLoaded", offsetHeader);
headerLogo.addEventListener("load", offsetHeader);
window.addEventListener("resize", offsetHeader);
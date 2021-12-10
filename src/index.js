import "@natureslaboratory/animations";


function offsetHeader() {
    let header = document.getElementById("header");
    let headerBox = header.getBoundingClientRect();
    let headerHeight = headerBox.bottom - headerBox.top;

    const body = document.getElementsByTagName("body")[0];

    body.style.paddingTop = `${headerHeight}px`;


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
window.addEventListener("resize", offsetHeader);


console.log("loaded");
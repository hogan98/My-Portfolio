import "./bootstrap";
const hamburger = document.querySelector(".hamburger");
const imgHero = document.querySelector(".img-hero");

function adjustHeroMargin() {
    const windowWidth = window.innerWidth;
    const navBar = document.querySelector(".nav-bar");

    if (windowWidth <= 900 && navBar.classList.contains("active")) {
        imgHero.style.marginTop = "380px";
    } else {
        imgHero.style.marginTop = "0";
    }
}

hamburger.onclick = function () {
    const navBar = document.querySelector(".nav-bar");
    navBar.classList.toggle("active");
    adjustHeroMargin(); // Call the adjustment function on hamburger click
};

// Add an event listener to handle window resize
window.addEventListener("resize", adjustHeroMargin);

// Normal Version with no Hero Image
// const hamburger = document.querySelector(".hamburger");
// hamburger.onclick = function () {
//     const navBar = document.querySelector(".nav-bar");
//     const imgHero = document.querySelector(".img-hero");
//     navBar.classList.toggle("active");

// };

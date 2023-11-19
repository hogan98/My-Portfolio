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

//Slider Js
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
const container = document.querySelector(".carousel-container");
const slides = document.querySelectorAll(".carousel-slide");

let slideIndex = 0;
const totalSlides = slides.length;

const showSlide = () => {
    slides.forEach((slide, index) => {
        if (index === slideIndex) {
            slide.style.display = "block";
        } else {
            slide.style.display = "none";
        }
    });
};

showSlide();

nextBtn.addEventListener("click", () => {
    slideIndex = (slideIndex + 1) % totalSlides;
    showSlide();
});

prevBtn.addEventListener("click", () => {
    slideIndex = (slideIndex - 1 + totalSlides) % totalSlides;
    showSlide();
});

//Scroll To Top BUton
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

window.addEventListener("scroll", () => {
    if (
        document.body.scrollTop > 30 ||
        document.documentElement.scrollTop > 30
    ) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
});

scrollToTopBtn.addEventListener("click", () => {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

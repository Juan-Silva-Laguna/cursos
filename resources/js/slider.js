const next = document.querySelector(".next");
const prev = document.querySelector(".previous");
const slides = document.querySelectorAll(".slide");
const loop = true
let index = 0;
display(index);
start();

function start() {
    setTimeout(function () {
        nextSlide()
        start();
    }, 3000);
}

function display(index) {
    slides.forEach((slide) => {
        slide.style.display = "none";
    });
    slides[index].style.display = "flex";
}

function nextSlide() {
    index++;
    if (index > slides.length - 1) {
        index = 0;
    }
    display(index);
}

function prevSlide() {
    index--;
    if (index < 0) {
        index = slides.length - 1;
    }
    display(index);
}

next.addEventListener("click", nextSlide);
prev.addEventListener("click", prevSlide);

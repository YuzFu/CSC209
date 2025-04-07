// Template function
const number = ["1 / 3", "2 / 3", "3 / 3"];
const image = ["../images/html.jpg", "../images/css.jpg", "../images/javascript.jpg"];
const text = ["HTML", "CSS", "JavaScript"];

const TEMPLATE = `<div class="mySlides fade">
                    <div class="numbertext">NUMBER</div>
                    <img src="IMAGE">
                    <div class="text">TEXT</div>
                </div>`;

function createSlides() {
    let slidesHTML = "";

    for (let i = 0; i < number.length; i++) {
        let slideContent = TEMPLATE
            .replace("NUMBER", number[i])
            .replace("IMAGE", image[i])
            .replace("TEXT", text[i]);

        slidesHTML += slideContent;
    }

    document.getElementById("slides").innerHTML = slidesHTML;
}

createSlides();

// Slideshow control
let slideIndex = 1;
let timer = null;
showSlides(slideIndex);

function plusSlides(n) {
    clearTimeout(timer);
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    clearTimeout(timer);
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    timer = setTimeout(() => showSlides(slideIndex + 1), 2000);
}

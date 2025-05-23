const TEMPLATE = `<div class="mySlides fade">
                    <div class="numbertext">NUMBER</div>
                    <img src="IMAGE">
                    <div class="text">TEXT</div>
                    </div>`;

function createSlides() {
    let slidesHTML = "";
    let dotsHTML = "";

    for (let i = 0; i < slidesData.length; i++) {
        const slide = TEMPLATE
            .replace("NUMBER", `${i + 1} / ${slidesData.length}`)
            .replace("IMAGE", slidesData[i].src)
            .replace("TEXT", slidesData[i].caption);

        slidesHTML += slide;
        dotsHTML += `<span class="dot" onclick="currentSlide(${i + 1})"></span>`;
    }

    document.getElementById("slides").innerHTML = slidesHTML;
    document.getElementById("dots").innerHTML = dotsHTML;
}

createSlides();

// Slideshow Logic
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
    const slides = document.getElementsByClassName("mySlides");
    const dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";

    timer = setTimeout(() => showSlides(slideIndex + 1),2000);
}

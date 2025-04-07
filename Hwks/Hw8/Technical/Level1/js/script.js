document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("imageContainer");

    images.forEach(src => {
        const img = document.createElement("img");
        img.src = src;
        img.style.width = "100%";
        container.appendChild(img);
    });
});

function toggleReadMe() {
    var text = document.getElementById("readMeText");
    var button = document.getElementById("readMeButton");
    if (text.style.display === "none") {
        text.style.display = "block";
        button.innerHTML = "Hide";
    } else {
        text.style.display = "none";
        button.innerHTML = "Read me";
    }
}
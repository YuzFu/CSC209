function switchStyle() {
    var sheet = document.getElementById("stylesheet");
    if (sheet.getAttribute("href") === "css/style1.css") {
        sheet.setAttribute("href", "css/style2.css");
    } else {
        sheet.setAttribute("href", "css/style1.css");
    }
}
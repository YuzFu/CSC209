var acc = document.getElementsByClassName("accordion");
var i;
let NRIMAGES = 3;
let link = ["../images/html.jpg","../images/css.jpg","../images/javascript.jpg"];
let linkName = ["image 1","image 2","image 3"];
let text = ["Download ","Download ","Download "];
let buttonText = ["Image 1","Image 2","Image 3"];

function toggleFunction() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
    } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
    }
}

for (let i = 0; i < NRIMAGES; i++) {
    const button = document.createElement('button');
    button.classList.add("accordion");

    const div = document.createElement('div');
    div.classList.add("panel");

    const p = document.createElement('p');
    const a = document.createElement('a');

    a.href = link[i];
    a.innerHTML = linkName[i];
    p.innerHTML = text[i];
    button.innerText = buttonText[i];
  
    p.appendChild(a);
    div.appendChild(p);
    document.body.appendChild(button);
    document.body.appendChild(div);
}

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", toggleFunction);
}
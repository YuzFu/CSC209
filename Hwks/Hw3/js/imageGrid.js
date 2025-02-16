var elements = document.getElementsByClassName("column");
var i;

function one() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.flex = "100%";
    }
}

function two() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.flex = "50%";
    }
}

function four() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.flex = "25%";
    }
}

var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");

for (var j = 0; j < btns.length; j++) {
    btns[j].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}

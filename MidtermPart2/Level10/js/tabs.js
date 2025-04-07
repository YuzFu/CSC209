const tab = document.getElementsByClassName('tab')[0];
var tabName = ["Flexbox","Current URL","Random","Canvas Clock","HTML DOM Events","JS Introduction","Array","Layout","Responsive","Tables and Lists"];
var link = ["flexbox.html",
    "currentURL.html",
    "random.html",
    "canvasClock.html",
    "htmlDomElements.html",
    "introduction.html",
    "array.html",
    "layout.html",
    "responsive.html",
    "tablesAndListsEx.html"];

for (let i = 0; i < tabName.length; i++) {
    let button = document.createElement('button');
    button.classList.add('tablinks');
    button.addEventListener("click", function(event) {
        openCity(event, tabName[i]);
    })
    button.innerText = tabName[i];
    tab.appendChild(button);

    let div = document.createElement('div');
    div.classList.add('tabcontent');
    div.id = tabName[i];

    let iframe = document.createElement('iframe');
    iframe.src = link[i];

    div.appendChild(iframe);
    document.body.appendChild(div);
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
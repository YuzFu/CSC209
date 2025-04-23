var request = new XMLHttpRequest();

request.open("GET", "../data/houses.json", true);

request.onreadystatechange = function () {
  if (request.readyState === 4 && request.status === 200) {
    var data = JSON.parse(request.responseText);
    var container = document.getElementById("card-container");

    for (var i = 0; i < data.length; i++) {
      var house = data[i];

      var card = document.createElement("div");
      card.className = "flip-card";

      var inner = document.createElement("div");
      inner.className = "flip-card-inner";

      // front
      var front = document.createElement("div");
      front.className = "flip-card-front";

      var link = document.createElement("a");
      link.href = house.url;
      link.appendChild(card);

      var img = document.createElement("img");
      img.src = house.image;
      img.style.width = "100%";

      var frontContainer = document.createElement("div");
      frontContainer.className = "front-container";

      var p = document.createElement("p");
      p.innerHTML = "<b>" + house.name + "</b>";

      frontContainer.appendChild(p);

      front.appendChild(img);
      front.appendChild(frontContainer);

      // back
      var back = document.createElement("div");
      back.className = "flip-card-back";

      function addStat(label, key) {
        var p = document.createElement("p");
        p.innerHTML = label + ": " + house[key];
        back.appendChild(p);
      }

      addStat("Year built", "Year built");
      addStat("Capacity", "Capacity");
      addStat("Residential floors", "Residential floors");
      addStat("Singles", "Singles");
      addStat("Doubles", "Doubles");
      addStat("Triples", "Triples");
      addStat("Bathroom sharing", "Approximate number sharing a bathroom");
      addStat("Accessible", "Accessible");
      addStat("Elevator", "Elevator");

      // together
      inner.appendChild(front);
      inner.appendChild(back);
      card.appendChild(inner);
      
      container.appendChild(link);
    }
  }
};

request.send();

function searchCards() {
  var input = document.getElementById("searchInput");
  var filter = input.value.toUpperCase();
  var container = document.getElementById("card-container");
  var cards = container.getElementsByTagName("a");

  for (var i = 0; i < cards.length; i++) {
    var title = cards[i].querySelector("p");
    if (title) {
      var txtValue = title.textContent || title.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        cards[i].style.display = "";
      } else {
        cards[i].style.display = "none";
      }
    }
  }
}
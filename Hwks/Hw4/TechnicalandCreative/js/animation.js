var squares = [
    { id: "Bee", speedId: "beeSpeed", dx: -1, dy: -1, left: 350, top: 350, background: "url('images/bee.png')" },
    { id: "Ladybug", speedId: "ladybugSpeed", dx: 1, dy: -1, left: 0, top: 350, background: "url('images/ladybug.png')" },
    { id: "Moth", speedId: "mothSpeed", dx: -1, dy: 1, left: 350, top: 0, background: "url('images/moth.png')" },
    { id: "Butterfly", speedId: "butterflySpeed", dx: 1, dy: 1, left: 0, top: 0, background: "url('images/butterfly.png')" }
];
  
window.onload = function() {
    var controlsContainer = document.getElementById("controlsContainer");
    var squaresContainer = document.getElementById("squaresContainer");
  
    // Generate controls for each square from the array.
    squares.forEach(function(sq) {
        // Label
        var label = document.createElement("label");
        label.setAttribute("for", sq.speedId);
        label.textContent = sq.id + " speed ";

        // Select
        var select = document.createElement("select");
        select.id = sq.speedId;
        var optionSlow = document.createElement("option");
        optionSlow.value = 30;
        optionSlow.textContent = "Slow";
        select.appendChild(optionSlow);
        var optionMed = document.createElement("option");
        optionMed.value = 20;
        optionMed.textContent = "Medium";
        select.appendChild(optionMed);
        var optionFast = document.createElement("option");
        optionFast.value = 10;
        optionFast.textContent = "Fast";
        select.appendChild(optionFast);

        // Button to move this square.
        var button = document.createElement("button");
        button.id = "move" + sq.id + "Btn";
        button.textContent = "Move " + sq.id;
        button.onclick = function() {
        moveSq(sq.id, sq.speedId);
        };

        // Append controls to the container.
        controlsContainer.appendChild(label);
        controlsContainer.appendChild(select);
        controlsContainer.appendChild(button);
        controlsContainer.appendChild(document.createElement("br"));
        controlsContainer.appendChild(document.createElement("br"));
    });
  
    // "Move All" button.
    var allButton = document.createElement("button");
    allButton.id = "allBtn";
    allButton.textContent = "Move All";
    allButton.onclick = function() {
        startAll();
    };
    controlsContainer.appendChild(allButton);
    controlsContainer.appendChild(document.createElement("br"));
    controlsContainer.appendChild(document.createElement("br"));
  
    // Create square elements based on the array.
    squares.forEach(function(sq) {
        var div = document.createElement("div");
        div.id = sq.id;
        div.className = "square";
        squaresContainer.appendChild(div);
    });
  
    // Set each square's initial position and background.
    squares.forEach(function(sq) {
        var square = document.getElementById(sq.id);
        if (square) {
            square.style.left = sq.left + "px";
            square.style.top = sq.top + "px";
            square.style.backgroundImage = sq.background;
        }
    });
};
  
function moveSq(squareId, speedId) {
    var square = document.getElementById(squareId);
    var pos = 0;
    var speed = parseInt(document.getElementById(speedId).value, 10);
    
    var dx, dy, posx, posy;
    // Retrieve direction and initial position from the squares array.
    for (var i = 0; i < squares.length; i++) {
        if (squares[i].id === squareId) {
            dx = squares[i].dx;
            dy = squares[i].dy;
            posx = squares[i].left;
            posy = squares[i].top;
            break;
        }
    }
    
    var stepId = setInterval(function step() {
        if (pos === 350) {
            clearInterval(stepId);
        } else {
            pos++;
            square.style.left = (posx + (pos * dx)) + "px";
            square.style.top = (posy + (pos * dy)) + "px";
        }
    }, speed);
}
  
function startAll() {
    squares.forEach(function(sq) {
        moveSq(sq.id, sq.speedId);
    });
}

// template and commendation fo red square
// // movement of red square
// function moveRed()
// {   
//     // get the red square element
//     var redSquare = document.getElementById("redSq");  
//     // set timer for red square 
//     var redPos = 0;
//     var speed = redSpeed();
//     // call the stepRed function every 10 ms until clearInterval is called after 350 ms
//     var stepRedId = setInterval(stepRed, speed);

//     // step of red square
//     function stepRed() {
//         // stop moving if the time is up
//         if (redPos == 350) {
//             clearInterval(stepRedId);
//         } else {
//             // keep the timer, move the square both horizontally and vertically
//             redPos++; 
//             redSquare.style.top = redPos + 'px'; 
//             redSquare.style.left = redPos + 'px';
//         }
//     }
// }

// function redSpeed() {
//     const speed = document.getElementById("redSpeed").value;
//     return speed;
// }
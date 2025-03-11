document.addEventListener("DOMContentLoaded", function () {
    var squares = [
        { id: "Bee", speedId: "beeSpeed", dx: -1, dy: -1, left: 350, top: 350, background: "url('images/bee.png')" },
        { id: "Ladybug", speedId: "ladybugSpeed", dx: 1, dy: -1, left: 0, top: 350, background: "url('images/ladybug.png')" },
        { id: "Moth", speedId: "mothSpeed", dx: -1, dy: 1, left: 350, top: 0, background: "url('images/moth.png')" },
        { id: "Butterfly", speedId: "butterflySpeed", dx: 1, dy: 1, left: 0, top: 0, background: "url('images/butterfly.png')" }
    ];

    var controlsContainer = document.getElementById("controlsContainer");
    var squaresContainer = document.getElementById("squaresContainer");

    squares.forEach(function (sq) {
        var label = document.createElement("label");
        label.setAttribute("for", sq.speedId);
        label.textContent = sq.id + " speed ";

        var select = document.createElement("select");
        select.id = sq.speedId;
        select.innerHTML = `
            <option value="30">Slow</option>
            <option value="20">Medium</option>
            <option value="10">Fast</option>
        `;

        var button = document.createElement("button");
        button.id = "move" + sq.id + "Btn";
        button.textContent = "Move " + sq.id;
        button.addEventListener("click", function () {
            moveSq(sq.id, sq.speedId);
        });

        controlsContainer.appendChild(label);
        controlsContainer.appendChild(select);
        controlsContainer.appendChild(button);
        controlsContainer.appendChild(document.createElement("br"));
        controlsContainer.appendChild(document.createElement("br"));
    });

    var allButton = document.createElement("button");
    allButton.id = "allBtn";
    allButton.textContent = "Move All";
    allButton.addEventListener("click", startAll);
    controlsContainer.appendChild(allButton);
    controlsContainer.appendChild(document.createElement("br"));
    controlsContainer.appendChild(document.createElement("br"));

    squares.forEach(function (sq) {
        var div = document.createElement("div");
        div.id = sq.id;
        div.className = "square";
        squaresContainer.appendChild(div);
    });

    squares.forEach(function (sq) {
        var square = document.getElementById(sq.id);
        if (square) {
            square.style.left = sq.left + "px";
            square.style.top = sq.top + "px";
            square.style.backgroundImage = sq.background;
        }
    });

    function moveSq(squareId, speedId) {
        var square = document.getElementById(squareId);
        var pos = 0;
        var speed = parseInt(document.getElementById(speedId).value, 10);
        var dx, dy, posx, posy;

        for (var i = 0; i < squares.length; i++) {
            if (squares[i].id === squareId) {
                dx = squares[i].dx;
                dy = squares[i].dy;
                posx = squares[i].left;
                posy = squares[i].top;
                break;
            }
        }

        var stepId = setInterval(function () {
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
        squares.forEach(function (sq) {
            moveSq(sq.id, sq.speedId);
        });
    }
});

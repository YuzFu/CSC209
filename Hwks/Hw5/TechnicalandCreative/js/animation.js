let c = document.getElementById("myCanvas");
let ctx = c.getContext("2d");
let NRPTS = 10;
let NRSTEPS = 10;
let disks = [];
let initialDisks = [];
let animation;

function initializePoint() {
    NRPTS = parseInt(document.getElementById("NRPTS").value, 10);
    disks = [];
    initialDisks = [];

    for (let i = 0; i < NRPTS; i++) {
        let newDisk = {
            x: Math.floor(Math.random() * 500) + 1,
            y: Math.floor(Math.random() * 500) + 1, 
            dx: Math.floor(Math.random() * 50) - 24, 
            dy: Math.floor(Math.random() * 50) - 24, 
            color:randomColor()
        };
        disks.push(newDisk);
        initialDisks.push({ ...newDisk });
    }
    drawScene();
}

function drawScene() {
    if (!document.getElementById("trace").checked) {
        ctx.clearRect(0, 0, c.width, c.height);
    }

    for (let i = 0; i < disks.length; i++) {
        ctx.beginPath();
        ctx.arc(disks[i].x, disks[i].y, 10, 0, 2 * Math.PI);
        ctx.lineWidth = 5;
        ctx.strokeStyle = disks[i].color;
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(disks[i].x, disks[i].y);
        ctx.lineTo(disks[i].x + disks[i].dx, disks[i].y + disks[i].dy);
        ctx.lineWidth = 5;
        ctx.strokeStyle = disks[i].color;
        ctx.stroke();
        ctx.closePath();
    }
}

function randomPoint() {
    initialDisks = [];
    for (let i = 0; i < disks.length; i++) {
        disks[i].x = Math.floor(Math.random() * 500) + 1;
        disks[i].y = Math.floor(Math.random() * 500) + 1;
        disks[i].dx = Math.floor(Math.random() * 50) - 24;
        disks[i].dy = Math.floor(Math.random() * 50) - 24;

        initialDisks.push({x: disks[i].x, y: disks[i].y, dx: disks[i].dx, dy: disks[i].dy, color: disks[i].color});
    }
    drawScene();
}

function randomColor() {
    let color = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
    return color;
}

function movePoint() {
    let speed = parseInt(document.getElementById("velocity").value, 10);
    let steps = 0;

    animation = setInterval(() => {
        let NRSTEPS = updatePoint();

        if (NRSTEPS == 0 || steps < NRSTEPS) {
            for (let i = 0; i < disks.length; i++) {
                disks[i].x += disks[i].dx;
                disks[i].y += disks[i].dy;
    
                if (disks[i].x < 0 || disks[i].x > c.width) disks[i].dx *= -1;
                if (disks[i].y < 0 || disks[i].y > c.height) disks[i].dy *= -1;
            }
    
            drawScene();
            steps++;
        } else {
            clearInterval(animation);
        }
    }, speed);
}

function resetPoint() {
    ctx.clearRect(0, 0, c.width, c.height);

    for (let i = 0; i < disks.length; i++) {
        disks[i].x = initialDisks[i].x;
        disks[i].y = initialDisks[i].y;
        disks[i].dx = initialDisks[i].dx;
        disks[i].dy = initialDisks[i].dy;
    }
    drawScene();
}

function updatePoint() {
    return parseInt(document.getElementById("NRSTEPS").value, 10);
}

function stopPoint() {
    if (animation) {
        clearInterval(animation);
    }
}

window.onload(initializePoint())

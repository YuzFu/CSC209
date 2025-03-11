document.addEventListener("DOMContentLoaded", function () {
    const canvas = document.getElementById('c');
    const ctx = canvas.getContext('2d');

    let grid = [];
    let startGrid = [];
    let intervalId = null;
    let generation = 0;

    const button = document.getElementById("startStop");
    const speedInput = document.getElementById('speed');
    const tileSizeInput = document.getElementById('tile');
    const colsInput = document.getElementById('cols');
    const rowsInput = document.getElementById('rows');
    const liveColor = document.getElementById('live');
    const deadColor = document.getElementById('dead');
    const gridColor = document.getElementById('grid');

    let tileSize = tileSizeInput.valueAsNumber || 10;
    let cols = colsInput.valueAsNumber || 50;
    let rows = rowsInput.valueAsNumber || 50;

    function updateCanvas() {
        tileSize = tileSizeInput.valueAsNumber || 10;
        cols = colsInput.valueAsNumber || 50;
        rows = rowsInput.valueAsNumber || 50;
        
        canvas.width = tileSize * cols;
        canvas.height = tileSize * rows;
        canvas.style.border = `1px solid ${gridColor.value}`;
        
        initializeGrid();
    }

    function updateSpeed() {
        if (intervalId !== null) {
            clearInterval(intervalId);
            intervalId = setInterval(nextGeneration, speedInput.valueAsNumber);
        }
    }

    function initializeGrid(randomize = true) {
        grid = [];
        for (let i = 0; i < rows; i++) {
            grid[i] = [];
            for (let j = 0; j < cols; j++) {
                grid[i][j] = randomize ? Math.round(Math.random()) : 0;
            }
        }
        startGrid = JSON.parse(JSON.stringify(grid));
        generation = 0; 
        drawGrid();
    }

    function drawGrid() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (let y = 0; y < rows; y++) {
            for (let x = 0; x < cols; x++) {
                ctx.fillStyle = grid[y][x] === 1 ? liveColor.value : deadColor.value;
                ctx.fillRect(x * tileSize, y * tileSize, tileSize, tileSize)
                ctx.strokeStyle = gridColor.value;
                ctx.strokeRect(x * tileSize, y * tileSize, tileSize, tileSize);
            }
        }

        document.getElementById('generation').innerText = "Game of Life - Generation " + generation;
    }

    function checkNeighbors(x, y) {
        let counter = 0;
        for (let j = y-1; j <= y+1; j++) {
            for (let i = x-1; i <= x+1; i++) {
                if (i >= 0 && i < cols && j >= 0 && j < rows) {
                    counter += grid[j][i];
                }
            }
        }
        counter -= grid[y][x];
        return counter;
    }

    function nextGeneration() {
        let newGrid = JSON.parse(JSON.stringify(grid));

        for (let y = 0; y < rows; y++) {
            for (let x = 0; x < cols; x++) {
                let liveNeighbors = checkNeighbors(x, y);

                if (grid[y][x] === 1) {
                    if (liveNeighbors < 2 || liveNeighbors > 3) {
                        newGrid[y][x] = 0;
                    }
                } else {
                    if (liveNeighbors === 3) {
                        newGrid[y][x] = 1;
                    }
                }
            }
        }

        grid = newGrid;
        generation += 1;
        drawGrid();
    }

    function startStop() {
        if (intervalId === null) {
            intervalId = setInterval(nextGeneration, speedInput.valueAsNumber * 100);
            button.innerText = "Stop";
        } else {
            clearInterval(intervalId);
            intervalId = null;
            button.innerText = "Start";
        }
    }

    function resetGrid() {
        grid = JSON.parse(JSON.stringify(startGrid));
        generation = 0;
        drawGrid();
    }

    function saveGrid() {
        let link = document.createElement('a');
        link.download = 'game_of_life.png';
        link.href = canvas.toDataURL("image/png");
        link.click();
    }

    document.getElementById("startStop").addEventListener("click", startStop);
    document.getElementById("next").addEventListener("click", nextGeneration);
    document.getElementById("reset").addEventListener("click", resetGrid);
    document.getElementById("save").addEventListener("click", saveGrid);
    document.getElementById("clear").addEventListener("click", () => initializeGrid(false));
    document.getElementById("random").addEventListener("click", initializeGrid);

    updateCanvas();
    drawGrid();
});

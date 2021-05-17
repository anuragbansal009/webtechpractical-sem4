var CELL_SIZE = 40;

function Labyrinth() {
    this.map = [
        [0, 0, 1, 1, 1, 0],
        [1, 0, 0, 0, 1, 0],
        [1, 0, 1, 0, 0, 0],
        [1, 0, 1, 1, 1, 0],
        [1, 0, 0, 0, 1, 0]];
}

/* TODO implement core labyrinth functionality here */

function printconsole() {

    Labyrinth();
    for (var i = 0; i < 5; i++) {
        for (var j = 0; j < 6; j++) {
            var temp = map[i][j];
            if (temp == 1) {
                map[i][j] = "*";
            }
            else {
                map[i][j] = " ";
            }
        }
        console.log(map[i][0], map[i][1], map[i][2], map[i][3], map[i][4], map[i][5]);
    }
}

function printDisplay() {

    Labyrinth();
    for (var i = 0; i < 5; i++) {
        for (var j = 0; j < 6; j++) {
            var temp = map[i][j];
            if (i == 0 && j == 0) {
                var start = document.createElement("div");
                start.className = 'start';
                start.id = 'myId'
                document.body.appendChild(start);
                var empty = document.createElement("div");
                empty.className = 'empty';
                document.body.appendChild(empty); 
            }
            else if (i == 3 && j == 5) {
                var goal = document.createElement("div");
                goal.className = 'goal';
                document.body.appendChild(goal);
            }
            else if (temp == 1) {
                var wall = document.createElement("div");
                wall.className = 'wall';
                document.body.appendChild(wall);
            }
            else {
                var empty = document.createElement("div");
                empty.className = 'empty';
                document.body.appendChild(empty);
            }
        }
        var nextline = document.createElement("br");
        document.body.appendChild(nextline);
    }
};


var arrayofwall = [];
var k = 0;

function arr() {
Labyrinth();
for (var i = 0; i < 5; i++) {
    for (var j = 0; j < 6; j++) {
        var temp = map[i][j];
        if (temp == 1) {
            var a = 1*(4+(i*40));
            var b = 1*(8+(j*40));
            arrayofwall[k] = {x: b, y: a};
            k++;
        }
        else {
        }
    }
}
}

arr();

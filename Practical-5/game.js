/* TODO implement game logic here */
Labyrinth();
printconsole();



function detectKey(e) {
    var posLeft = document.getElementById('myId').offsetLeft;
    var posTop = document.getElementById('myId').offsetTop;
    var temp = 0;
    e = e || window.event;
    if (posLeft == 208 && posTop == 124) {
        alert("Congratulations! Reload to try again.");
    }
    else if (e.keyCode == '38' && posTop >= 44) {
        // up arrow
        for (var i = 0; i < k; i++) {
            if (posLeft == arrayofwall[i].x && (posTop - 40) == arrayofwall[i].y) {
                temp = temp + 1;
            }
        }
        if (temp == 0) {
            document.getElementById('myId').style.marginTop = (posTop - 48) + "px";
        }
    }
    else if (e.keyCode == '40' && posTop <= 124) {
        // down arrow
        for (var i = 0; i < k; i++) {
            if (posLeft == arrayofwall[i].x && (posTop + 40) == arrayofwall[i].y) {
                temp = temp + 1;
            }
        }
        if (temp == 0) {
            document.getElementById('myId').style.marginTop = (posTop + 32) + "px";
        }
    }
    else if (e.keyCode == '37' && posLeft >= 48) {
        // left arrow
        for (var i = 0; i < k; i++) {
            if ((posLeft - 40) == arrayofwall[i].x && posTop == arrayofwall[i].y) {
                temp = temp + 1;
            }
        }
        if (temp == 0) {
            document.getElementById('myId').style.marginLeft = (posLeft - 48) + "px";
        }
    }
    else if (e.keyCode == '39' && posLeft <= 168) {
        // right arrow
        for (var i = 0; i < k; i++) {
            if ((posLeft + 40) == arrayofwall[i].x && posTop == arrayofwall[i].y) {
                temp = temp + 1;
            }
        }
        if (temp == 0) {
            document.getElementById('myId').style.marginLeft = (posLeft + 32) + "px";
        }
    }
    
    
}

document.onkeydown = detectKey;



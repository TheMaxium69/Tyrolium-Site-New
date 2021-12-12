var konamiCode = "↑↑↓↓←→←→AB";
var cmd = null

$(document).keyup(function (e) {

    if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40 || e.keyCode == 65 || e.keyCode == 66) {
        cheatcode("key" + e.keyCode + "|");
    } else {
        cmd = null;
    }

});


function cheatcode(arg) {

    if(arg == "key38|"){
        if(cmd == null){
            cmd = "↑";
        } else if (cmd == "↑"){
            cmd = cmd + "↑";
        } else {
            cmd = null;
        }
    }

    if(arg == "key40|"){
        if(cmd == "↑↑"){
            cmd = "↑↑↓";
        } else if (cmd == "↑↑↓"){
            cmd = cmd + "↓";
        } else {
            cmd = null;
        }
    }

    if(arg == "key37|"){
        if(cmd == "↑↑↓↓"){
            cmd = "↑↑↓↓←";
        } else if (cmd == "↑↑↓↓←→"){
            cmd = cmd + "←";
        } else {
            cmd = null;
        }
    }

    if(arg == "key39|"){
        if(cmd == "↑↑↓↓←"){
            cmd = "↑↑↓↓←→";
        } else if (cmd == "↑↑↓↓←→←"){
            cmd = cmd + "→";
        } else {
            cmd = null;
        }
    }

    if(arg == "key65|"){
        if(cmd == "↑↑↓↓←→←→"){
            cmd = "↑↑↓↓←→←→A";
        } else {
            cmd = null;
        }
    }

    if(arg == "key66|"){
        if(cmd == "↑↑↓↓←→←→A"){
            cmd = "↑↑↓↓←→←→AB";
        } else {
            cmd = null;
        }
    }

    if(cmd){
        console.log(cmd);
    }

    let game;
    if(arg == "konamicode" || cmd == konamiCode){
        cmd = null;
        game = getRandomInt(3)
        alert("GG ! Le jeu n°" + (game+1) + " vas se lancer" );

    }
    if(arg == "flappybird" || game == 0){
        window.location.href='https://themaxium69.github.io/Flappium/'
    }
    if(arg == "clavier" || game == 1){
        window.location.href='https://themaxium69.github.io/Clavium/'
    }
    if(arg == "echec" || game == 2){
        window.location.href='https://themaxium69.github.io/Echec-ium/'
    }
}

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

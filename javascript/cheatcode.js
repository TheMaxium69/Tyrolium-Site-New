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

    if(arg == "konamicode" || cmd == konamiCode){
        alert("GG!");
        cmd = null;
    }
    if(arg == "flappybird"){
        window.location.href='https://themaxium69.github.io/Flappium/'
    }
    if(arg == "clavier"){
        window.location.href='https://themaxium69.github.io/Clavium/'
    }
    if(arg == "echec"){
        window.location.href='https://themaxium69.github.io/Echec-ium/'
    }
}

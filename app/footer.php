<?php

function footer(){

    require "env.php";
    if ($env_isAccount == true){
        require_once "composant/footer.phtml";
    } else {
        require_once "composant/footer2.phtml";
    }



}

?>
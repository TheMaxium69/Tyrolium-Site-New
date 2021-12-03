<?php
function head($page){


    if ($page == 1){
        $title = "Tyrolium Site";
    } else {
        $title = "404 | Tyrolium Site";
    }


    include "env.php";

    require_once "composant/meta.phtml";
    echo '<title>'. $title .'</title>';
    echo '<link href="'. $env_logoUrl .'" rel="shortcut icon">';
    require_once "extension/ext.php";
}
?>
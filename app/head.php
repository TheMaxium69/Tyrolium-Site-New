<?php
function head($page)
{


    if ($page == 1) {
        $title = "Tyrolium Site";
    } else if ($page == 2){
        $title = "Prestation | Tyrolium Site";
    } else if ($page == 3){
        $title = "Projet | Tyrolium Site";
    } else if ($page == 4){
        $title = "Colaboration | Tyrolium Site";
    } else if ($page == 5){
        $title = "Histoire | Tyrolium Site";
    } else if ($page == 7){
        $title = "Plus d'Infos | Tyrolium Site";
    } else if ($page == 8){
        $title = "Contacte | Tyrolium Site";
    } else {
        $title = "404 | Tyrolium Site";
    }


    include "env.php";

    echo '<!doctype html> <html lang="fr"> <head>';
    require_once "composant/meta.phtml";
    echo '<title>'. $title .'</title>';
    echo '<link href="'. $env_logoUrl .'" rel="shortcut icon">';
    require_once "extension/ext.php";
    echo '</head>';
}
?>
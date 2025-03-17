<?php
function head($page)
{

    require "lang.php";

    if ($page == 1) {
        $title =  "Tyrolium";
    } else if ($page == 3){
        $title = $lang['page'][2] . " | Tyrolium";
    } else if ($page == 2){
        $title = $lang['page'][1] . " | Tyrolium";
    } else if ($page == 4){
        $title = $lang['page'][3] . " | Tyrolium";
    } else if ($page == 5){
        $title = $lang['page'][4] . " | Tyrolium";
    } else if ($page == 6){
        $title = $lang['page'][5] . " | Tyrolium";
    } else if ($page == 8){
        $title = $lang['page'][7] . " | Tyrolium";
    } else if ($page == 7){
        $title = $lang['page'][6] . " | Tyrolium";
    } else if ($page == 9){
        $title = $lang['page'][8] . " | Tyrolium";
    } else {
        $title = $lang['page'][9] . " | Tyrolium";
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
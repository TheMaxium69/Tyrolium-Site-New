<?php
function navbar($page)
{

    require "env.php";
    require "lang.php";

    require_once "./composant/navbar.phtml";

    echo '<script src="javascript/navbar.js"></script>';

    if ($page >= 7){
        echo '
        <style>
            .hori-selector .right, .hori-selector .left{
                position: unset;
                width: unset;
                height: unset;
                background-color: unset;
                bottom: unset;
                display: none;
            }
        </style>';
    }
}
?>




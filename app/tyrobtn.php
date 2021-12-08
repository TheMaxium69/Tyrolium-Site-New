<?php

function tyrobtn($url, $id, $text){

    echo '<button id="btn-'. $id .'" class="tyrobutton" data-url="'. $url .'">'. $text .'</button>';
    echo '<script src="javascript/tyrobtn.js"></script>';

}
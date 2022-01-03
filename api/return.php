<?php

function erreur($errCode){

    $url = "../contact.php?err=" . $errCode;

    header('Location: '. $url );

}

function valide($trueCode){

    $url = "../contact.php?true=" . $trueCode;

    header('Location: '. $url );

}
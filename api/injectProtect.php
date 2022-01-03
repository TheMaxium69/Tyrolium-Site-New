<?php

require_once "request.php";

function protect (sendRequest $sendObject){

    $sendObject->raison = "*" . $sendObject->raison . "*";

    if ($sendObject->prestation != null){
        $sendObject->prestation = "*" . $sendObject->prestation . "*";
    }

    if ($sendObject->web != null){
        $sendObject->web = "*" . $sendObject->web . "*";
    }

    if ($sendObject->mc != null){
        $sendObject->mc = "*" . $sendObject->mc . "*";
    }

    if ($sendObject->projet != null){
        $sendObject->projet = "*" . $sendObject->projet . "*";
    }

    $sendObject->firstName = "*" . $sendObject->firstName . "*";
    $sendObject->lastName = "*" . $sendObject->lastName . "*";
    $sendObject->email = "*" . $sendObject->email . "*";

    if ($sendObject->phoneNumber != null){
        $sendObject->phoneNumber = "*" . $sendObject->phoneNumber . "*";
    }
    if ($sendObject->content != null){
        $sendObject->content = "*" . $sendObject->content . "*";
    }

    return $sendObject;

}
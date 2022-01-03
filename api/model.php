<?php

require_once "request.php";
require_once "return.php";

function insert(sendRequest $requestFinal){

        $raison = $requestFinal->raison;
        $prestation = $requestFinal->prestation;
        $web = $requestFinal->web;
        $mc = $requestFinal->mc;
        $projet = $requestFinal->projet;
        $firstName = $requestFinal->firstName;
        $lastName = $requestFinal->lastName;
        $email = $requestFinal->email;
        $phoneNumber = $requestFinal->phoneNumber;
        $content = $requestFinal->content;


    require "../app/env.php";

    if ($APP_ENV == "PROD"){
        include "/home/tyroliumfg/DB-tyroliumfguser.php";
    } else if ($APP_ENV == "DEV"){
        include "D:/wamp64/www/DB-tyroliumfguser.php";
    } else if ($APP_ENV == "TEST"){
        include "/var/www/html/test/DB-vps.php";
    }

    $q = $db->prepare("INSERT INTO `contact` (`raison`, `prestation`, `web`, `mc`, `projet`, `firstName`, `lastName`, `email`, `phoneNumber`, `content`) VALUES (:raison, :prestation, :web, :mc, :projet, :firstName, :lastName, :email, :phoneNumber, :content)");

    $q->execute([
        'raison' => $raison,
        'prestation' => $prestation,
        'web' => $web,
        'mc' => $mc,
        'projet' => $projet,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'phoneNumber' => $phoneNumber,
        'content' => $content
    ]);

    valide("T101");


}
<?php

//PROD or DEV
$APP_ENV = "DEV";


$env_url = "https://tyrolium.fr";

$env_urlImage = $env_url . "/Contenu/Image/";

$env_logoUrl = $env_urlImage . "Tyrolium Site.png";

$env_assets = "assets/";

$env_pp = $env_assets . "pp/";

$env_pp_default = $env_pp . "default.jpg";


$env_back = array (
    $env_urlImage . "Background6",
    $env_urlImage . "Background2",
    $env_urlImage . "Background10",
    $env_urlImage . "Background10",
    $env_urlImage . "Background7",
    $env_urlImage . "Background10",
    $env_urlImage . "Background10",
);

$env_perso = array(

    array("name" => "Maxime Tournier",
        "role" => "Directeur-Fondateur,<br> développer",
        "icon" => $env_pp . "Maxime_Tournier.jpg",
        "facebook" => "https://facebook.com/",
        "twitter" => "https://twitter.com/"),

    array("name" => "Norman Jorge De Freitas",
        "role" => "Manager,<br> Compositeur",
        "icon" => null,
        "facebook" => null,
        "twitter" => null),

    array("name" => "Pierre-Louis",
        "role" => "Conseillez Technique,<br> Responsable Communication",
        "icon" => null,
        "facebook" => null,
        "twitter" => "https://twitter.com/"),

    array("name" => "Dylan Argentino",
        "role" => "Designer,<br> Dessinateur",
        "icon" => null,
        "facebook" => null,
        "twitter" => null),

    array("name" => "Edward Thouvenin",
        "role" => "Compositeur",
        "icon" => null,
        "facebook" => null,
        "twitter" => null),

    array("name" => "Maewan Marthelot",
        "role" => "Graphiste",
        "icon" => null,
        "facebook" => null,
        "twitter" => null),

    array("name" => "Théotime Vandevoorde Rostankowski",
        "role" => "Builder, Graphiste",
        "icon" => $env_pp . "Théotime_Vandevoorde_Rostankowski.jpg",
        "facebook" => null,
        "twitter" => null),

    array("name" => "Arthur Verschelde",
        "role" => "Builder, Graphiste",
        "icon" => null,
        "facebook" => null,
        "twitter" => null),

    array("name" => "Flavien Dechoz",
        "role" => "Modérateur",
        "icon" => $env_pp . "Flavien_Dechoz.jpg",
        "facebook" => null,
        "twitter" => null),

    array("name" => "L&eacute;na Chervier",
        "role" => "Assitante<br> de modération",
        "icon" => $env_pp . "Léna_Chervier.jpg",
        "facebook" => null,
        "twitter" => null),



)

?>
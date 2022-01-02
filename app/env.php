<?php

//PROD or DEV
$APP_ENV = "DEV";

// FALSE or TRUE
$env_isAccount = false;


$env_url = "https://tyrolium.fr";

$env_urlImage = $env_url . "/Contenu/Image/";

$env_logoUrl = $env_urlImage . "Tyrolium Site.png";

$env_assets = "assets/";

$env_pp = $env_assets . "pp/";

$env_pp_default = $env_pp . "Default.jpg";


$env_back = array (

    $env_urlImage . "Background6",
    $env_urlImage . "Background2",
    $env_assets . "test/BackgroundTest3.jpg",
    $env_assets . "test/BackgroundTest2.jpg",
    $env_urlImage . "Background7",
    $env_assets . "test/BackgroundTest4.jpg",
    $env_assets . "test/BackgroundTest.jpg",
);

$env_perso = array(

    array("name" => "Maxime Tournier",
        "role" => "Directeur-Fondateur,<br> développer",
        "icon" => "Maxime_Tournier.jpg",
        "instagram" => "https://instagram.com/the_maxime_san",
        "twitter" => "https://twitter.com/MaximeTournier2",
        "github" => "https://github.com/TheMaxium69",
        "linkedin" => "https://linkedin.com/in/maxime-tournier-tyrolium",

        ),

    array("name" => "Norman Jorge De Freitas",
        "role" => "Manager, Écrivain,<br> Compositeur, Rappeur",
        "icon" => "Norman_Jorge_De_Freitas.jpg",
        "instagram" => "https://www.instagram.com/rayquacondasensei_off/",
        "linkedin" => "https://www.linkedin.com/in/norman-jorge-de-freitas-0a736a203/",

        ),

    array("name" => "Pierre-Louis Devaud",
        "role" => "Conseillez Technique,<br> Responsable Communication",
        "icon" => "Pierre-Louis_Devaud.jpg",

        ),

    array("name" => "Dylan Argentino",
        "role" => "Designer,<br> Dessinateur",
        "icon" => "Dylan_Argentino.jpg",
        "instagram" => "https://www.instagram.com/viking_senpai/",


        ),

    array("name" => "Edward Thouvenin",
        "role" => "Compositeur,<br> Beatmaker",
        "icon" => "Edward_Thouvenin.jpg",
        "instagram" => "https://www.instagram.com/edward_el_renard/",
        "soundcloud" => "https://soundcloud.com/wared-22283149",

        ),

    array("name" => "Maewan Marthelot",
        "role" => "Graphiste, Monteur-vidéo,<br> Vidéaste, Photographe",
        "icon" => "Maewan_Marthelot.jpg",
        "instagram" => "https://www.instagram.com/maewanm/",
        "youtube" => "https://www.youtube.com/c/MA3WAN",
        "linkedin" => "https://www.linkedin.com/in/ma%C3%ABwan-marthelot-01744b203"

        ),

    array("name" => "Théotime Vandevoorde Rostankowski",
        "role" => "Builder, Graphiste",
        "icon" => "Théotime_Vandevoorde_Rostankowski.jpg",

        ),

    array("name" => "Arthur Verschelde",
        "role" => "Builder, Graphiste",
        "icon" => "Arthur_Verschelde.jpg",

        ),

    array("name" => "Flavien Dechoz",
        "role" => "Modérateur",
        "icon" => "Flavien_Dechoz.jpg",

        ),

    array("name" => "L&eacute;na Chervier",
        "role" => "Assitante<br> de modération",
        "icon" => "Léna_Chervier.jpg",
        "instagram" => "https://www.instagram.com/lena_cherv/",
        "linkedin" => "https://www.linkedin.com/in/l%C3%A9na-chervier-645470228/",

        ),
);

$env_page = array(
    "Accueil",
    "Prestation",
    "Projet",
    "Colaboration",
    "Histoire",
    "Compte",
);

$env_page_logo = array(
    "fas fa-home",
    "fas fa-tags",
    "fas fa-dice-d6",
    "far fa-handshake",
    "fas fa-book",
    "far fa-user",
);

$env_projet = array(
    "TyroServ",
    "Gamenium",
    "TyroDiscord",
    "TyroStudio",
    "Wonderlium",
    "Sélémusium",
    "TyroShop",
    "Autre",
);

$env_presta = array(
    "Site Web",
    "Minecraft",
    "Bot Discord",
    "Serveur",
    "Autre",
);

$env_presta_web = array(
    "Site Personnel",
    "Site de Projet",
    "Application Web",
    "Autre",
);

$env_presta_mc = array(
    "Mod",
    "Plugin",
    "Serveur",
    "Autre",
);


?>
<?php

//PROD or DEV or TEST
$APP_ENV = "DEV";

// FALSE or TRUE
$env_isAccount = false;


$env_url = "https://tyrolium.fr";

$env_urlImage = $env_url . "/Contenu/Image/";

$env_logoUrl = $env_urlImage . "Tyrolium Site.png";

$env_assets = "assets/";

$env_pp = $env_assets . "pp/";

$env_pp_default = $env_pp . "Default.jpg";

if ($APP_ENV == "PROD"){
    $env_bd_contact = "api/get.php";
} else if ($APP_ENV == "DEV"){
    $env_bd_contact = "api/get.php";
} else if ($APP_ENV == "TEST"){
    $env_bd_contact = "https://tyrolium.fr/api/get.php";
}


$env_back = array (

    $env_urlImage . "Background6",
    $env_urlImage . "Background2",
    $env_urlImage . "Background16",
    $env_urlImage . "Background15",
    $env_urlImage . "Background7",
    $env_urlImage . "Background17",
    $env_urlImage . "Background14",
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
        "instagram" => "https://www.instagram.com/pl_dev54/",
        "twitch" => "https://www.twitch.tv/piplextv",

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
        "instagram" => "https://www.instagram.com/theotimevr_/",

        ),

    array("name" => "Arthur Verschelde",
        "role" => "Builder, Graphiste",
        "icon" => "Arthur_Verschelde.jpg",

        ),

    array("name" => "Flavien Dechoz",
        "role" => "Modérateur",
        "icon" => "Flavien_Dechoz.jpg",
        "twitter" => "https://twitter.com/flavien_dechoz",
        "instagram" => "https://www.instagram.com/flaviendechoz/",
        "youtube" => "https://www.youtube.com/channel/UCx-qCuv3FRGKbls2UckYkcQ",
        "facebook" => "https://www.facebook.com/flavien.dechoz69",
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


$env_story = array(


    array(
        "date" => '9 juillet 2017',
        "title" => 'Création du projet',
        "content" => 'Imaginez comme un serveur minecraft dit "PVP/Faction Moddé"',
    ),

    array(
        "date" => '12 juillet 2017',
        "title" => 'Invention du nom "Tyrolium"',
        "content" => 'Le nom "Tyrolium" est à l\'origine une contraction d\'un mineraix et d\'un metal : la "Tyrolite" et le "Paladium", Le "Tyrolium" avant tout un mineraix créer pour notre Serveur minecraft',

    ),

    array(
        "date" => '29 Juillet 2019',
        "title" => 'Création de Tyrolium Ent.',
        "content" => 'Transformations du projet en une entreprise multisectorielle, l\'entreprise s\'appel a ce moment là "Tyrolium Entertainment"',
    ),

    array(
        "date" => '1 août 2019',
        "title" => 'Premier Logo de l\'entreprise',
        "content" => 'Création du logo de l\'entreprise, il duera presque 3 ans, avant de changer',
        "picture" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Old.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),
    array(
        "date" => '17 Octobre 2019',
        "title" => 'Début du developpement du TyroMod',
        "content" => 'Début du developpement du TyroMod, il s\'agit de l\'extention Utiliser pour modifier le jeux minecraft dans le projet "TyroServ"',
        "btn" => array(
            "url" => 'https://www.curseforge.com/minecraft/mc-mods/tyromod/',
            "text" => 'Page du TyroMod'
        ),
    ),
    array(
        "date" => '15 Novembre 2019',
        "title" => 'Création de Wonderlium',
        "content" => 'À l\'origine il s\'agit d\'un projet qui s\'appel "Les Omegastar" et racheter par Tyrolium, il se transformera en wonderlium, avec la nouvelle charte graphique<br>Il s\'agit d\'un projet réalisant des vidéos sur l\'univers geek.',
        "picture" => $env_assets . 'story/Wonderlium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Wonderlium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),
    array(
        "date" => '29 Novembre 2019',
        "title" => 'Première vidéo de Wonderlium',
        "content" => 'Il s\'agit de la première vidéo du projet Wonderlium, sur le sujet de la Console appeler SNES.',
    ),
    array(
        "date" => '5 Décembre 2019',
        "title" => 'Création de TyroMusic',
        "content" => 'Création du projet TyroMusic avec ça charte graphique, il s\'agit d\'un projet muscial',
        "picture" => $env_assets . 'story/TyroMusic.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Music%20Old.png',
            "text" => 'Voir l\'image'
        ),
    ),
    array(
        "date" => '22 MARS 2020',
        "title" => 'Lancement du site de Tyrolium Ent.',
        "content" => 'Lancement de la première version du site internet de l\'entreprise, il fera que se mettre a jour jusqu\'a début 2022 avec la nouvelle version refaite de 0',
    ),
    array(
        "date" => '23 Mars 2020',
        "title" => 'Création de Freenium',
        "content" => 'Création du projet Freenium avec ça charte graphique, il s\'agit d\'un projet de freelance, qui aura pas jamais vraiment abouti',
        "picture" => 'https://tyrolium.fr/Contenu/Image/Freenium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Freenium.png',
            "text" => 'Voir l\'image'
        ),
    ),
    array(
        "date" => '25 Mars 2020',
        "title" => 'Changement de logo pour TyroMusic',
        "content" => 'Changement du logo du Projet TyroMusic, il rechangera encore quelque fois plutard',
        "picture" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Music.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Music.png',
            "text" => 'Voir l\'image'
        ),
    ),
    array(
        "date" => '',
        "title" => '',
        "content" => '',
        "picture" => '',
        "btn" => array(
            "url" => '',
            "text" => ''
        ),
    ),



































    array(
        "date" => 'Lorem',
        "title" => 'Lorem',
        "content" => 'Lorem',
        "picture" => 'Lorem',
        "btn" => array(
            "url" => 'Lorem',
            "text" => 'Lorem'
        ),
    ),

);


?>
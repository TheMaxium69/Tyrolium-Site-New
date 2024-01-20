<?php

//PROD or DEV or TEST
$APP_ENV = "DEV";

// FALSE or TRUE
$env_isAccount = true;
$env_isEvent_5Year = false;
$env_isEvent_Noel2022 = false;
$env_isEvent_year2023 = false;
$env_isAnimProject = true;
$env_isUseritium = true;
$env_isMultilang = false;
$env_isEvent_TyroServ = false;

$env_url = "https://tyrolium.fr";

$env_urlImage = $env_url . "/Contenu/Image/";

$env_logoUrl = $env_urlImage . "Tyrolium Site.png";

$env_assets = "assets/";

$env_pp = $env_assets . "pp/";

$env_pp_default = $env_pp . "Default.jpg";


if ($APP_ENV == "PROD"){
    include "/home/tyroliumfg/reCAPTCHA.php";
    
    $env_bd_contact = "api/get.php";
    
    $env_captcha_clientid = $TyroliumSite_ClientID;
    $env_captcha_servid = $TyroliumSite_ServID;

    $env_useritium_site = "https://useritium.fr";
    $env_connectUrl = "https://tyrolium.fr/";

} else if ($APP_ENV == "DEV"){
    include "C:/users/mxmto/Developpement/LocalHost/reCAPTCHA.php";
//    include "E:/LocalHost/reCAPTCHA.php";

    $env_bd_contact = "api/get.php";
    
    $env_captcha_clientid = $Localhost_ClientID;
    $env_captcha_servid = $Localhost_ServID;

    $env_useritium_site = "http://localhost/TyroMail";
    $env_connectUrl = "http://localhost/Tyrolium-Site-New/";

} else if ($APP_ENV == "TEST"){
    include "E:/LocalHost/reCAPTCHA.php";
    
    $env_bd_contact = "https://tyrolium.fr/api/get.php";   
    
    $env_captcha_clientid = $Localhost_ClientID;
    $env_captcha_servid = $Localhost_ServID;

    $env_useritium_site = "http://localhost/TyroMail";
    $env_connectUrl = "http://localhost/Tyrolium-Site-New/";
}

$env_useritium_urlconnect = $env_useritium_site . "/connect.php";


$env_back = array (

    $env_urlImage . "Background6",
    $env_urlImage . "Background2",
    $env_urlImage . "Background16",
    $env_urlImage . "Background15",
    $env_urlImage . "Background7",
    $env_urlImage . "background13",
    $env_urlImage . "Background14",
    $env_urlImage . "Background18.jpeg",
    $env_urlImage . "Background21.jpg",
    $env_urlImage . "Background20.jpg",
    $env_urlImage . "Background4",
    $env_urlImage . "Background22",
    $env_urlImage . "Background11.png",
    $env_urlImage . "Background24.png"
);

$env_perso = array(


    /* array("name" => "Maxime Tournier",
        "role" => "PDG & Fondateur,<br> Développeur",
        "icon" => "Maxime_Tournier.jpg",
        "instagram" => "https://instagram.com/the_maxime_san",
        "github" => "https://github.com/TheMaxium69",
        "linkedin" => "https://linkedin.com/in/maxime-tournier-tyrolium",
        "tiktok" => "https://www.tiktok.com/@themaximesan",
    ) */
    

    

    
    array("name" => "Pierre-Louis Devaud",
        "role" => "Responsable Projet,<br> Conseiller Technique",
        "icon" => "Pierre-Louis_Devaud.jpg",
        "instagram" => "https://www.instagram.com/pl_dev54/",
        "twitch" => "https://www.twitch.tv/piplextv",
        "linkedin" => "https://www.linkedin.com/in/pierre-louis-devaud-574035236/"
    ),

    /*array("name" => "Maewan Marthelot",
        "role" => "Responsable Communication,<br> Graphiste",
        "icon" => "Maewan_Marthelot.jpg",
        "instagram" => "https://www.instagram.com/maewanm/",
        "youtube" => "https://www.youtube.com/c/MA3WAN",
        "linkedin" => "https://www.linkedin.com/in/ma%C3%ABwan-marthelot-01744b203",
        "behance" => "https://www.behance.net/mawanmarthelot"

    ),*/

    array("name" => "Daniel Taniou",
        "role" => "Graphiste, Modérateur,<br> Linguiste",
        "icon" => "Daniel_Taniou.jpg",
        "youtube" => "https://youtube.com/c/Eroniage",
        "instagram" => "https://www.instagram.com/eroniage_off/",
        "twitter" => "https://twitter.com/Eroniage_ytb",
        "tiktok" => "https://www.tiktok.com/@eroniage_",
    ),

    array("name" => "Mathis Dubief",
        "role" => "Journaliste Jeux Vidéo,<br> Modérateur",
        "icon" => "Mathis_Dubief.jpg",
        "instagram" => "https://www.instagram.com/m2k_hide.chr/",
        "twitter" => "https://twitter.com/Mathis45920873",
    ),

    array("name" => "Kevin Muziak",
        "role" => "Développeur Web",
        "icon" => "Kevin_Muziak.jpg",
        "linkedin" => "https://www.linkedin.com/in/kevin-muziak/",
        "github" => "https://github.com/Threonaum",
    ),

    array("name" => "Clément Charrassier",
        "role" => "Développeur Web",
        "icon" => "Clément_Charrassier.jpg",
        "linkedin" => "https://www.linkedin.com/in/cl%C3%A9ment-charrassier-51606027b/",
        "github" => "https://github.com/ClemCH2R2SR",
    ),

    array("name" => "Marilyne Naili",
        "role" => "Développeur Web",
        "icon" => "Marilyne_Naili.jpg",
        "linkedin" => "https://www.linkedin.com/in/marilyne-naili-95005b159/",
        "github" => "https://github.com/marilyne69230",
    ),

    array("name" => "Elias Poder",
        "role" => "Développeur Web",
        "icon" => "Elias_Poder.jpg",
        "linkedin" => "https://www.linkedin.com/in/elias-poder",
        "github" => "https://github.com/elPodemos",
    ),

    /*array("name" => "Yanis Derouiche",
        "role" => "Développeur Web",
        "icon" => "Yanis_Derouiche.jpg",
        "linkedin" => "https://www.linkedin.com/in/yanis-derouiche/",
    ),*/



    array("name" => "Delphine Rodriguez",
        "role" => "Développeuse Web",
        "icon" => "Delphine_Rodriguez.jpg",
        "linkedin" => "https://www.linkedin.com/in/delphine-rodriguez/",
        "github" => "https://github.com/delphine38",
    ),

    array("name" => "Luigi Guyot",
        "role" => "UX/UI Designer,<br> Modérateur",
        "icon" => "Luigi_Guyot.jpg",
        "linkedin" => "https://www.linkedin.com/in/luigi-guyot-56aa9722b/",

    ),

    array("name" => "Ren LIM",
        "role" => "Graphiste,<br> Monteur-Vidéo",
        "icon" => "Ren_Lim.jpg",
        "tiktok" => "https://www.tiktok.com/@ren.justme?lang=fr",
    ),

    /*array(
        "vide" => true,
    ),*/

    array("name" => "Lola Dutouquet",
        "role" => "Rédactrice,<br> Linguiste",
        "icon" => "Lola_Dutouquet.jpg",
        "instagram" => "https://www.instagram.com/l_o._.la/",
    ),

    array("name" => "Flavien Dechoz",
        "role" => "Support Technique,<br> Modérateur ",
        "icon" => "Flavien_Dechoz.jpg",
        "twitter" => "https://twitter.com/flavien_dechoz",
        "instagram" => "https://www.instagram.com/flaviendechoz/",
        "youtube" => "https://www.youtube.com/channel/UCx-qCuv3FRGKbls2UckYkcQ",
        "facebook" => "https://www.facebook.com/flavien.dechoz69",
    ),


    


    /*array("name" => "Maxime Grandidier",
        "role" => "Développeuse Web",
        "icon" => "Maxime_Grandidier.jpg",
        "linkedin" => "https://www.linkedin.com/in/maxime-grandidier-b18a27243/",
        "instagram" => "https://www.instagram.com/okuni_de/",
    ),
    
    
    array(
        "vide" => true,
    ),*/
    
       




    
    

    /* array("name" => "Wassim Bouridah",
        "role" => "Responsable Communication,<br> Ingénieur R&D",
        "icon" => "Wassim_Bouridah.jpg",
        "instagram" => "https://www.instagram.com/wassinobi/",
        "youtube" => "https://www.youtube.com/channel/UCBuxMq0h-WQJi5_e6My9GYg",
        "linkedin" => "https://www.linkedin.com/in/wassim-bouridah/",
    ), */
    

    // array("name" => "Norman Jorge De Freitas",
    //     "role" => " Compositeur(ice),<br> Écrivain(e)",
    //     "icon" => "Norman_Jorge_De_Freitas.jpg",
    //     "instagram" => "https://www.instagram.com/rayquacondasensei_off/",
    //     "linkedin" => "https://www.linkedin.com/in/norman-jorge-de-freitas-0a736a203/",

    //     ),

    // array("name" => "Edward Thouvenin",
    //     "role" => "Compositeur,<br> Beatmaker",
    //     "icon" => "Edward_Thouvenin.jpg",
    //     "instagram" => "https://www.instagram.com/edward_el_renard/",
    //     "soundcloud" => "https://soundcloud.com/wared-22283149",
    //     "linkedin" => "https://www.linkedin.com/in/edward-thouvenin-040ba823b/"
    //     ),

    // array("name" => "Dylan Argentino",
    //     "role" => "Dessinateur,<br> Designer",
    //     "icon" => "Dylan_Argentino.jpg",
    //     "instagram" => "https://www.instagram.com/viking_senpai/",
    // ),

    // array(
    //     "vide" => true,
    // ),

    /*array("name" => "L&eacute;na Chervier",
        "role" => "Assistante Administrative,<br> Community Manager",
        "icon" => "Léna_Chervier.jpg",
        "instagram" => "https://www.instagram.com/lena_cherv/",
        "linkedin" => "https://www.linkedin.com/in/l%C3%A9na-chervier-645470228/",

    ),*/

    /*array("name" => "Angélique Herard",
        "role" => "Modératrice",
        "icon" => "Angélique_Herard.jpg",
        "instagram" => "https://www.instagram.com/angelique.hrd/",
    ),*/



   

);

$env_page = array(
    "Accueil",
    "Projet",
    "Prestation",
    "Collaboration",
    "Histoire",
    "Compte"
);

$env_page_logo = array(
    "fas fa-home",
    "fas fa-dice-d6",
    "fas fa-tags",
    "fas fa-handshake",
    "fas fa-book",
    "fas fa-user",
);

$env_projet = array(
    "TyroServ",
    "SolidServ",
    "Gamenium",
    "TyroDiscord",
    "TyroStudio",
    "Wonderlium",
    "Sélémusium",
    "TyroShop",
    "DuoGramme",
    "TyroStudent",
    "Chantium",
    "Autre",
);

$env_presta = array(
    "Site Web",
    "Minecraft",
    "Bot Discord",
    "Serveur",
    "Graphisme",
    "Musicales",
    "Vidéos/Animations",
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

$env_website = array(

    array(
            "name"=>"Tyrolium",
            "desc"=>"Site officiel de mon entreprise Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Tyrolium-Site-New",
            "url"=>"https://tyrolium.fr",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1173735211788423208/image.png?ex=65650919&is=65529419&hm=2b83ae0dc98854d4807b67d4ba888f6350a178b4cfa9b0baee727187cf3b4108&=&width=729&height=580"
        ),

    array(
            "name"=>"Bâtir Positif",
            "desc"=>"Site de l'entreprise Bâtir positif fait en 2020",
            "github"=>"https://github.com/TheMaxium69/BatirPositif-WebSite",
            "url"=>"https://batirpositif.fr",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1173734619040976966/image.png?ex=6565088c&is=6552938c&hm=454f01c0fc3d8e3daee1e5ac11887bc4040695f8c28fd60fd788cbc4dde00027&=&width=730&height=579"
        ),

    array(
            "name"=>"SolidServ",
            "desc"=>"Site de mon hébergeur de Serveur SolidServ, filaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/SolidServ-WebSite",
            "url"=>"https://solidserv.fr",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1173735598985593002/image.png?ex=65650975&is=65529475&hm=91a8ce0e8bc7daab13cb26b97effcae8f54ddc65c9f2ab10c42a1f2274ddcf0c&=&width=726&height=580"

        ),
    array(
            "name"=>"Palais de la sneaks",
            "desc"=>"Site Ecommerce de l'entreprise Palais de la sneaks",
            "github"=>"https://github.com/TheMaxium69/PalaisDeLaSneaks-WebSite",
            "url"=>"https://palaisdelasneaks.fr",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1173736532658630747/image.png?ex=65650a54&is=65529554&hm=89ddc2078d835cedfe028483ec2b734488164f59bbf07cb63ff3233e25850a22&=&width=784&height=580"
        ),
    array(
            "name"=>"TyroServ",
            "desc"=>"Site Internet de mon Serveur Minecraft, failaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/TyroServ-WebSite",
            "url"=>"https://tyroserv.fr",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1173737091998421075/image.png?ex=65650ad9&is=655295d9&hm=3cadf3355c9810bca8676cfff521c47914644961c232d67a4b9393d74c4d563c&=&width=786&height=580"
        ),
    array(
            "name"=>"Tyrolium Uptime",
            "desc"=>"Site de verification de l'infrastructure réseau de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Tyrolium-Uptime",
            "url"=>"https://tyrolium.fr/uptime/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1173740182265139290/image.png?ex=65650dba&is=655298ba&hm=d7c1db223bacc0b820c68ac027068fa803355344462037c8a0d21b62ed83245a&=&width=783&height=579"
        ),
    array(
            "name"=>"Tyrolium SpeedTest",
            "desc"=>"SpeedTest pour tester sa connexion avec les serveurs interne de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Tyrolium-SpeedTest",
            "url"=>"https://speedtest.tyrolium.fr/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1198345260917608519/image.png?ex=65be90fe&is=65ac1bfe&hm=e1a108e2274176e5dfca030d8ef29f7ee25c9c75938d9f0b6207343bc0e93b6c&=&format=webp&quality=lossless&width=865&height=458"
        ),
    array(
            "name"=>"C.L.S Habitat",
            "desc"=>"Site de l'entreprise C.L.S Habitat",
            "github"=>"https://github.com/TheMaxium69/CLS.Habitat-WebSite",
            "url"=>"https://cls-habitat.fr/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195882969445978182/image.png?ex=65b59bce&is=65a326ce&hm=36acca05c7899855a6db4cc5d44e82879ffee10b09576922e45bf290b2d76f30&=&format=webp&quality=lossless&width=1080&height=552"
        ),
    /*array(
            "name"=>"Groupe Cloudy",
            "desc"=>"Site du Groupe Cloudy",
            "github"=>"",
            "url"=>"",
            "picture"=>""
        ),*/

    array(
            "name"=>"Wonderlium",
            "desc"=>"Site Internet de notre collectif de Vidéaste, failaire de Tyrolium (fait en 2019)",
            "github"=>"https://github.com/TheMaxium69/Site-Wonderlium",
            "url"=>"http://site.wonderlium.yt",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195881330274226217/image.png?ex=65b59a47&is=65a32547&hm=f43ff17620c71db10faceea1a185c2cf4d4092a6d2f87e8530ef3e45531c8729&=&format=webp&quality=lossless&width=1080&height=573"
        ),

    array(
            "name"=>"Useritium",
            "desc"=>"Site Internet de nos Compte Useritium, failaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Useritium-WebSite",
            "url"=>"https://useritium.fr/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195881444975857714/image.png?ex=65b59a62&is=65a32562&hm=7772146b854ff1023efccefaadf4ca01fef52bdff8feb2123fa61975ca222d48&=&format=webp&quality=lossless&width=1027&height=585"
        ),

    array(
            "name"=>"TyroDiscord",
            "desc"=>"Site Internet de nos Projet Discord, failaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/TyroDiscord-WebSite",
            "url"=>"https://themaxium69.github.io/TyroDiscord-WebSite/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195881711733575740/image.png?ex=65b59aa2&is=65a325a2&hm=9013804fd10768d81edf3a5fa78bbd694f70f01c0ed66fcd9027debb46fb4afc&=&format=webp&quality=lossless&width=984&height=585"
        ),

    array(
            "name"=>"Kaleidoscope",
            "desc"=>"Site du projet de notre Partenaire MA3WAN",
            "github"=>"https://github.com/TheMaxium69/Kaleidoscope-WebSite",
            "url"=>"https://kaleidoscope.tyrolium.fr/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195882154526261408/image.png?ex=65b59b0c&is=65a3260c&hm=1b53db9091986c7cdbd9a91104476401370faecccc9503cbc6f375fabd8fffc5&=&format=webp&quality=lossless&width=986&height=585"
        ),

    /*array(
            "name"=>"Agape",
            "desc"=>"Site de l'entreprise Agape",
            "github"=>"",
            "url"=>"",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195883322849632286/image.png?ex=65b59c22&is=65a32722&hm=bc9db0d68b4e7d5b73ea88977e3faadc97d73e76ed74dc446552d1173563cc38&=&format=webp&quality=lossless&width=1080&height=574"
        ),*/

    array(
            "name"=>"Influnias",
            "desc"=>"Site Internet de notre Agence d'influenceur, failaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Influnias-WebSite-V2",
            "url"=>"https://www.influnias.fr/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195882562325860382/image.png?ex=65b59b6d&is=65a3266d&hm=7476031002c8af89f0a644f88d1ba8ac13cf6797cfad315578eea1b131f53535&=&format=webp&quality=lossless&width=957&height=585"
        ),
    array(
            "name"=>"Vturias",
            "desc"=>"Site Internet de notre Agence de Vtubeur, failaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Vturias-WebSite",
            "url"=>"https://vturias.fr/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1198346268301344869/image.png?ex=65be91ee&is=65ac1cee&hm=564a68fc78cfd175df6c09f1606873aba06cf45a25c65ad2ede8d4fb35439f6d&=&format=webp&quality=lossless&width=868&height=458"
        ),

    array(
            "name"=>"Sélémusium",
            "desc"=>"Site Internet de notre label Musical, failaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Selemusium-WebSite",
            "url"=>"http://selemusium.tyrolium.fr/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195882481803599912/image.png?ex=65b59b5a&is=65a3265a&hm=06f356fedffa00b9fb0300cc25bf83f7987b121d679a589fcabd60d25c489ce3&=&format=webp&quality=lossless&width=1000&height=585"
        ),


    array(
            "name"=>"Artomyx",
            "desc"=>"Site Internet de l'album du label Musical, failaire de Tyrolium",
            "github"=>"https://github.com/TheMaxium69/Artomyx-Site",
            "url"=>"https://themaxium69.github.io/Artomyx-Site/",
            "picture"=>"https://media.discordapp.net/attachments/446049284694081546/1195882407509893222/image.png?ex=65b59b48&is=65a32648&hm=b8816e257bdce8764b2432165ddff8a50973eb253f64ad078de1f7a1a9b9d402&=&format=webp&quality=lossless&width=1026&height=585"
        ),



);


$env_story = array(


    array(
        "date" => '9 juillet 2017',
        "title" => 'Création du projet',
        "content" => 'Imaginer comme un serveur Minecraft dit "PVP/Faction Moddé"',
    ),

    array(
        "date" => '12 juillet 2017',
        "title" => 'Invention du nom "Tyrolium"',
        "content" => 'Le nom "Tyrolium" est à l\'origine une contraction d\'un minerais et d\'un métal: la "Tyrolite" et le "Paladium", le "Tyrolium" est avant tout un minerais créé pour notre serveur Minecraft',
    ),

    array(
        "date" => '5 Mars 2018',
        "title" => 'Début de la Béta de TyroServ',
        "content" => 'Début de la version Bêta du TyroServ, terminant ainsi le développement de la version Alpha du projet, avec un nouveau logo pour cette occasion',
        "picture" => $env_assets . 'story/TyroServBeta.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20Old2.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '26 Septembre 2018',
        "title" => 'Lancement d\'une béta public de TyroServ',
        "content" => 'Lancement d\'une version Bêta publique sous candidature, avec un nouveau logo pour cette version ',
        "picture" => $env_assets . 'story/TyroServBeta2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20Old3.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '29 Juillet 2019',
        "title" => 'Création de Tyrolium Ent.',
        "content" => 'Transformation du projet en une entreprise multisectorielle, l\'entreprise s\'appelle à ce moment là "Tyrolium Entertainment"',
    ),

    array(
        "date" => '1 août 2019',
        "title" => 'Premier logo de l\'entreprise',
        "content" => 'Création du logo de l\'entreprise, il aura duré presque 3 ans, avant de changer',
        "picture" => $env_assets . 'story/Tyrolium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '17 Octobre 2019',
        "title" => 'Début du développement du TyroMod',
        "content" => 'Début du developpement du TyroMod, il s\'agit de l\'extention utilisée pour modifier le jeu Minecraft dans le projet "TyroServ"',
        "btn" => array(
            "url" => 'https://www.curseforge.com/minecraft/mc-mods/tyromod/',
            "text" => 'Page du TyroMod'
        ),
    ),

    array(
        "date" => '15 Novembre 2019',
        "title" => 'Création de Wonderlium',
        "content" => 'À l\'origine il s\'agit d\'un projet qui s\'appelait "Les Omegastar" et racheté par Tyrolium, il se transformera en Wonderlium, avec la nouvelle charte graphique<br>Il s\'agit d\'un projet réalisant des vidéos sur l\'univers geek',
        "picture" => $env_assets . 'story/Wonderlium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Wonderlium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '25 Novembre 2019',
        "title" => 'Première vidéo de Wonderlium',
        "content" => 'Il s\'agit de la première vidéo du projet Wonderlium, sur la console appelée SNES',
    ),

    array(
        "date" => '5 Décembre 2019',
        "title" => 'Création de TyroMusic',
        "content" => 'Création du projet TyroMusic avec sa charte graphique, il s\'agit d\'un projet musical',
        "picture" => $env_assets . 'story/TyroMusic.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Music%20Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '22 MARS 2020',
        "title" => 'Lancement du site de Tyrolium Ent.',
        "content" => 'Lancement de la première version du site internet de l\'entreprise, il ne se mettra pas à jour avant début 2022 avec la nouvelle version refaite à zéro',
    ),

    array(
        "date" => '23 Mars 2020',
        "title" => 'Création de Freenium',
        "content" => 'Création du projet Freenium avec sa charte graphique, il s\'agit d\'un projet de freelance, qui aura jamais vraiment abouti',
        "picture" => $env_assets . 'story/Freenium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Freenium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '25 Mars 2020',
        "title" => 'Changement de logo pour TyroMusic',
        "content" => 'Changement du logo du Projet TyroMusic, il rechangera encore quelques fois plus tard',
        "picture" => $env_assets . 'story/TyroMusic2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20Music.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '30 MARS 2020',
        "title" => 'Trailer de TyroServ',
        "content" => 'Trailer pour du lancement de TyroServ (Le serveur Minecraft PVP/Faction Moddé). Dans cette vidéo on annonce pour la première fois la date de sortie du serveur',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=rNq089toP6g&t',
            "text" => 'Voir la vidéo'
        ),
    ),

    array(
        "date" => '26 avril 2020',
        "title" => 'Lancement de TyroServ',
        "content" => 'Lancement du serveur Minecraft, avec le site, le launcher, le TyroMod et les maps (architecture créée dans le jeux Minecraft)',
        "picture" => $env_assets . 'story/TyroServS1.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium ServerMC.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '29 avril 2020',
        "title" => 'TyroServ atteind les 4000 joueurs',
        "content" => 'Seulement 4 jours après la sortie officielle du serveur, nous atteignons les 4000 joueurs uniques, et en moyenne 160 joueurs connectés en permanance',
    ),

    array(
        "date" => '5 mai 2020',
        "title" => 'Création de Gamenium',
        "content" => 'Création du projet Gamenium, il s\'agit d\'un site d\'actualité et de critique de jeux-vidéo',
        "picture" => $env_assets . 'story/Gamenium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Gamenium Old.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '18 mai 2020',
        "title" => 'Création de TyroStudio',
        "content" => 'Création du projet TyroStudio, il s\'agit du studio de développement de jeux-vidéo',
    ),

    array(
        "date" => '24 mai 2020',
        "title" => 'Lancement du site de Wonderlium',
        "content" => 'Lancement du site du Wonderlium, projet qui réalise des vidéos
                        sur l\'univers geek',
    ),

    array(
        "date" => '27 Août 2020',
        "title" => 'Lancement de la boutique',
        "content" => 'Lancement de la boutique de Tyrolium, et création du projet "TyroShop"',
        "btn" => array(
            "url" => 'http://shop.tyrolium.fr',
            "text" => 'Lien de la boutique'
        ),
    ),

    array(
        "date" => '28 Août 2020',
        "title" => 'Création du logo de TyroStudio',
        "content" => 'Premier logo du projet de TyroStudio, il représente un phoenix, il reste encore aujourd\'hui assez mystérieux',
        "picture" => $env_assets . "story/TyroStudio.png",
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium Studio.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '31 Août 2020',
        "title" => 'Deuxième vidéo de Wonderlium',
        "content" => 'Il s\'agit de la deuxième vidéo du projet Wonderlium, sur la console appelée GameCube',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=_9n2ZgTG5Qc',
            "text" => 'Voir la vidéo'
        ),
    ),

    array(
        "date" => '4 septembre 2020',
        "title" => 'TyroServ atteind les 10000 joueurs',
        "content" => 'Après 5 mois, TyroServ atteind le chiffre de 10 000 joueurs uniques connectés sur le serveur',
    ),

    array(
        "date" => '21 Janvier 2021',
        "title" => 'Fermeture de Freenium',
        "content" => 'Fermeture du projet Freenium, projet qui n\'a jamais vraiment démarré et qui après décision sera fermé, dans l\'idée il s\'agissait un peu de l\'ancêtre des prestations',
    ),

    array(
        "date" => '23 Janvier 2021',
        "title" => 'Création du logo de TyroShop',
        "content" => 'Création du logo de la boutique pour le projet TyroShop, il est désormais considéré comme un projet à part entière dans Tyrolium',
        "picture" => $env_assets . 'story/TyroShop.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/20210614_104054.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '21 février 2021',
        "title" => 'Fermeture de la saison 1 de TyroServ',
        "content" => 'Fermeture du serveur Minecraft TyroServ, à ce moment là, il a été pensé comme la fin définitive du projet',
    ),

    array(
        "date" => '14 Mai 2021',
        "title" => 'TyroServ saison 1 rendu open-souce',
        "content" => 'Suite à la fermeture du serveur, TyroServ saison 1 à été rendu open-source (code rendu libre au public)',
    ),

    array(
        "date" => '25 mai 2021',
        "title" => 'Annonce de la saison 2 de TyroServ',
        "content" => 'Au final, après quelques mois à avoir abandonné le projet, nous avons annoncé la reprise du projet avec une date de sortie pour la saison 2 ',

    ),

    array(
        "date" => '28 Mai 2021',
        "title" => 'Lancement de la saison 2 de TyroServ',
        "content" => 'Lancement de la saison 2 de TyroServ, avec un tout nouveau launcher, un nouveau site Web, de nouveaux plugins et une stabilité serveur accrue',
        "picture" => $env_assets . 'story/TyroServS2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC%20S2.png.jpg',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '2 Juin 2021',
        "title" => 'Lancement de Gamenium',
        "content" => 'Lancement du projet Gamenium, avec des actualités sur l\'univers du jeu-vidéo et geek. Ces actualités sont postées sur les réseaux sociaux tel que Instagram et discord, avec un nouveau logo pour l\'occasion',
        "picture" => $env_assets . 'story/Gamenium2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Gamenium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '21 Juillet 2021',
        "title" => 'Création de TyroDiscord',
        "content" => 'Création du projet TyroDiscord, un projet de bot et logiciel pour améliorer l\'expérience de Discord',
    ),

    array(
        "date" => '25 Juillet 2021',
        "title" => 'Lancement du TyroBot et du TyroServBot',
        "content" => 'Lancement des deux premiers projets de TyroDiscord, deux bots Discord qui sont en publique. Un sert à l\'amélioration d\'un serveur et l\'autre à connecter notre serveur Minecraft avec notre Discord',
    ),

    array(
        "date" => '20 Août 2021',
        "title" => 'Trailer du changement de logo de l\'entreprise',
        "content" => 'Trailer mis sur tout les réseaux de Tyrolium pour montrer pour la première fois le nouveau logo de l\'entreprise',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=nnWHEh17ovg',
            "text" => 'Voir le trailer'
        ),
    ),

    array(
        "date" => '21 Août 2021',
        "title" => 'Changement du logo de l\'entreprise',
        "content" => 'Après trois ans avec le même logo, Tyrolium le change pour quelque chose de beaucoup plus moderne. Par la même occasion le nom de l\'entreprise passera de Tyrolium Entertainment à Tyrolium',
        "picture" => $env_assets . 'story/TyroliumFinal.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Tyrolium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '23 Août 2021',
        "title" => 'Gros changement pour TyroMusic',
        "content" => 'TyroMusic change entièrement de nom pour devenir Sélémusium. Par la même occasion il change aussi de charte graphique',
        "picture" => $env_assets . 'story/Sélémusium.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Selenium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '24 Août 2021',
        "title" => 'Lancement des prestations',
        "content" => 'Lancement des prestations, notamment la création de sites Web et de tout ce qui touche à Minecraft',
        "btn" => array(
            "url" => 'service.php',
            "text" => 'Voir les prestations'
        ),
    ),

    array(
        "date" => '10 Août 2021',
        "title" => 'Changement de logo pour 3 projet',
        "content" => 'L\'entreprise se fait une petite beauté en changeant les logos de Wonderlium, de Sélémusium et de TyroShop',
        "picture" => $env_assets . 'story/3Logo.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/changementlogo.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '14 Novembre 2021',
        "title" => 'Lancement du site "Status Server"',
        "content" => 'Lancement du site "Status Server" qui permet de voir la stabilité de tout les services et serveurs de Tyrolium',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Status',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '22 Novembre 2021',
        "title" => 'Lancement du site de Sélémusium',
        "content" => 'Lancement du site du projet de création de musique Sélémusium',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Selemusium',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '4 Janvier 2022',
        "title" => 'Lancement de la deuxième version du site de l\'entreprise ',
        "content" => 'Lancement du site où vous êtes actuellement',
    ),

    array(
        "date" => '8 Janvier 2022',
        "title" => 'Création du projet Duo-Gramme ',
        "content" => 'Projet de plusieurs concepts divertissements et informatifs sur les réseaux sociaux. En colaboration avec l\'entreprise "MA3WAN" .',
        "picture" => $env_assets . 'story/DuoGramme.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/DuoGramme.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '24 Mars 2022',
        "title" => 'Création du projet SolidServ',
        "content" => 'Projet d\'hebergeur de serveur de jeux, de site internet et bien autre',
        "picture" => $env_assets . 'story/SolidServ.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/SolidServ.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '2 Mai 2022',
        "title" => 'Lancement du site de TyroDiscord',
        "content" => 'Lancement du site de presentation du projet d\'améliorer l\'expérience de Discord',
        "btn" => array(
            "url" => 'https://www.tyrodiscord.xyz',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '7 Mai 2022',
        "title" => 'Lancement de SolidServ',
        "content" => 'Lancement du site, des serveurs du projet',
        "btn" => array(
            "url" => 'https://solidserv.fr',
            "text" => 'Allez sur le site'
        ),
    ),

    array(
        "date" => '20 Mai 2022',
        "title" => 'Changement de logo pour Sélémusium',
        "content" => 'Changement du logo du projet Musical de Tyrolium',
        "picture" => $env_assets . 'story/Sélémusium2.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Selemusium.png',
            "text" => 'Voir l\'image'
        ),
    ),

    array(
        "date" => '20 Mai 2022',
        "title" => 'Création du projet TyroStudent',
        "content" => 'Projet de Formation de Tyrolium',
        "picture" => $env_assets . 'story/TyroStudent.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/TyroStudent.png',
            "text" => 'Voir l\'image'
        ),
    ),
    
    
    ///POUR LES 5 ANS
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Vidéo des 5 Ans',
        "content" => 'Tyrolium a réalisé une vidéo d\'animation pour ses 5 ans qui retrace toute son histoire',
        "picture" => $env_assets . 'story/miniature5ans.png',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=fRjkVPeCDDI',
            "text" => 'Voir la vidéo'
        ),
    ),
    
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Annonce de la saison 3 de TyroServ',
        "content" => 'Lors de la vidéo des 5 ans de Tyrolium, TyroServ annonce avec un teaser la saison 3 également accompagnée d\'un nouveau logo',
        "picture" => $env_assets . 'story/TyroServS3.png',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=mJBL1gSKTdk',
            "text" => 'Voir la vidéo'
        ),
    ),

    array(
        "date" => '9 Juillet 2022',
        "title" => 'Annonce du Première Album de Sélémusium',
        "content" => 'Lors de la vidéo des 5 ans de Tyrolium, Sélémusium sort avec un trailer, la sortie d\'Artomyx, son premier album',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=s_6V9HDs4YA',
            "text" => 'Voir la vidéo'
        ),
    ),
    
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Annonce des Comptes Useritium',
        "content" => 'Lors de la vidéo des 5 ans de Tyrolium a été annoncé le lancement des comptes Useritium',
        "btn" => array(
            "url" => 'https://www.youtube.com/watch?v=zJ3rbBJCYdM',
            "text" => 'Voir la vidéo'
        ),
    ),
    
    array(
        "date" => '9 Juillet 2022',
        "title" => 'Lancement du site TyroBirthday',
        "content" => 'Pour les 5 ans, Tyrolium a l\'ancé un site pour l\'occasion',
        "btn" => array(
            "url" => 'https://birthday.tyrolium.fr',
            "text" => 'Allez sur le site'
        ),
    ),


    //Pour le 10 Juillet

    array(
        "date" => '15 Juillet 2022',
        "title" => 'Reboot de Wonderlium',
        "content" => 'Reboot de Wonderlium et reprise des vidéos régulières avec une nouvelle charte graphique',
    ),

    array(
        "date" => '15 Juillet 2022',
        "title" => 'Troisième vidéo de Wonderlium',
        "content" => 'Il s\'agit de la troisième vidéo du projet Wonderlium, sur la naissance du Vidéo-Jouet',
    ),


    //Pour le 11 Juillet
    
    array(
        "date" => '11 Juillet 2022',
        "title" => 'Lancement du Première Album de Sélémusium',
        "content" => 'Sélémusium sort son premier album sur toutes les plateformes, un site a été créé pour l\'occasion',
        "picture" => $env_assets . 'story/Artomyx.png',
        "btn" => array(
            "url" => 'https://artomyx.selemusium.xyz',
            "text" => 'Allez sur le site'
        ),
    ),
    
    //Pour le 13 Juillet
    
    array(
        "date" => '13 Juillet 2022',
        "title" => 'Lancement des Animations',
        "content" => 'Tyrolium a sorti une animation sur tous ses projets. <br> Elle est disponible sur la page projets de ce site',
    ),
    
    array(
        "date" => '27 Septembre 2022',
        "title" => 'Création Influnias',
        "content" => 'Création de l\'agence de portage de Tyrolium appeler Influnias, avec sont logo',
        "picture" => $env_assets . 'story/Influnias.png',
        "btn" => array(
            "url" => 'https://tyrolium.fr/Contenu/Image/Influnias.png',
            "text" => 'Voir l\'image'
        ),
    ),



);


?>

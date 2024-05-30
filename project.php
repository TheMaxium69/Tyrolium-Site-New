<?php include "app/app.php"; $page = 2; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<main>
    <section id="projet">
        <div id="project-atom" class="row container">

            <div class="col-8">
                    <h2>Nos Projets</h2>
                    <br id="991none">
                    <p class="container">Tout nos projets appartiennent à l'entreprise Tyrolium et sont gérés par nos équipes.
                        Les projets sont entièrement gerez par Tyrolium Mais reste indépendant dans leurs communications,
                        Ils sont financés par entreprise, le but de Tyrolium est de vivre de nos passions.</p>
            </div>
            <div class="col-4">
                <img src="assets/atom_project_new.png" style="width: 100%;">
                <br>
            </div>
        </div>

        <hr id="hratom" style="background: rgb(161, 161, 161);">
        <br>
        <?php
            $nbBack = count($env_back);
            echo '<style> @media (min-width: 801px) {';
            for ($i = 0; $i <= $nbBack-1; $i++) {
                echo '
                #projet ul li#a'. $i .'{
                    background: linear-gradient(
                            to right,
                            #151515 30%,
                            rgba(0, 0, 0, 0.2) 50%
                    ),
                    url("'. $env_back[$i] .'");
                    background-size: cover;
                    background-position: center 35%;
                    border-radius: 13px;
                }';
                echo '
                body.light #projet ul li#a'. $i .'{
                    color: black;
                    background: linear-gradient(
                        to right,
                        white 30%,
                        rgba(0, 0, 0, 0.2) 50%
                    ),
                    url("'. $env_back[$i] .'");
                    background-size: cover;
                    background-position: center 35%;
                    border-radius: 13px;
                    box-shadow: 0 2px 6px 0 rgba(136, 148, 171, 0.2), 0 24px 20px -24px rgba(71, 82, 107, 0.1);
                }';
            }
            echo '} @media (max-width: 800px) {';

            for ($i = 0; $i <= $nbBack-1; $i++) {
                echo '
                    #projet ul li#a'. $i .'{
                        background: linear-gradient(
                                to bottom,
                                rgba(0, 0, 0, 0.2) 130px,
                                #151515 30%
                        ),
                        url("'. $env_back[$i] .'");
                        background-size: cover;
                        border-radius: 13px;';
                if ($i == 0){
                    echo 'background-position: center 300%;';
                } else {
                    echo 'background-position: center 0%;';
                }
                echo '}';

                echo '
                    body.light #projet ul li#a'. $i .'{
                        background: linear-gradient(
                                to bottom,
                                rgba(0, 0, 0, 0.2) 130px,
                                white 30%
                        ),
                        url("'. $env_back[$i] .'");
                        background-size: cover;
                        border-radius: 13px;
                        box-shadow: 0 2px 6px 0 rgba(136, 148, 171, 0.2), 0 24px 20px -24px rgba(71, 82, 107, 0.1);';
                if ($i == 0){
                    echo 'background-position: center 300%;';
                } else {
                    echo 'background-position: center 0%;';
                }
                echo '}';
            }

            echo '} </style>'; ?>
        <ul>

            <li id="a0">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroServS3.png" logo="assets/anim/TyroServ%20Anim.png" gif="assets/anim/tyroserv.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroservLogo">
                <h2>TyroServ</h2>
                <p>Serveur moddé sur le jeu Minecraft.</p>
                <small>Saison 2.5 disponible sur notre site.</small><br>
                <a href="https://www.tyroserv.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumserver/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://twitter.com/tyrolium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/@TyroServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/TyroServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.curseforge.com/minecraft/mc-mods/tyromod/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/curse.png" alt="curseforge"/></a>
                <a href="https://www.tiktok.com/@tyroserv?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/tyroserv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>   

            <li id="a8">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/SolidServ.png" logo="assets/anim/SolidServ%20Anim.png" gif="http://tyrolium.fr/Contenu/Image/SolidServ%20Anim2.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="SolidServLogo">
                <h2>SolidServ</h2>
                <p>Projet d'hébergeur de serveur.</p>
                <a href="https://solidserv.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/ycwWzmCQNx" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/solidserv/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://twitter.com/solid_serv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCB3F4NN820r3Se4ZZinQpHA" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/SolidServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.tiktok.com/@solidserv?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/solidserv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a3">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" logo="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" gif="assets/anim/TyroStudio%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="StudioLogo">
                <h2>TyroStudio</h2>
                <p>Studio de développement<br> de jeux-vidéo.</p>
                <a href="https://tyrostudio.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumstudio/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.linkedin.com/company/tyrostudio" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a1">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Gamenium.png" logo="http://tyrolium.fr/Contenu/Image/Gamenium.png" gif="https://cdn.discordapp.com/attachments/982397863462072330/982756304617631805/Gamenium_animation.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="GameniumLogo">
                <h2>Gamenium</h2>
                <p>Site d'actualités et de critiques<br> de jeux-vidéo.</p>
                <a href="https://www.instagram.com/gamenium/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                <a href="https://www.youtube.com/channel/UCOGbXX9AOJR-dhuvqFufDIQ/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.tiktok.com/@gamenium?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.twitch.tv/gamenium_off" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitch.png" alt="twitch"/></a>
                <a href="https://www.linkedin.com/company/gamenium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>
            

            <li id="a13">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Vturias.png" alt="VturiasLogo">
                <h2>Vturias</h2>
                <p>Agence de Vtubing.</p>
                <a href="https://vturias.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://twitter.com/Vturias_Project" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://discord.gg/nUc8kED8st" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/vturias_project/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.youtube.com/@VturiasProject" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://www.tiktok.com/@vturias_project" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/vturias/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>

            </li>

            <li id="a11">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/Influnias.png" logo="assets/anim/Influnias%20Anim.png" gif="assets/anim/Influnias%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="InfluniasLogo">
                <h2>Influnias</h2>
                <p>Agence de portage d'influencer.</p>
                <a href="https://www.influnias.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://www.instagram.com/influnias/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://discord.gg/ycwWzmCQNx" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://twitter.com/influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCm0ASpIy2CJsS9hzVedo_yg" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/Influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.tiktok.com/@influnias?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.twitch.tv/influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitch.png" alt="twitch"/></a>
                <a href="https://www.linkedin.com/company/influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>
            
            <bottom id="btn-old-project">
                
                <label>Voir les anciens projets</label><br>
                <i class="fas fa-chevron-down"></i>
        
            </bottom>

            <style>
            
                #btn-old-project{
                    width: 100%;
                }


            </style>

        </ul>

        <br><br>

        <style id="old-script">

            #old-project{
                display: none;
            }


        </style>

        <script>

        var oldbtn = document.getElementById("btn-old-project");
        let tempProject = 1;

        oldbtn.addEventListener("click", e => {
            
            let articleOld = document.getElementById("old-script")

            if(tempProject == 1){

                articleOld.innerHTML = '#old-project{display: unset;}';
                oldbtn.innerHTML = ' <label>Voir les anciens projets</label><br><i class="fas fa-chevron-up"></i>';
                tempProject = 2;

            } else {

                articleOld.innerHTML = '#old-project{display: none;}';
                oldbtn.innerHTML = ' <label>Voir les anciens projets</label><br><i class="fas fa-chevron-down"></i>';
                tempProject = 1;

            }

        });

        </script>

    <div id="old-project">
        
        <br><br>

            <div id="project-atom" class="row container">

                <div class="col">
                        <h2>Nos Ancien Projets</h2>
                        <br id="991none">
                        <p class="container">Il s'agit des projets que nous avons décidé de fermer au fur et à mesure des années.</p>
                </div>
            </div>

        <ul>    
            <li id="a4">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Wonderlium.png" logo="http://tyrolium.fr/Contenu/Image/Wonderlium.png" gif="assets/anim/Wonderlium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="WonderliumLogo">
                <h2>Wonderlium<br><span class="badge badge-pill badge-danger infoNew-A4">Fermer</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A4" style="display: none;">
                    <p>Collectif réalisant des vidéos<br> sur l'univers geek.</p>
                    <small>Nouvelle vidéo disponible sur notre chaine youtube.</small><br>
                    <a href="https://www.youtube.com/channel/UC8tEUehEz2p53Pw8wSky3TQ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/> Allez sur notre chaine</a><br>
                    <a href="http://site.wonderlium.yt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/></a>
                    <a href="https://www.instagram.com/wonderlium/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.youtube.com/channel/UCF15KKWE_j0fbV6olDN8W8Q" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://github.com/Wonderlium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                    <a href="https://www.tiktok.com/@wonderlium?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                    <a href="https://www.linkedin.com/company/wonderlium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A4">
                    <p>Il s'agissait d'un collectif qui réalisait des vidéos geek. Nous avons réussi à publier 3 vidéos sur notre chaîne YouTube, mais ces vidéos n'ont jamais vraiment fonctionné et, en raison de nombreux changements dans l'équipe, le projet a fini par s'éteindre malgré qu'il s'agissait du premier projet après TyroServ</p>    
                    <!-- <small>Stat : abo:</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A4" onclick="oldProjectBtn('4','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>
                
            
            </li>

            <li id="a5">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/Selemusium.png" logo="assets/anim/Selemusium%20Anim.png" gif="assets/anim/Selemusium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="SelemusiumLogo">
                <h2>Sélémusium<br><span class="badge badge-pill badge-danger infoNew-A5">Fermer</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A5" style="display: none;">
                    <p>Projet de création de musique.</p>
                    <small>Nouvel Album disponible sur le site officiel.</small><br>
                    <a href="https://selemusium.xyz/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                    <a href="https://open.spotify.com/artist/2yWQ9fey7HTSX7ChOfvl3R" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/spotify.png" alt="spotify"/></a>
                    <a href="https://www.deezer.com/fr/artist/174249627" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/deezer.png" alt="deezer"/></a>
                    <a href="https://soundcloud.com/selemusium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/soundcloud.png" alt="soundcloud"/></a>
                    <a href="https://www.instagram.com/selemusium/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.youtube.com/channel/UC71QZyaMR2AiK00Hz7fZ_gw/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://github.com/Selemusium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                    <a href="https://www.tiktok.com/@selemusium?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                    <a href="https://www.linkedin.com/company/selemusium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A5">
                    <p>Ce projet de musique avait de grandes ambitions dans un système de recrutement/création, mais les membres qui ont rejoint n'ont pas réussi à faire fonctionner le projet, qui était malheureusement très éloigné de la philosophie de l'entreprise</p>    
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A5" onclick="oldProjectBtn('5','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>
                
            </li>

            <li id="a2">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" logo="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" gif="assets/anim/TyroDiscord%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroDiscord">
                <h2>TyroDiscord<br><span class="badge badge-pill badge-primary infoNew-A2">Transformer</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A2" style="display: none;">
                    <p>Projet de bot et logiciel pour<br> améliorer l'expérience de Discord.</p>
                    <small>Disponible entièrement sur le site officiel.</small><br>
                    <a href="https://www.tyrodiscord.xyz/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                    <a href="https://www.instagram.com/tyrodiscord/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://github.com/TyroDiscord" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                    <a href="https://www.linkedin.com/company/tyrodiscord" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A2">
                    <p>Ce projet de création d'extensions pour Discord se termine en tant que projet mais continuera d'exister dans l'entreprise pour permettre à notre équipe et à certains autres projets de simplifier et d'aider l'utilisation de Discord dans l'entreprise.</p>    
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A2" onclick="oldProjectBtn('2','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>
                
            </li>

            <li id="a6">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroShop.png" logo="https://tyrolium.fr/Contenu/Image/TyroShop.png" gif="assets/anim/TyroShop%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="ShopLogo">
                <h2>TyroShop<br><span class="badge badge-pill badge-primary infoNew-A6">Transformer</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A6" style="display: none;">
                    <p>Notre boutique avec des collections<br> faites par nos graphistes.</p>
                    <small>Disponible entièrement sur le site officiel.</small><br>
                    <a href="http://shop.tyrolium.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://www.instagram.com/tyroliumshop/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.tiktok.com/@tyroshop?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                    <a href="https://www.linkedin.com/company/tyroshop" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A6">
                    <p>Notre boutique de projet se termine en tant que projet, mais continuera à exister dans l'entreprise de la même manière que les comptes Useritium ou Tyrodiscord.</p>    
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A6" onclick="oldProjectBtn('6','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>
            
            </li>

            <li id="a7">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/DuoGramme.png" logo="https://tyrolium.fr/Contenu/Image/DuoGramme.png" gif="assets/anim/DuoGramme%20Anim.gif"  onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="Duo-Gramme">
                <h2>DuoGramme<br><span class="badge badge-pill badge-danger infoNew-A7">Fermer</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A7" style="display: none;">
                    <p>Projet de plusieurs concepts divertissements<br> et informatifs sur les réseaux sociaux.</p>
                    <small>En collaboration avec l'entreprise "<a class="btn-part" href="https://www.youtube.com/c/MA3WAN">MA3WAN</a>" .</small><br>
                    <a href="https://www.instagram.com/nftgramme/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                    <a href="https://www.instagram.com/albumaugramme/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.linkedin.com/company/duogramme" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A7">
                    <p>Ce projet avait pour but de créer des comptes Instagram pour informer un grand nombre de personnes sur des sujets peu connus. Malheureusement, il n'a jamais abouti. En raison des nombreux projets à gérer en même temps, l'équipe n'a jamais pu s'y consacrer pleinement.</p>    
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A7" onclick="oldProjectBtn('7','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>
            </li>

            <li id="a10">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroStudent.png" logo="http://tyrolium.fr/Contenu/Image/TyroStudent.png" gif="assets/anim/TyroStudent%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroStudent">
                <h2>TyroStudent<br><span class="badge badge-pill badge-warning infoNew-A10">Non abouti</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A10" style="display: none;">
                    <p>Projet de Formation de Tyrolium</p>
                    <a href="https://www.linkedin.com/company/tyrostudent" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/> Allez sur notre Linkedin</a><br>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A10">
                    <p>Ce projet n'a réellement jamais vu le jour, seuls des croquis ou des maquettes du projet existent aujourd'hui.</p>    
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A10" onclick="oldProjectBtn('10','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>
            </li>

            <li id="a9">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Chantium.png" logo="http://tyrolium.fr/Contenu/Image/Chantium.png" gif="assets/anim/Chantium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="ChantiumLogo">
                <h2>Chantium<br><span class="badge badge-pill badge-info infoNew-A9">En Attente</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A9" style="display: none;">
                    <p>Application de gestion afin de simplifier la communication<br> des different cores de métier sur un chantier</p>
                    <small>En collaboration avec l'entreprise "<a class="btn-part" href="https://batirpositif.com">Bâtir Positif</a>" .</small><br>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A9">
                    <p>Chantium est en attente de pouvoir continuer, malgré tout, ce projet reste fermé jusqu'à nouvel ordre. Il s'agit d'un projet de création d'une application pour simplifier la communication entre les membres du chantier.</p>    
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A9" onclick="oldProjectBtn('9','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>

            </li>

            <li id="a12">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Freenium.png" alt="FreeniumLogo">
                <h2>Freenium<br><span class="badge badge-pill badge-primary infoNew-A12">Transformer</span></h2>

                <!-- Text Old -->
                <div class="infoOld-A12" style="display: none;">
                    <p>Secteur réservé aux activités de freelance. </p>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A12">
                    <p>Ce projet est à la base des prestations que Tyrolium propose aujourd'hui.</p>    
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A12" onclick="oldProjectBtn('12','def')"><i class="fas fa-chevron-down"></i> Version d'avant</bottom>
            </li>
        </ul>
    </div>
        <style>

            .btn-part:hover{
                text-decoration: underline;
            }

        </style>
    </section>
</main>

<?php footer(); ?> </body> </html>

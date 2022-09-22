<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

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
                <img src="assets/atom_project.png" style="width: 100%;">
                <br>
            </div>
        </div>
        <style>


        </style>


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
                }';
                echo '
                body.light #projet ul li#a'. $i .'{
                    background: linear-gradient(
                        to right,
                        #151515 30%,
                        rgba(0, 0, 0, 0.2) 50%
                    ),
                    url("'. $env_back[$i] .'");
                    background-size: cover;
                    background-position: center 35%;
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
                        background-size: cover;';
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
                                #e1e1e1 30%
                        ),
                        url("'. $env_back[$i] .'");
                        background-size: cover;';
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
                <img class="logo" src="assets/anim/TyroServ%20Anim.png" logo="assets/anim/TyroServ%20Anim.png" gif="assets/anim/tyroserv.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroservLogo">
                <h2>TyroServ</h2>
                <p>Serveur moddé sur le jeu Minecraft.</p>
                <small>Saison 3 disponible en printemps 2023.</small><br>
                <a href="https://www.tyroserv.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumserver/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://twitter.com/tyrolium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCZTbdKAcFw2xrLFjO9WpYYw" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/TyroServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.curseforge.com/minecraft/mc-mods/tyromod/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/curse.png" alt="curseforge"/></a>
                <a href="https://www.tiktok.com/@tyroserv?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/tyroserv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a8">
                <img class="logo" src="assets/anim/SolidServ%20Anim.png" logo="assets/anim/SolidServ%20Anim.png" gif="http://tyrolium.fr/Contenu/Image/SolidServ%20Anim2.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="SolidServLogo">
                <h2>SolidServ</h2>
                <p>Projet d'hébergeur de serveur.</p>
                <small>Disponible entièrement sur le site officiel.</small><br>
                <a href="https://solidserv.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/ycwWzmCQNx" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/solidserv/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://twitter.com/solid_serv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCB3F4NN820r3Se4ZZinQpHA" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/SolidServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.tiktok.com/@solidserv?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/solidserv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
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

            <li id="a2">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" logo="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" gif="assets/anim/TyroDiscord%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroDiscord">
                <h2>TyroDiscord</h2>
                <p>Projet de bot et logiciel pour<br> améliorer l'expérience de Discord.</p>
                <small>Disponible entièrement sur le site officiel.</small><br>
                <a href="https://www.tyrodiscord.xyz/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://www.instagram.com/tyrodiscord/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://github.com/TyroDiscord" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.linkedin.com/company/tyrodiscord" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a3">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" logo="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" gif="assets/anim/TyroStudio%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="StudioLogo">
                <h2>TyroStudio</h2>
                <p>Projet d'un studio de développement<br> de jeux-vidéo.</p>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre Discord</a><br>
                <a href="https://www.instagram.com/tyroliumstudio/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.linkedin.com/company/tyrostudio" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a4">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Wonderlium.png" logo="http://tyrolium.fr/Contenu/Image/Wonderlium.png" gif="assets/anim/Wonderlium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="WonderliumLogo">
                <h2>Wonderlium</h2>
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
            </li>

            <li id="a5">
                <img class="logo" src="assets/anim/Selemusium%20Anim.png" logo="assets/anim/Selemusium%20Anim.png" gif="assets/anim/Selemusium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="SelemusiumLogo">
                <h2>Sélémusium</h2>
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
            </li>

            <li id="a6">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroShop.png" logo="https://tyrolium.fr/Contenu/Image/TyroShop.png" gif="assets/anim/TyroShop%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="ShopLogo">
                <h2>TyroShop</h2>
                <p>Notre boutique avec des collections<br> faites par nos graphistes.</p>
                <small>Disponible entièrement sur le site officiel.</small><br>
                <a href="http://shop.tyrolium.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumshop/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.tiktok.com/@tyroshop?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/tyroshop" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a7">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/DuoGramme.png" logo="https://tyrolium.fr/Contenu/Image/DuoGramme.png" gif="assets/anim/DuoGramme%20Anim.gif"  onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="Duo-Gramme">
                <h2>DuoGramme</h2>
                <p>Projet de plusieurs concepts divertissements<br> et informatifs sur les réseaux sociaux.</p>
                <small>En collaboration avec l'entreprise "<a class="btn-part" href="https://www.youtube.com/c/MA3WAN">MA3WAN</a>" .</small><br>
                <a href="https://www.instagram.com/nftgramme/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                <a href="https://www.instagram.com/albumaugramme/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.linkedin.com/company/duogramme" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a10">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroStudent.png" logo="http://tyrolium.fr/Contenu/Image/TyroStudent.png" gif="assets/anim/TyroStudent%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroStudent">
                <h2>TyroStudent</h2>
                <p>Projet de Formation de Tyrolium</p>
                <a href="https://www.linkedin.com/company/tyrostudent" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/> Allez sur notre Linkedin</a><br>
            </li>

            <li id="a9">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Chantium.png" logo="http://tyrolium.fr/Contenu/Image/Chantium.png" gif="assets/anim/Chantium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="ChantiumLogo">
                <h2>Chantium</h2>
                <p>Application de gestion afin de simplifier la communication<br> des different cores de métier sur un chantier</p>
                <small>En collaboration avec l'entreprise "<a class="btn-part" href="https://batirpositif.com">Bâtir Positif</a>" .</small><br>
            </li>
        </ul>

        <style>

            .btn-part:hover{
                text-decoration: underline;
            }

        </style>
    </section>
</main>

<?php footer(); ?> </body> </html>

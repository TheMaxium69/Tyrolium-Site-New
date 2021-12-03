<?php include "app/app.php"; $page = 3; ?><!doctype html>
<html lang="fr">
<head>
    <?php head($page); ?>
</head>
<body>
<header>
    <?php navbar($page); ?>
</header>
<main>
    <section id="projet">
        <br>
        <h2>Nos Projets</h2>
        <p>Les projets sont créés avec une passion commune au sein de l'entreprise nous souhaitons toujours proposer le meilleur.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
        <div id="title"><h2>Projet de développement</h2></div>
        <?php
            $nbBack = count($env_back);

            for ($i = 0; $i <= $nbBack-1; $i++) {
                echo '<style>
                #projet ul li#a'. $i .'{
                    background: linear-gradient(
                            to right,
                            #151515 30%,
                            rgba(0, 0, 0, 0.2) 50%
                    ),
                    url("'. $env_back[$i] .'");
                    background-size: cover;
                    background-position: center 35%;
                }
            </style>';
            } ?>
        <ul>
            <li id="a0">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium ServerMC S2.png" alt="TyroservLogo">
                <h2>TyroServ</h2>
                <p id="notgras">Le plus important de nos projets,<br> il est à l'origine même de la création de l'entreprise.</p>
                <p>Serveur moddé sur le jeu Minecraft.</p>
                <small>Disponible entièrement sur le site officiel.</small><br>
                <a href="http://tyroserv.fr/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumserver/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://twitter.com/tyrolium" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCZTbdKAcFw2xrLFjO9WpYYw" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/TyroServ" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.curseforge.com/minecraft/mc-mods/tyromod/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/curse.png" alt="curseforge"/></a>
                <a href="https://www.tiktok.com/@tyroserv?" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
            </li>
            <li id="a1">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Gamenium.png" alt="GameniumLogo">
                <h2>Gamenium</h2>
                <p>Site d'actualités et de critiques<br> de jeux-vidéos.</p>
                <small>Site en cours de Développement, et il y a l'actualité<br> et les sondages disponible sur notre Discord.</small><br>
                <a href="https://www.instagram.com/gamenium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.tiktok.com/@gamenium?" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.twitch.tv/gamenium_off" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitch.png" alt="twitch"/></a>
            </li>
            <li id="a2">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" alt="TyroDiscord">
                <h2>TyroDiscord</h2>
                <p>Projet de bot et logiciel pour<br> améliorer l'expérience de Discord.</p>
                <small>Site en cours de Développement,<br> et information sur le projet sur Discord.</small><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre Discord</a><br>
            </li>
            <li id="a3">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" alt="StudioLogo">
                <h2>Studio</h2>
                <p>Projet d'un studio de développement<br> de jeux-vidéo.</p>
                <small>En cours de rélfexion<br> et de création.</small><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre Discord</a><br>
                <a href="https://www.instagram.com/tyroliumstudio/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
            </li>
        </ul>
        <div id="title"><h2>Projet artistique</h2></div>
        <ul>
            <li id="a4">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Wonderlium.png" alt="WonderliumLogo">
                <h2>Wonderlium</h2>
                <p>Collectif réalisant des vidéos<br> sur l'univers geek.</p>
                <small>Des vidéos en cours de création.</small><br>
                <a href="https://www.youtube.com/channel/UC8tEUehEz2p53Pw8wSky3TQ" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/> Allez sur notre chaine</a><br>
                <a href="http://site.wonderlium.yt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/></a>
                <a href="https://www.instagram.com/wonderlium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
            </li>
            <li id="a5">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/Selemusium.png" alt="SelemusiumLogo">
                <h2>Sélémusium</h2>
                <p>Projet de création de musiques.</p>
                <small>Des prods en création déjà disponibles sur<br> notre Discord, et un site en développement.</small><br>
                <a href="https://www.instagram.com/selemusium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
            </li>

            <li id="a6">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroShop.png" alt="ShopLogo">
                <h2>TyroShop</h2>
                <p>Notre boutique avec des collections<br> faites par nos graphistes.</p>
                <small>Une nouvelle collection en cours de création.</small><br>
                <a href="http://shop.tyrolium.fr/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumshop/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.tiktok.com/@tyroshop?" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
            </li>
        </ul>
    </section>




</main>

<footer>

</footer>

</body>
</html>

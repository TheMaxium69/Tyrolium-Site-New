<?php include "app/app.php"; $page = 3; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2>Nos Projets</h2>
        <p class="container">Tout nos projets appartiennent à l'entreprise Tyrolium et sont gérés par nos équipes.
            Les projets restent indépendants dans leurs communications, leur gestion et leur administration.
            Ils sont financés par entreprise, le but de Tyrolium est de vivre de nos passions.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
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
            }

            echo '} </style>'; ?>
        <ul>
            <li id="a0">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium ServerMC S2.png" alt="TyroservLogo">
                <h2>TyroServ</h2>
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
                <p>Site d'actualités et de critiques<br> de jeux-vidéo.</p>
                <a href="https://www.instagram.com/gamenium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.tiktok.com/@gamenium?" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.twitch.tv/gamenium_off" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitch.png" alt="twitch"/></a>
            </li>
            <li id="a2">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" alt="TyroDiscord">
                <h2>TyroDiscord</h2>
                <p>Projet de bot et logiciel pour<br> améliorer l'expérience de Discord.</p>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre Discord</a><br>
            </li>
            <li id="a3">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" alt="StudioLogo">
                <h2>TyroStudio</h2>
                <p>Projet d'un studio de développement<br> de jeux-vidéo.</p>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/> Allez sur notre Discord</a><br>
                <a href="https://www.instagram.com/tyroliumstudio/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
            </li>
            <li id="a4">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Wonderlium.png" alt="WonderliumLogo">
                <h2>Wonderlium</h2>
                <p>Collectif réalisant des vidéos<br> sur l'univers geek.</p>
                <a href="https://www.youtube.com/channel/UC8tEUehEz2p53Pw8wSky3TQ" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/> Allez sur notre chaine</a><br>
                <a href="http://site.wonderlium.yt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/></a>
                <a href="https://www.instagram.com/wonderlium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
            </li>
            <li id="a5">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/Selemusium.png" alt="SelemusiumLogo">
                <h2>Sélémusium</h2>
                <p>Projet de création de musique.</p>
                <a href="http://selemusium.xyz/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://soundcloud.com/selemusium" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/soundcloud.png" alt="soundcloud"/></a>
                <a href="https://www.instagram.com/selemusium/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
            </li>

            <li id="a6">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroShop.png" alt="ShopLogo">
                <h2>TyroShop</h2>
                <p>Notre boutique avec des collections<br> faites par nos graphistes.</p>
                <a href="http://shop.tyrolium.fr/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumshop/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.tiktok.com/@tyroshop?" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
            </li>

            <li id="a7">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/DuoGramme.png" alt="Duo-Gramme">
                <h2>DuoGramme</h2>
                <p>Projet de plusieurs concepts divertissements<br> et informatifs sur les réseaux sociaux.</p>
                <small>En colaboration avec l'entreprise "MA3WAN" .</small><br>
                <a href="https://www.instagram.com/nftgramme/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                <a href="https://www.instagram.com/albumaugramme/" class="btn" target="_blank" style="color: black;"><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
            </li>
        </ul>
    </section>
</main>

<?php footer(); ?> </body> </html>

<?php include "app/app.php"; $page = 7; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2 style="font-size: 35px">Plus d'informations</h2>
        <p style="font-size: 20px" class="container">Retrouvez ici toutes les informations complémentaires de Tyrolium.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
    </section>
    <section id="info">
        <div id="info" class="container" style="text-align: start;">
            <div style="text-align: center">
                <h2 style="text-align: center; margin-bottom: 20px; color: #0049ee"><i class="fas fa-scroll"></i>Administratif de l'entreprise</h2>
                <p>Tyrolium est une entreprise à but lucratif, toute création de l'entreprise nous appartient.</p>
                <p>Copyright © Tyrolium. 2017-2022<br> © 2022 Tyrolium, Ent.<br>All Right Reserved ©Tyrolium</p>
                <p>Fondé par Maxime Tournier</p>
                <p>Siret : <br> 91027536100012</p>
                <p>Siège Social : <br> 252, Avenue Jean Jaurès 69150 Décines-Charpieu</p>
                <p>Contact : <br> officiel@tyrolium.fr <br> maxime.tournier@tyrolium.fr<br> +33 6 11 11 26 69</p>
            </div>
            <h2 style="margin-top: 20px;text-align: center; color: #0049ee"><i class="fas fa-paperclip"></i>Crédit du Site Web</h2>
            <div class="row">
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px; color: #588aff">Remerciements</h3>
                    <p class="no-p">Développeur</p>
                    <small>- Maxime Tournier</small><br>
                    <p class="no-p">Web-Designeur</p>
                    <small>- Maxime Tournier</small><br>
                    <p class="no-p">Informations écrites</p>
                    <small>- Maxime Tournier</small><br>
                    <p class="no-p">Écriture des textes</p>
                    <small>- Maxime Tournier</small><br>
                    <small>- Norman Jorge De Freitas</small><br>
                    <p class="no-p">Correction des textes</p>
                    <small>- Norman Jorge De Freitas</small><br>
                    <small>- Myriam Tournier</small><br>
                    <small>- Steeve Tournier</small><br>
                    <small>- Jade Pluqet</small><br>
                    <p class="no-p">Maquettage</p>
                    <small>- Maxime Tournier</small><br>
                    <p class="no-p">Graphismes</p>
                    <small>- Maxime Tournier</small><br>
                    <small>- Maewan Marthelot</small><br>
                    <p class="no-p">Investisseurs</p>
                    <small>- Maxime Tournier</small><br>
                    <small>- Norman Jorge De Freitas</small><br>
                    <small>- Pierre-Louis Devaud</small><br>
                    <p class="no-p">Bêta-Testeurs</p>
                    <small>- Maxime Tournier</small><br>
                    <small>- Norman Jorge De Freitas</small><br>
                    <small>- Dylan Argentino</small><br>
                    <small>- Mattéo Ferrer</small><br>
                    <small>- Edward Thouvenin</small><br>
                    <small>- Myriam Tournier</small><br>
                    <small>- Steeve Tournier</small><br>
                    <p class="no-p">Photographe de la banière de Sélémusium</p>
                    <small>- Norman Jorge De Freitas</small>
                </div>
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px;color: #588aff">Technologies</h3>
                    <p class="no-p">Librairies</p>
                    <small>- Bootstrap-4.3.1 </small><br>
                    <small>- FontAwesome-5.15.4</small><br>
                    <small>- JQuery-3.4.1</small><br>
                    <small>- MaterialUI-0.10.3</small><br>
                    <small>- Particule.JS-2.0.0</small><br>
                    <small>- ScrollReveal-3.3.1</small><br>
                    <small>- Iconscout-2.1.9</small><br>
                    <small>- reCaptcha-Php-Lib-1.2.4</small><br>
                    <small>- Normalize</small><br>
                    <small>- Google Front</small><br>
                    <small>- iziToast</small><br>
                    <p class="no-p">Extentions</p>
                    <small>- Google Analytics</small><br>
                    <small>- Google reCAPTCHA</small><br>
                    <small>- PhpMyAdmin</small><br>
                    <small>- MySQL</small><br>
                    <p class="no-p">Languages</p>
                    <small>- HTML</small><br>
                    <small>- CSS</small><br>
                    <small>- JavaScript</small><br>
                    <small>- PHP</small><br>
                    <small>- SQL</small><br>
                    <p class="no-p">Banque à images</p>
                    <small>- www.manypixels.com</small><br>
                </div>
            </div>
            <h2 style="margin-top: 20px;text-align: center; margin-bottom: 10px; color: #0049ee"><i class="fas fa-balance-scale"></i>Droits</h2>
            <div style="text-align: center">
                <p class="no-p bold">L'intégralité du site et de ses contenus postés sur les serveurs, les contenus mis en ligne qui sont rendus publics, les images, les textes et tout les écrits, le design, le code-source, les logos, les visuels, les photos ainsi que les produits, appartiennent entièrement à Tyrolium.
                    <br>Cela grâce au copyright (© 2022 Tyrolium, Ent.)
                    <br>Et à l'article L111-1 du code de la propriété intellectuelle française.</p>
            </div>
            <br>
            <div class="row">
                <div class="col-6 textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Toutes les marques listées appartiennent à Tyrolium. (Nom, produit et visuel associé.) </p>
                    <small>Tyrolium ®</small><br>
                    <small>TyroServ ®</small><br>
                    <small>TyroDiscord ®</small><br>
                    <small>TyroShop ®</small><br>
                    <small>TyroStudio ®</small><br>
                    <small>Gamenium ®</small><br>
                    <small>Sélémusium ®</small><br>
                    <small>Wonderlium ®</small><br>
                    <small>Useritium ®</small><br>
                    <small>TyroStudent ®</small><br>
                    <small>-Minerais TyroServ protégés-</small><br>
                    <small>Rhodonium ®</small><br>
                    <small>Aventurium ®</small><br>
                    <small>Yellorium ®</small><br>
                    <small>Volcanium ®</small><br>
                    <p class="no-p"> © 2022 Tyrolium, Ent.</p>
                    <br>
                </div>
                <div class="col-6 textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Tous les logos utilisés appartiennent à leur créateur.
                        Seuls les logos de Tyrolium nous appartiennent.</p>
                    <small>© 2022 Tyrolium, Ent.</small><br>
                    <small>© 2022 Google LLC</small><br>
                    <small>© 2022 Meta</small><br>
                    <small>© 2022 Twitter, Inc.</small><br>
                    <small>© 2022 Discord / copyright@discord.com</small><br>
                    <small>LinkedIn Corporation © 2022</small><br>
                    <small>© 2022 GitHub, Inc.</small><br>
                    <small>© 2022 Overwolf</small><br>
                    <small>© 2022 Twitch Interactive, Inc.</small><br>
                    <small>© 2022 TikTok</small><br>
                    <small>© 2022 SoundCloud Operations, Inc. / copyright@soundcloud.com</small><br>
                    <small>2022 © BâtirPositif</small><br>
                    <small>Mojang © 2009-2022</small><br>
                    <small>© 2022 Adobe.</small><br>
                    <small>2022 © CLS-Habitat</small><br>
                </div>
            </div>
        </div>
    </section>


</main>
<style>
    div#info{
        padding: 30px 60px
    }
    
    @media (max-width: 496px) {
        div#info{
            padding: 30px 20px
        }
        
    }
    @media (max-width: 751px) {
        div.textmore{
            width: 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

    }

</style>

<?php footer(); ?> </body> </html>

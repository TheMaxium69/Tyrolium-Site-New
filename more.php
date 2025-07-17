<?php include "app/app.php"; $page = 8; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<main>
    <section id="projet">
        <br>
        <h2 style="font-size: 35px"><?= $lang[$page]["about"]["title"] ?></h2>
        <p style="font-size: 20px" class="container">
            <?= $lang[$page]["about"]["txt"] ?>
        </p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
    </section>
    <section id="info">
        <div id="info" class="container" style="text-align: start;">
            <div style="text-align: center">
                <h2 style="text-align: center; margin-bottom: 20px; color: #0049ee"><i class="fas fa-scroll"></i>Administratif de l'entreprise</h2>
                <p>Tyrolium est une entreprise à but lucratif, toute création de l'entreprise nous appartient.</p>
                <p>Copyright © Tyrolium. <?= date("Y"); ?><br> © 2017-<?= date("Y"); ?> Tyrolium, Ent.<br>All Right Reserved ©Tyrolium</p>
                <p>Fondé par Maxime Tournier</p>
                <p>Siret : <br> 91027536100012</p>
                <p>Numéro TVA : <br> FR33910275361</p>
                <p>Activité (Code NAF ou APE) : <br> Programmation informatique (6201Z)</p>
                <p>Siège Social : <br> 252, Avenue Jean Jaurès 69150 Décines-Charpieu</p>
                <p>Établissement secondaire : <br> 44, Avenue Paul Kruger 69100 Villeurbanne</p>
                <p>Contact Global: <br> officiel@tyrolium.fr </p>
                <p>Contact de la Direction: <br> maxime.tournier@tyrolium.fr<br> +33 6 11 11 26 69</p>
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
                    <small>- Jade Pluquet</small><br>
                    <small>- Lola Dutouquet</small><br>
                    <small>- Daniel Taniou</small>
                    <p class="no-p">Maquettage</p>
                    <small>- Maxime Tournier</small><br>
                    <p class="no-p">Graphismes</p>
                    <small>- Maxime Tournier</small><br>
                    <small>- Maewan Marthelot</small><br>
                    <p class="no-p">Investisseurs (site)</p>
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
                    <small>- Jade Pluquet</small><br>
                    <p class="no-p">Traducteur</p>
                    <small>- Lola Dutouquet</small><br>
                    <small>- Daniel Taniou</small><br>
                </div>
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px;color: #588aff">Technologies</h3>
                    <p class="no-p">FrameWork</p>
                    <small>- TyroSiteFrameWork-1.0.0 </small><br>
                    <p class="no-p">Librairies</p>
                    <small>- TyroButton-0.0.1-Private</small><br>
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
                    <small>- TypeWriterJS</small><br>
                    <small>- SplideJS-2.3.1</small><br>
                    <p class="no-p">Extentions</p>
                    <small>- Google Analytics</small><br>
                    <small>- Google reCAPTCHA</small><br>
                    <small>- PhpMyAdmin</small><br>
                    <small>- MySQL</small><br>
                    <p class="no-p">Languages</p>
                    <small>- HTML</small><br>
                    <small>- CSS</small><br>
                    <small>- SCSS</small><br>
                    <small>- JavaScript</small><br>
                    <small>- PHP</small><br>
                    <small>- SQL</small><br>
                    <p class="no-p">Banque à images</p>
                    <small>- www.manypixels.com</small><br>
                    <p class="no-p">Hebergeur</p>
                    <small>- SolidServ ® - © 2017-<?= date("Y"); ?> Tyrolium, Ent.</small><br>
                </div>
            </div>
            <h2 style="margin-top: 20px;text-align: center; margin-bottom: 10px; color: #0049ee"><i class="fas fa-balance-scale"></i>Droits</h2>
            <div style="text-align: center">
                <p class="no-p bold">L'intégralité du site et de ses contenus postés sur les serveurs, les contenus mis en ligne qui sont rendus publics, les images, les textes et tout les écrits, le design, le code-source, les logos, les visuels, les photos ainsi que les produits, appartiennent entièrement à Tyrolium.
                    <br>Cela grâce au copyright (© 2017-<?= date("Y"); ?> Tyrolium, Ent.)
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
                    <small>SolidServ ®</small><br>
                    <small>Gamenium ®</small><br>
                    <small>Sélémusium ®</small><br>
                    <small>Wonderlium ®</small><br>
                    <small>Useritium ®</small><br>
                    <small>TyroStudent ®</small><br>
                    <small>Influnias ®</small><br>
                    <small>Vturias ®</small><br>
                    <small>DuoGramme ®</small><br>
                    <small>NexiumiaCRM ®</small><br>
                    <small>Avra-Formule ®</small><br>
                    <small>-Minerais TyroServ protégés-</small><br>
                    <small>Tyrolium ®</small><br>
                    <small>Rhodonium ®</small><br>
                    <small>Aventurium ®</small><br>
                    <small>Yellorium ®</small><br>
                    <small>Volcanium ®</small><br>
                    <p class="no-p"> © 2017-<?= date("Y"); ?> Tyrolium, Ent.</p>
                    <br>
                </div>
                <div class="col-6 textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Tous les logos utilisés appartiennent à leur créateur.
                        Seuls les logos de Tyrolium nous appartiennent.</p>
                    <small>© 2017-<?= date("Y"); ?> Tyrolium, Ent.</small><br>
                    <small>© <?= date("Y"); ?> Google LLC</small><br>
                    <small>© <?= date("Y"); ?> Meta</small><br>
                    <small>© <?= date("Y"); ?> Twitter, Inc.</small><br>
                    <small>© <?= date("Y"); ?> Discord / copyright@discord.com</small><br>
                    <small>LinkedIn Corporation © <?= date("Y"); ?></small><br>
                    <small>© <?= date("Y"); ?> GitHub, Inc.</small><br>
                    <small>© <?= date("Y"); ?> Overwolf</small><br>
                    <small>© <?= date("Y"); ?> Twitch Interactive, Inc.</small><br>
                    <small>© <?= date("Y"); ?> TikTok</small><br>
                    <small>© <?= date("Y"); ?> SoundCloud Operations, Inc. / copyright@soundcloud.com</small><br>
                    <small><?= date("Y"); ?> © BâtirPositif</small><br>
                    <small>Mojang © 2009-<?= date("Y"); ?></small><br>
                    <small>© <?= date("Y"); ?> Adobe.</small><br>
                    <small><?= date("Y"); ?> © CLS-Habitat</small><br>
                    <small>© <?= date("Y"); ?> GETTR USA, Inc.</small><br>
                    <small>© <?= date("Y"); ?> Génération IUM, Org.</small><br>
                </div>
                <div style="text-align: start">
                    <h2 style="text-align: center; margin-bottom: 20px; color: #0049ee"><i class="fas fa-globe"></i>Conditions Générales d'Utilisation</h2>
                    
                    <p>Les présentes Conditions Générales d'Utilisation (ci-après dénommées les "CGU") régissent l'utilisation du site web <strong>Tyrolium</strong> (ci-après dénommé le "Site") et des services associés (ci-après dénommés les "Services"). Veuillez lire attentivement ces CGU avant d'utiliser le Site. En accédant au Site ou en utilisant les Services, vous acceptez d'être lié par ces CGU.</p>

                    <h3 style="color: #588aff">1. Acceptation des CGU</h3>

                    <p>En accédant au Site ou en utilisant les Services, vous déclarez avoir lu, compris et accepté les présentes CGU. Si vous n'acceptez pas ces CGU, veuillez ne pas utiliser le Site.</p>

                    <h3 style="color: #588aff">2. Utilisation du Site</h3>

                    <p>Vous pouvez utiliser le Site et les Services à des fins personnelles et non commerciales, conformément aux lois et réglementations en vigueur. Vous vous engagez à ne pas utiliser le Site de manière frauduleuse, abusive ou illégale.</p>

                    <h3 style="color: #588aff">3. Propriété intellectuelle</h3>

                    <p>Le Site et son contenu, y compris mais sans s'y limiter, les textes, les images, les graphiques, les logos et les vidéos, sont protégés par des droits de propriété intellectuelle et appartiennent à <strong>Tyrolium</strong>. Vous ne pouvez pas copier, modifier, distribuer ou reproduire le contenu du Site sans autorisation préalable.</p>

                    <h3 style="color: #588aff">4. Limitation de responsabilité</h3>

                    <p>Le Site et les Services sont fournis "tels quels", sans garantie d'aucune sorte, expresse ou implicite. <strong>Tyrolium</strong> ne saurait être tenue responsable des dommages directs, indirects, spéciaux, consécutifs ou punitifs résultant de l'utilisation ou de l'incapacité d'utiliser le Site ou les Services.</p>

                    <h3 style="color: #588aff">5. Liens externes</h3>

                    <p>Le Site peut contenir des liens vers des sites web tiers. <strong>Tyrolium</strong> n'exerce aucun contrôle sur ces sites et n'assume aucune responsabilité quant à leur contenu ou à leur utilisation. L'accès à ces liens externes se fait à vos propres risques.</p>

                    <h3 style="color: #588aff">6. Modification des CGU</h3>

                    <p><strong>Tyrolium</strong> se réserve le droit de modifier ces CGU à tout moment, sans préavis. Les modifications entreront en vigueur dès leur publication sur le Site. Il vous incombe de consulter régulièrement les CGU pour vous tenir informé des éventuelles mises à jour.</p>

                    <h3 style="color: #588aff">7. Droit applicable et juridiction compétente</h3>

                    <p>Les présentes CGU sont régies et interprétées conformément aux lois <strong>Française</strong>. Tout litige découlant de l'utilisation du Site ou des Services relèvera de la compétence exclusive du tribunal de grande instance de <strong>Lyon</strong>.</p>

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

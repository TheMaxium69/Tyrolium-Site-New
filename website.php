<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2 class="titleP">Nos Prestations</h2>
        <p>Cette page contient les prestations, avec ci-dessous toutes les différentes prestations que nous vendons.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
    </section>
    <section id="service-start" class="row container">
        <div class="col-9">
            <h2 class="titleS"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Site Web</h2>
            <br id="991none">
            <p class="container">Ci-dessous les différentes formules sont affichées,<br> nous faisons majoritairement de la création de sites web.</p>
            <br>
        </div>
        <div class="col-3">
            <img src="assets/Coding%20_Monochromatic.png" style="width: 125px;margin-left: -185px;">
            <br>
        </div>
    </section>
    <section class="service-page">
        <div class="background">
            <div class="container container-serv">
                <div class="panel pricing-table">

                    <div class="pricing-plan">
                        <img src="assets/paper-plane.png" alt="PaperPlane" class="pricing-img">
                        <h2 class="pricing-header"><?php echo $env_presta_web['0'] ?></h2>
                        <br>
                        <p class="pricing-header" style="margin-bottom: -10px; color: #888;">à partir de </p>
                        <span class="pricing-price">50€</span>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><div><span class="underline bold">Concrètement</span> : Il s'agit d'une formule bien pour les porte-folios.
                                    Les sites de présentation juste avec du texte pour présenter un projet.</div>
                            </li>
                            <li class="pricing-features-item"><div><span class="underline bold">Techniquement</span> : Il s'agit d'une simple ou de plusieurs pages où l'on travaille juste avec des langages de front-end.
                                    Aucune relation avec une API ou une base de données ne sera faite avec cette formule.</div></li>
                        </ul>
                        <span class="pricing-price"></span>
                        <?php tyrobtn("contact.php?name=web&form=1", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/plane.png" alt="Plane" class="pricing-img">
                        <h2 class="pricing-header"><?php echo $env_presta_web['1'] ?></h2>
                        <br>
                        <p class="pricing-header" style="margin-bottom: -10px; color: #888;">à partir de </p>
                        <span class="pricing-price">400€</span>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><div><span class="underline bold">Concrètement</span> : Il s'agit d'une formule bien pour les entreprises, les sites qui demande plus qu'un simple texte mais une présention qui pourra afficher des informations. Avec cette formule le site pourra être modifier grâce à un panel administrateur.</div></li>
                            <li class="pricing-features-item"><div><span class="underline bold">Techniquement</span> : Il s'agit de plusieurs pages qui pourra être modifiable, on pourra se connecter à des API simple, où l'on utilisera plus régulièrement des FrameWork front-end, avec Php-Object.</div></li>
                        </ul>
                        <span class="pricing-price"></span>
                        <?php tyrobtn("contact.php?name=web&form=2", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/space-ship.png" alt="SpaceShip" class="pricing-img">
                        <h2 class="pricing-header"><?php echo $env_presta_web['2'] ?></h2>
                        <br>
                        <p class="pricing-header" style="margin-bottom: -10px; color: #888;">à partir de </p>
                        <span class="pricing-price">1600€</span>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><div><span class="underline bold">Concrètement</span> : Il s'agit d'une bonne formule notamment pour un gros projet,
                                    créer un réseau social, créer une boutique en ligne, un blog ou une application de gestion personnalisée.</div></li>
                            <li class="pricing-features-item"><div><span class="underline bold"> Techniquement</span> : Cette formule se fera avec un FrameWork front-end et back-end, avec une base de donnée, une création d'API obligatoire, gestion de compte et panel administrateur.</div></li>
                        </ul>
                        <span class="pricing-price"></span>
                        <?php tyrobtn("contact.php?name=web&form=3", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="service-start-but">
        <div class="popups-cont">
            <div class="popups-cont__overlay"></div>
            <div class="popup">
                <div class="popup__pieces"></div>
                <div class="popup__content">
                    <div class="popup__close"></div>
                    <h3 class="popup__heading">Nos réalisations</h3>
                    <div class="popup__text" style="">
                        <p>Voici les sites que nous avons réaliser</p>
                        <br>
                        <div class="row">
                            <div class="col">

                                Bâtir Positif :
                                <a target="_blank" href="https://batirpositif.com">Lien</a>
                                <br><br>
                                CLS-Habitat :
                                <a target="_blank" href="https://cls-habitat.com">Lien</a>
                                <br><br>
                                Groupe Cloudy :
                                <a target="_blank">Soon</a>
                                <br><br>
                                Tyrolium :
                                <a target="_blank">Ici</a>
                                <br><br>
                                SolidServ :
                                <a target="_blank" href="https://solidserv.fr">Lien</a>
                                <br><br>
                                Gamenium :
                                <a target="_blank">Soon</a>
                                <br><br>
                                Wonderlium :
                                <a target="_blank" href="http://site.wonderlium.yt">Lien</a>
                                <br><br>
                                Useritium :
                                <a target="_blank" href="https://useritium.fr">Lien</a>
                                <br><br>
                                TyroDiscord :
                                <a target="_blank" href="https://themaxium69.github.io/TyroDiscord-WebSite/">Lien</a>
                                <br><br>


                            </div>
                            <div class="col">

                                Kaleidoscope :
                                <a target="_blank" href="https://kaleidoscope.tyrolium.fr/">Lien</a>
                                <br><br>
                                Génération IUM :
                                <a target="_blank">Soon</a>
                                <br><br>
                                Agape :
                                <a target="_blank">Soon</a>
                                <br><br>
                                TyroServ :
                                <a target="_blank" href="https://www.tyroserv.fr">Lien</a>
                                <br><br>
                                Influnias :
                                <a target="_blank" href="https://www.influnias.fr">Lien</a>
                                <br><br>
                                Vturias :
                                <a target="_blank">Soon</a>
                                <br><br>
                                Sélémusium :
                                <a target="_blank" href="http://selemusium.tyrolium.fr">Lien</a>
                                <br><br>
                                Artomyx :
                                <a target="_blank" href="https://themaxium69.github.io/Artomyx-Site/">Lien</a>
                                <br><br>
                                Tyrolium Status :
                                <a target="_blank" href="https://tyrolium.fr/Status/">Lien</a>
                                <br><br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <h2 class="titleS" style="text-align: center; font-size:18px;"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Les sites déjà réaliser par Tyrolium</p>
            <br>
            <button style="font-size: 18px;" type="button" id="btn-contact" class="tyrobuttonNone popup-btn">Voir nos réalisations</button>
            <script src="javascript/popup.js"></script>
            <br>
            <br>
            <br>
            <hr style="background: rgb(161, 161, 161);">
            <br>


    <!-- PC -->
    <div class="home-desktop">


    </div>
    <br><br>
</main>

<?php footer(); ?> </body> </html>

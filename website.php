<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>">
<?php if (!empty($_GET['navbar']) && $_GET['navbar'] == "off") { ?> <style> body{ padding-top: 0px!important;}</style><?php } else { ?><header> <?php navbar($page); ?> </header><?php } ?>

<?php loader() ?>

<div class="heading-projet-img" id="website-heading"></div>

<main id="service">
    <style>

        main {

            background-color: #DFDBE5;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%23cecece' fill-opacity='0.04' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");}

        body.light main{
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%232c2c2c' fill-opacity='0.04' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");!important;
            }


    </style>

    <section id="service-start" class="row container">
        <div class="col-9">
            <h2 class="titleP"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Site Web</h2>
            <br id="991none">
            <p class="container">Ci-dessous les différentes formules <br>de création de site web</p>
        </div>
        <div class="col-3">
            <img src="assets/Coding%20_Monochromatic.png" style="width: 125px;margin-left: -185px;">
        </div>
    </section>
    <section id="MyRéalisation" class="container">

        <div id="statMC" class="row container">


            <div class="col-2" style="min-width: 200px; margin: 0 auto">

                <h1 class="bold">12M</h1>
                <h3>Utilisateur annuel sur les site créé par Tyrolium</h3>

            </div>

            <div class="col-2" style="min-width: 200px; margin: 0 auto">

                <h1>+60</h1>
                <h3>Entreprise qui a décidé de nous laisser créer leurs site internet.</h3>

            </div>
            <div class="col-2" style="min-width: 200px; margin: 0 auto">

                <h1>3</h1>
                <h3>Semaine en moyenne pour créer votre site internet</h3>


            </div>
            <div class="col-2" style="min-width: 200px; margin: 0 auto">

                <h1>2019</h1>
                <h3>5 ans d'expertise dans la création de site web</h3>

            </div>

            <div class="col-2" style="min-width: 200px; margin: 0 auto">

                <h1>0</h1>
                <h3>CMS ou Wordpress utilisé sans votre accord </h3>

            </div>


        </div>

        <style>

            #statMC{
                max-width: 1279px;
                margin-bottom: 50px;
                margin-top: 50px;
                text-align: center;
            }

            #statMC h1{
                font-size: 50px;
                font-weight: bold;
            }

            @media (max-width: 768px) {
                #statMC {
                    width: 100%;
                }
                #MyRéalisation {
                    width: 100%;
                }
            }

        </style>





    </section>

    <br>
    <section class="service-page">
        <div class="background">
            <div class="container container-serv">
                <div class="panel pricing-table">

                    <div class="pricing-plan">
                        <img src="assets/paper-plane.png" alt="PaperPlane" class="pricing-img">
                        <h2 class="pricing-header"><?php echo $env_presta_web['0'] ?></h2>
                        <br>
                        <p class="pricing-header" style="margin-bottom: -10px; color: #888;">à partir de </p>
                        <span class="pricing-price">200€</span>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><div><span class="underline bold">Concrètement</span> : Il s'agit d'une formule bien pour les porte-folios.
                                    Les sites de présentation juste avec du texte pour présenter un projet.</div>
                            </li>
                            <li class="pricing-features-item"><div><span class="underline bold">Techniquement</span> : Il s'agit d'une simple ou de plusieurs pages où l'on travaille juste avec des langages de front-end.
                                    Aucune relation avec une API ou une base de données ne sera faite avec cette formule.</div></li>
                        </ul>
                        <span class="pricing-price"></span>
                        <small>Contact : <br>
                            officiel@tyrolium.fr<br>
                            +33 6 11 11 26 69</small><br><br>
                        <?php tyrobtn("contact.php?name=web&form=1", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/plane.png" alt="Plane" class="pricing-img">
                        <h2 class="pricing-header"><?php echo $env_presta_web['1'] ?></h2>
                        <br>
                        <p class="pricing-header" style="margin-bottom: -10px; color: #888;">à partir de </p>
                        <span class="pricing-price">900€</span>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><div><span class="underline bold">Concrètement</span> : Il s'agit d'une formule bien pour les entreprises, les sites qui demande plus qu'un simple texte mais une présention qui pourra afficher des informations. Avec cette formule le site pourra être modifier grâce à un panel administrateur.</div></li>
                            <li class="pricing-features-item"><div><span class="underline bold">Techniquement</span> : Il s'agit de plusieurs pages qui pourra être modifiable, on pourra se connecter à des API simple, où l'on utilisera plus régulièrement des FrameWork front-end, avec Php-Object.</div></li>
                        </ul>
                        <span class="pricing-price"></span>
                        <small>Contact : <br>
                            officiel@tyrolium.fr<br>
                            +33 6 11 11 26 69</small><br><br>
                        <?php tyrobtn("contact.php?name=web&form=2", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/space-ship.png" alt="SpaceShip" class="pricing-img">
                        <h2 class="pricing-header"><?php echo $env_presta_web['2'] ?></h2>
                        <br>
                        <p class="pricing-header" style="margin-bottom: -10px; color: #888;">à partir de </p>
                        <span class="pricing-price">3000€</span>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><div><span class="underline bold">Concrètement</span> : Il s'agit d'une bonne formule notamment pour un gros projet,
                                    créer un réseau social, créer une boutique en ligne, un blog ou une application de gestion personnalisée.</div></li>
                            <li class="pricing-features-item"><div><span class="underline bold"> Techniquement</span> : Cette formule se fera avec un FrameWork front-end et back-end, avec une base de donnée, une création d'API obligatoire, gestion de compte et panel administrateur.</div></li>
                        </ul>
                        <span class="pricing-price"></span>
                        <small>Contact : <br>
                            officiel@tyrolium.fr<br>
                            +33 6 11 11 26 69</small><br><br>
                        <?php tyrobtn("contact.php?name=web&form=3", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--<section id="service-start-but">
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
        </div>-->
        <!--<h2 class="titleS" style="text-align: center; font-size:18px;"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Les sites déjà réaliser par Tyrolium</p>
            <br>
            <button style="font-size: 18px;" type="button" id="btn-contact" class="tyrobuttonNone popup-btn">Voir nos réalisations</button>
            <script src="javascript/popup.js"></script>
            <br>
            <br>
            <br>
            <hr style="background: rgb(161, 161, 161);">
            <br>-->

        <hr style="background: rgb(161, 161, 161); margin: 0px 20% ">

        <br>

            <section id="MyRéalisation" class="container">



                <h2 class="titleS" style="text-align: center;"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Nos Réalisation !</h2>
<br>
                <div id="mysiteGalery">



<?php
$temp = 0;
$tempStyle = 0;
foreach ($env_website as $website){

    $temp = $temp+1;?>

    <article>
        <div class="card-site">
            <div class="card__img card_fond_<?= $temp ?>"></div>
            <div class="card__descr-wrapper">
                <p class="card__title">
                    <?= $website['name'] ?>
                </p>
                <p class="card__descr">
                    <?= $website['desc'] ?>
                </p>
                <div class="card__links">
                    <div>
                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg">&lt;<path d="M562.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L405.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C189.5 251.2 196 330 246 380c56.5 56.5 148 56.5 204.5 0L562.8 267.7zM43.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C57 372 57 321 88.5 289.5L200.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C416.5 260.8 410 182 360 132c-56.5-56.5-148-56.5-204.5 0L43.2 244.3z"></path></svg>
                        <a <?php if (!empty($website['url'])){?> target="_blank" href="<?= $website['url'] ?>" <?php } ?> class="link">Preview</a>
                    </div>
                    <div>
                        <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 496 512" class="svg"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                        <a <?php if (!empty($website['github'])){?> target="_blank" href="<?= $website['github'] ?>" <?php } ?> class="link" >Code</a>
                    </div>
                </div>
            </div>
        </div>
    </article>

<?php } ?>

                </div>
            </section>


            <style>
                <?php foreach ($env_website as $website){
                    $tempStyle = $tempStyle+1;?>

                    .card_fond_<?= $tempStyle ?>{
                        background: url("<?= $website['picture'] ?>");
                    }

                <?php } ?>
            </style>

    <br><br>
</main>

<?php footer(); ?> </body> </html>

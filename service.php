<?php include "app/app.php"; $page = 2; head($page); ?>
<body class="<?php echo $_COOKIE["color"]; ?>"> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2 class="titleP">Nos Prestations</h2>
        <p>Cette page contient les prestations, avec ci-dessous toutes les différentes prestations que nous vendons.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
    </section>
    <section id="service-start">
        <h2 class="titleS">Site Web</h2>
        <p>Ci-dessous les différentes formules sont affichées, nous faisons majoritairement de la création de sites web, les différents tarifs sont également affichés.</p>
        <br>
    </section>
    <section class="service-page">
        <div class="background">
            <div class="container container-serv">
                <div class="panel pricing-table">

                    <div class="pricing-plan">
                        <img src="assets/paper-plane.png" alt="PaperPlane" class="pricing-img">
                        <h2 class="pricing-header"><?php echo $env_presta_web['0'] ?></h2>
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
        <br>
        <p style="text-align: center">Tout l'argent que vous reversez à Tyrolium sera investi dans les projets de l'entreprise.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
        <h2 class="titleS">Autres Prestations</h2>
    </section>
    <section id="service-second">
        <h2>Minecraft</h2>
        <p>Prestation où nous réalisons le développement de votre mod ou de votre plugin.<br>
            Nous pouvons également configurer votre serveur, nos équipes ont beaucoup travaillé avec ce jeu et nous sommes en mesure de réaliser toutes vos demandes concernant celui-ci.</p>
        <br>
        <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <section id="service-second-but">
        <h2>Bot Discord</h2>
        <p>Nous sommes capable de vous créer votre bot discord, autant pour automatiser ou personnaliser les moindres fonctionnalités de vos serveurs discord.
            Nous pouvons aussi le lier à des API et autres logiciels ou applications.</p>
        <br>
        <?php tyrobtn("contact.php?name=bot", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <section id="service-second-but">
        <h2>Configurations Serveur</h2>
        <p>Nous pouvons vous conseiller ou/et vous configurer vos serveurs.
            Linux est parfois compliqué à comprendre.
            Nous pouvons installer et mettre en place toutes vos demandes sur vos serveurs en fonction de vos besoins. </p>
        <br>
        <?php tyrobtn("contact.php?name=serv", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <br><br>
</main>

<?php footer(); ?> </body> </html>

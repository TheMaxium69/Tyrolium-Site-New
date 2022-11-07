<?php include "app/app.php"; $page = 2; head($page); ?>
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
            <h2 class="titleS">Site Web</h2>
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
        <div class="popups-cont">
            <div class="popups-cont__overlay"></div>
            <div class="popup">
                <div class="popup__pieces"></div>
                <div class="popup__content">
                    <div class="popup__close"></div>
                    <h3 class="popup__heading">Nos réalisations</h3>
                    <p class="popup__text" style="">
                        Voici les sites que nous avons réaliser
                        <br><br>
                        Bâtir Positif :
                        <a target="_blank" href="https://batirpositif.com">Lien</a>
                        <br><br>
                        SolidServ :
                        <a target="_blank" href="https://solidserv.fr">Lien</a>
                        <br><br>
                        Sélémusium :
                        <a target="_blank" href="https://selemusium.xyz">Lien</a>
                        <br><br>
                        TyroServ :
                        <a target="_blank" href="https://tyroserv.fr">Lien</a>
                        <br><br>
                        TyroDiscord :
                        <a target="_blank" href="https://www.tyrodiscord.xyz">Lien</a>
                        <br><br>
                        Influnias :
                        <a target="_blank" href="https://www.influnias.fr">Lien</a>
                        <br><br>
                        Useritium :
                        <a target="_blank" href="https://useritium.fr">Lien</a>
                        <br><br>
                        CLS-Habitat :
                        <a target="_blank" href="https://cls-habitat.fr">Lien</a>
                        <br><br>
                        Groupe Cloudy :
                        <a target="_blank">Soon</a>
                        <br><br>
                        Tyrolium :
                        <a target="_blank">Ici</a>
                        <br><br>
                    </p>
                </div>
            </div>
        </div>
        <br>
        <button style="font-size: 13px;" type="button" id="btn-contact" class="tyrobuttonNone popup-btn">Voir nos réalisations</button>
        <script src="javascript/popup.js"></script>
        <br>
        <br>
        <p style="text-align: center">Tout l'argent que vous reversez à Tyrolium sera investi dans les projets de l'entreprise.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
        <h2 class="titleS">Autres Prestations</h2>
    </section>


    <!-- PC -->
    <div class="home-desktop">

        <section id="service-second" class="container row">
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/Designer%20_Monochromatic.png" style="width: 100%; height: 100%">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Graphisme / Illustration</h2>
                    <p class="art">
                    Dans ce domaine très important pour vos projets, nous sommes capables de vous faire l'entièreté de votre identité visuelle.<br>
                    Nous vous accompagnerons pour créer votre logo, illustration ou même vos posts réseaux. 
                    Nous sommes dans la capacité de vous aider à choisir et réaliser votre branding, votre charte graphique et vos couleurs.
                    Cette prestation sers avant tout à vous accompagner dans les choix graphiques de votre projet.</p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=graph", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
        </section>

        <section id="service-second-but" class="container row">
            <div class="container col-5">
                <article>
                    <h2 class="art">Musicales</h2>
                    <p class="art">
                    Cette prestation peut accompagner les entreprises dans leurs identités musicales.
                    On l'oublie souvent, mais l'identité musicale est le meilleur moyen de ne pas vous faire oublier par vos clients.<br><br>
                    De plus, nous proposons également des créations musicales pour les particuliers qui voudraient créer leur albums/EP/jingles/singles/domaine de l'audiovisuel. 
                    </p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=music", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
            <div class="col-6">
                <img class="img-home" src="assets/Music_Monochromatic.png" style="width: 100%">
            </div>
        </section>
        
        <section id="service-second" class="container row">
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/User%20interface_Monochromatic.png" style="width: 96%; height: 100%">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Montage Vidéo / Animation</h2>
                    <p class="art">
                    Nos équipes peuvent vous aider dans vos projets audiovisuel.
Vous voulez impacter vos client avec une animation ou un montage vidéo ?
<br>
Vous êtes un vidéaste plein d'idées et vous voulez un monteur qui vous simplifie votre travail ?
<br>
Avec cette prestation nos équipes pourront vous accompagner dans vos projets et réaliser vos animations, vidéos promotionnelles ou vos vidéos personnelles pour votre propre projet.
                    </p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=anim", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
        </section>

        <section id="service-second-but" class="container row">
            <div class="container col-5">
                <article>
                    <h2 class="art">Minecraft</h2>
                    <p class="art">Prestation où nous réalisons le développement de votre mod ou de votre plugin.<br>
                        Nous pouvons également configurer votre serveur, nos équipes ont beaucoup travaillé avec ce jeu et nous sommes en mesure de réaliser toutes vos demandes concernant celui-ci.</p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
            <div class="col-6">
                <img class="img-home" src="assets/Mc_Monochromatic.png" style="width: 96%; height: 100%">
            </div>
        </section>

        <section id="service-second-but" class="container row">
            <div class="col-6">
                <img class="img-home" src="assets/Online%20storage_Monochromatic.png" style="width: 100%;">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Configurations Serveur</h2>
                    <p class="art">Nous pouvons vous conseiller ou/et vous configurer vos serveurs.
                        Linux est parfois compliqué à comprendre.
                        Nous pouvons installer et mettre en place toutes vos demandes sur vos serveurs en fonction de vos besoins. </p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=bot", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
        </section>

        <section id="service-second-but" class="container row">
            <div class="container col-5">
                <article>
                    <h2 class="art">Bot Discord</h2>
                    <p class="art">Nous sommes capable de vous créer votre bot discord, autant pour automatiser ou personnaliser les moindres fonctionnalités de vos serveurs discord.
                        Nous pouvons aussi le lier à des API et autres logiciels ou applications.</p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=serv", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/Social%20Media_Monochromatic.png" style="width: 96%; height: 100%">
            </div>
        </section>



    </div>

    <!-- MOBILE -->

    <div class="home-res">

    <section id="service-second">
        <h2>Graphisme</h2>
        <p>
                    Dans ce domaine très important pour vos projets, nous sommes capables de vous faire l'entièreté de votre identité visuelle.
                    Nous vous accompagnerons pour créer votre logo, illustration ou même vos posts réseaux. 
                    Nous sommes dans la capacité de vous aider à choisir et réaliser votre branding, votre charte graphique et vos couleurs.
                    Cette prestation sers avant tout à vous accompagner dans les choix graphiques à votre projet.</p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Designer%20_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
        <?php tyrobtn("contact.php?name=graph", "contact", "Contactez-nous pour cette prestation");?>
                        
    </section>

    <section id="service-second-but">
        <h2>Musicales</h2>
        <p>
        Cette prestation peut accompagner les entreprises dans leurs identités musicales.
        On l'oublie souvent, mais l'identité musicale est le meilleur moyen de ne pas vous faire oublier par vos clients.<br><br>
        De plus, nous proposons également des créations musicales pour les particuliers qui voudraient créer leur albums/EP/jingles/singles/domaine de l'audiovisuel. 
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Music_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
        <?php tyrobtn("contact.php?name=music", "contact", "Contactez-nous pour cette prestation");?>
    </section>
        
    <section id="service-second-but">
        <h2>Montage Vidéo / Animation</h2>
        <p>
        Nos équipes peuvent vous aider dans vos projets audiovisuel.
Vous voulez impacter vos client avec une animation ou un montage vidéo ?
<br>
Vous êtes un vidéaste plein d'idées et vous voulez un monteur qui vous simplifie votre travail ?
<br>
Avec cette prestation nos équipes pourront vous accompagner dans vos projets et réaliser vos animations, vidéos promotionnelles ou vos vidéos personnelles pour votre propre projet.
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/User%20interface_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
        <?php tyrobtn("contact.php?name=anim", "contact", "Contactez-nous pour cette prestation");?>
    </section>

    <section id="service-second-but">
        <h2>Minecraft</h2>
        <p>Prestation où nous réalisons le développement de votre mod ou de votre plugin.<br>
            Nous pouvons également configurer votre serveur, nos équipes ont beaucoup travaillé avec ce jeu et nous sommes en mesure de réaliser toutes vos demandes concernant celui-ci.</p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Mc_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
        <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <section id="service-second-but">
        <h2>Configurations Serveur</h2>
        <p>Nous pouvons vous conseiller ou/et vous configurer vos serveurs.
            Linux est parfois compliqué à comprendre.
            Nous pouvons installer et mettre en place toutes vos demandes sur vos serveurs en fonction de vos besoins. </p>
        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Online%20storage_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
        <?php tyrobtn("contact.php?name=serv", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <section id="service-second-but">
        <h2>Bot Discord</h2>
        <p>Nous sommes capable de vous créer votre bot discord, autant pour automatiser ou personnaliser les moindres fonctionnalités de vos serveurs discord.
            Nous pouvons aussi le lier à des API et autres logiciels ou applications.</p>
        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Social%20Media_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
        <?php tyrobtn("contact.php?name=bot", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    

    </div>
    <br><br>
</main>

<?php footer(); ?> </body> </html>

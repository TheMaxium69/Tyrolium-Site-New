<?php include "app/app.php"; $page = 1; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<main>
    <section id="particule">
        <div id="particule">
            <div id="head">
                <h1>Tyrolium</h1>
                <a href="#btn-up"><p>
                    <?= $lang[$page]["head"] ?>
                </p></a>
            </div>
            <?php if (empty($_COOKIE["color"])){ $colorCookie = "dark"; }else{ $colorCookie = $_COOKIE["color"]; }
            particule($colorCookie) ?>
        </div>
    </section>

    <div id="btn-up"></div>

    <!-- PC -->
    <div class="home-desktop">

    <section id="home-tyro" class="container row">
        <div class="col-6" style="text-align: end">
            <img class="img-home" src="assets/Tyrolium_home.png" style="width: 96%; height: 100%">
        </div>
        <div class="container col-5">
            <article id="art-home">
                <h2 class="art">A propos de Tyrolium</h2>
                <h3 class="art">Tyrolium est une entreprise multisectorielle qui travaille sur plusieurs projets, principalement sur du développement Web mais aussi notamment du développement de jeux vidéos ou d'applications, de la musique, ou de l'audiovisuel.</h3>
                <br>
                <h3 class="art">Elle propose principalement des prestations de services de création de site Web et d'applications pour les particuliers et les professionnels.</h3>
                <br>
                <h3 class="art">Les profits générés par ces prestations seront directement investies dans les projets de l'entreprise.</h3>
            </article>
        </div>
    </section>

    <hr style="background: rgb(161, 161, 161); margin-top: 80px; margin-bottom: 120px" >

    <section id="home-service" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Nos Prestations</h2>
                <p class="art">Tyrolium vous propose des prestations de services, notamment dans le développement de sites Web, d'applications, l'hébergement de serveurs, le développement minecraft et des bots (discord ou autre) pour les particuliers et les professionnels. Les fonds générés par ces prestations seront investis dans les projets de l'entreprise.</p>
                <div style="text-align: center">
                    <?php tyrobtn("service.php", "service", "Liste de nos Prestations");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img class="img-home" src="assets/Team_work_Monochromatic.png">
        </div>
    </section>

    <section id="home-project" class="container row">
        <div class="col-6">
            <img class="img-home" src="assets/Startup_Monochromatic.png">
        </div>
        <div class="container col-4">
            <article>
                <h2 class="art">Nos Projets</h2>
                <p class="art">De nos jours, nous sommes beaucoup à rêver de créer nos propres projets. Tyrolium a réussi le pari de réaliser les rêves de nos employés passionnés.
                    Nous sommes fiers de ce que nous accomplissons tous les jours.
                    Nous vous proposons des projets de grande ampleur toujours avec la passion de toutes nos équipes.
                    Tyrolium veut vous proposer des projets bien realisés, de quoi vous divertir ou vous simplifier la vie. </p>
                <div style="text-align: center">
                    <?php tyrobtn("project.php", "project", "Tout nos Projets");?>
                </div>
            </article>
        </div>
    </section>

    <section id="home-collaboration" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Nos Collaborations</h2>
                <p class="art">Tyrolium est une entreprise qui est formée de plusieurs équipes, elle sont dirigés principalement dans les projets de l'entreprise ainsi que les prestations proposées.
                    Ces équipes sont formées de personnes motivées, dynamiques et investies dans les projets et dans l'entreprise.

                    Nous recrutons tout type de profil, les seuls pré-requis sont d'être intéressé et motivé par les projets qui vous attire. </p>
                <div style="text-align: center">
                    <?php tyrobtn("collaboration.php", "collaboration", "Nos Collaborations");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img class="img-home" src="assets/Brainstorming_session_Monochromatic.png">
        </div>
    </section>

        <?php if($env_isAccount == true) { ?>
            <!-- PC - ACCOUNT -->

    <section id="home-account" style="padding-bottom: 25px;">
        <div class="container row">
            <div class="col-6">
                <img class="img-home" src="assets/Information_flow_Monochromatic.png" style="margin-top: 12px;">
            </div>
            <div class="container col-4">
                <article>
                    <h2 class="art">Les Compte Useritium</h2>
                    <p class="art" style='    padding-bottom: 10px;
    margin-top: -21px;'>Les comptes Useritium sont proposés par Tyrolium, afin de vous proposer une adresse mail personnelle.

Ces comptes vous offrent un cloud, de plus, ils permettent egalement de pouvoir gérer vos jeux vidéos, vos serveurs.
                        
Ils vous permettent également de connaître l'avancée de vos demandes de prestations.

Ces comptes sont aussi une garantie de sécurité de vos données, nous nous engageons à ne jamais partager ou divulguer quelconques informations vous concernant.</p>
                    <div style="text-align: center">
                        <?php tyrobtn("account.php", "account", "Plus d'info");?>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="home-story" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Notre Histoire</h2>
                <p class="art">Voilà depuis 2017 que Tyrolium existe et fait mûrir des projets et les gens qui ont travaillés et travaillent encore dessus.
                    Pendant ces 5 années, une évolution s'est faite sentir et nous allons détailler cette évolution dans l'ordre chronologique et vous raconter les points clés de celle-ci.

                    N'oubliez pas cependant que l'évolution n'est pas la fin, elle n'est que le début de la poussée qui nous emmènera au sommet, tant que l'on peux faire mieux ça ne sera jamais terminé.</p>
                <div style="text-align: center">
                    <?php tyrobtn("story.php", "story", "Voir l'Histoire de Tyrolium");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img class="img-home" src="assets/Timeline_Monochromatic.png">
        </div>
    </section>

    <section id="home-french" class="container row">
        <div class="col-6">
            <img class="img-home" src="assets/Paris_Monochromatic.png">
        </div>
        <div class="container col-4">
            <article>
                <h2 class="art">Indépendant et Français</h2>
                <p class="art">Le but de Tyrolium est d'exploiter au mieux le potentiel de ses employés pour créer des projets toujours plus ambitieux.
                    Les fonds générés par nos prestations sont injectés dans l'entreprise pour financer des projets.<!--Nous nous engagons à être le plus proche et efficace possible de nos clients et des gens qui nous suivent et nous permettent d'exister.-->
                </p><p class="art">
                    L'objectif de Tyrolium est de concurrencer le monde et les géants de notre domaine en restant français.
                </p><p class="art">
                    Fait en France, par des français.</p></article>
        </div>
    </section>

        <?php } else { ?>

    <!-- PC - NO ACCOUNT -->

        <section id="home-account">
            <div class="container row" style="padding-bottom: 30px">
                <div class="col-6">
                    <img class="img-home" src="assets/Timeline_Monochromatic.png">
                </div>
                <div class="container col-4">
                    <article>
                        <h2 class="art">Notre Histoire</h2>
                        <p class="art">Voilà depuis 2017 que Tyrolium existe et fait mûrir des projets et les gens qui ont travaillé et travaillent encore dessus.
                            Pendant ces 5 années, une évolution s'est fait sentir et nous allons détailler cette évolution dans l'ordre chronologique et vous raconter les points clés de celle-ci.

                            N'oubliez pas cependant que l'évolution n'est pas la fin, elle n'est que le début de la poussée qui nous emmènera au sommet, tant que l'on peux faire mieux ça ne sera jamais terminé.</p>
                        <div style="text-align: center">
                            <?php tyrobtn("story.php", "story", "Voir l'Histoire de Tyrolium");?>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="home-french" class="container row">
            <div class="container col-4">
                <article>
                    <h2 class="art">Indépendant et Français</h2>
                    <p class="art">Le but de Tyrolium est d'exploiter au mieux le potentiel de ses employés pour créer des projets toujours plus ambitieux.
                        Les fonds générés par nos prestations sont injectés dans l'entreprise pour financer des projets.
                    </p><p class="art">
                        L'objectif de Tyrolium est de concurrencer le monde et les géants de notre domaine en restant français.
                    </p><p class="art">
                        Fait en France, par des français.</p>

                </article>
            </div>
            <div class="col-6">
                <img class="img-home" src="assets/Paris_Monochromatic.png">
            </div>
        </section>
    <?php } ?>
    </div>

    <!-- MOBILE -->

    <div class="home-res">

        <section id="home-tyro">
            <div class="container col-4">
                <article>
                    <h2 class="art-res">A propos de Tyrolium</h2>
                    <p class="art-res">Tyrolium est une entreprise multisectorielle qui travaille sur plusieurs projets, principalement sur du développement Web mais aussi notamment du développement de jeux vidéos ou d'applications, de la musique, ou de l'audiovisuel.</p>
                    <br>
                    <p class="art-res">Elle propose principalement des prestations de services de création de site Web et d'applications pour les particuliers et les professionnels.</p>
                    <br>
                    <p class="art-res">Les profits générés par ces prestations seront directement investies dans les projets de l'entreprise.</p>
                    <div>
                        <div class="" style="width: 60%; margin-left: 20%">
                            <img src="assets/Tyrolium_home.png" width="100%" height="100%">
                        </div>
                    </div>
                </article>
            </div>
        </section>


        <hr style="background: rgb(161, 161, 161); margin-top: 40px; margin-bottom: 40px">


                <section id="home-service">
                    <div class="container col-4">
                        <article>
                            <h2 class="art-res">Nos Prestations</h2>
                            <p class="art-res">Tyrolium vous propose des prestations de services, notamment dans le développement de sites Web, d'applications, l'hébergement de serveurs, le développement minecraft et des bots (discord ou autre) pour les particuliers et les professionnels. Les fonds générés par ces prestations seront investis dans les projets de l'entreprise. </p>
                            <div>
                                <div class="" style="width: 60%; margin-left: 20%">
                                    <img src="assets/Team_work_Monochromatic.png" width="100%" height="100%">
                                </div>
                                <div class="" style="text-align: center; margin-top: 15px" >
                                    <?php tyrobtn("service.php", "service", "Liste de nos Prestations");?>
                                    <style>
                                        .tyrobutton{
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>

                <section id="home-project">
                    <div class="container col-4">
                        <article>
                            <h2 class="art-res">Nos Projets</h2>
                            <p class="art-res">De nos jours, nous sommes beaucoup à rêver de créer nos propres projets. Tyrolium a réussi le pari de réaliser les rêves de nos employés passionnés.
                                Nous sommes fiers de ce que nous accomplissons tous les jours.
                                Nous vous proposons des projets de grande ampleur toujours avec la passion de toutes nos équipes.
                                Tyrolium veut vous proposer des projets bien realisés, de quoi vous divertir ou vous simplifier la vie.</p>
                            <div>
                                <div class="" style="width: 60%; margin-left: 20%">
                                    <img src="assets/Startup_Monochromatic.png" width="100%" height="100%">
                                </div>
                                <div class="" style="text-align: center; margin-top: 15px" >
                                    <?php tyrobtn("project.php", "project", "Tout nos Projets");?>
                                    <style>
                                        .tyrobutton{
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>


                <section id="home-collaboration">
                    <div class="container col-4">
                        <article>
                            <h2 class="art-res">Nos Collaborations</h2>
                            <p class="art-res">Tyrolium est une entreprise qui est formée de plusieurs équipes, elle sont dirigés principalement dans les projets de l'entreprise ainsi que les prestations proposées.
                                Ces équipes sont formées de personnes motivées, dynamiques et investies dans les projets et dans l'entreprise.

                                Nous recrutons tout type de profil, les seuls pré-requis sont d'être intéressé et motivé par les projets qui vous attire </p>
                            <div>
                                <div class="" style="width: 60%; margin-left: 20%">
                                    <img src="assets/Brainstorming_session_Monochromatic.png" width="100%" height="100%">
                                </div>
                                <div class="" style="text-align: center; margin-top: 15px" >
                                    <?php tyrobtn("collaboration.php", "collaboration", "Nos Collaborations");?>
                                    <style>
                                        .tyrobutton{
                                            width: 100%;
                                        }
                                    </style>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>


        <?php if($env_isAccount == true) { ?>
            <!-- MOBILE - ACCOUNT -->

            <section id="home-account">
                <div class="container col-4">
                    <article>
                        <h2 class="art-res">Account</h2>
                        <p class="art-res">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Information_flow_Monochromatic.png" width="100%" height="100%">
                            </div>
                            <div class="" style="text-align: center; margin-top: 15px" >
                                <?php tyrobtn("account.php", "account", "Plus d'info");?>
                                <style>
                                    .tyrobutton{
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

        <?php } ?>

            <section id="home-story">
                <div class="container col-4">
                    <article>
                        <h2 class="art-res">Notre Histoire</h2>
                        <p class="art-res">Voilà depuis 2017 que Tyrolium existe et fait mûrir des projets et les gens qui ont travaillé et travaillent encore dessus.
                            Pendant ces 5 années, une évolution s'est fait sentir et nous allons détailler cette évolution dans l'ordre chronologique et vous raconter les points clés de celle-ci.

                            N'oubliez pas cependant que l'évolution n'est pas la fin, elle n'est que le début de la poussée qui nous emmènera au sommet, tant que l'on peux faire mieux ça ne sera jamais terminé. </p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Timeline_Monochromatic.png" width="100%" height="100%">
                            </div>
                            <div class="" style="text-align: center; margin-top: 15px" >
                                <?php tyrobtn("story.php", "story", "Voir l'Histoire de Tyrolium");?>
                                <style>
                                    .tyrobutton{
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section id="home-french">
                <div class="container col-4">
                    <article>
                        <h2 class="art-res">Indépendant et Français</h2>
                        <p class="art-res">Le but de Tyrolium est d'exploiter au mieux le potentiel de ses employés pour créer des projets toujours plus ambitieux.
                            Les fonds générés par nos prestations sont injectés dans l'entreprise pour financer des projets. </p>
                        <p class="art-res">
                            L'objectif de Tyrolium est de concurrencer le monde et les géants de notre domaine en restant français.
                        </p><p class="art-res">
                            Fait en France, par des français.</p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Paris_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    </article>
                </div>
            </section>

    </div>
</main>

<?php footer(); ?> </body> </html>

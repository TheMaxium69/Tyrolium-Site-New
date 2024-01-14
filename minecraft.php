<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>">
<?php if (!empty($_GET['navbar']) && $_GET['navbar'] == "off") { ?> <style> body{ padding-top: 0px!important;}</style><?php } else { ?><header> <?php navbar($page); ?> </header><?php } ?>

<?php loader() ?>

<div class="heading-projet-img" id="mc-heading"></div>

<main id="service">
    <style>

        main {

            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath fill-rule='evenodd' d='M0 0h40v40H0V0zm40 40h40v40H40V40zm0-40h2l-2 2V0zm0 4l4-4h2l-6 6V4zm0 4l8-8h2L40 10V8zm0 4L52 0h2L40 14v-2zm0 4L56 0h2L40 18v-2zm0 4L60 0h2L40 22v-2zm0 4L64 0h2L40 26v-2zm0 4L68 0h2L40 30v-2zm0 4L72 0h2L40 34v-2zm0 4L76 0h2L40 38v-2zm0 4L80 0v2L42 40h-2zm4 0L80 4v2L46 40h-2zm4 0L80 8v2L50 40h-2zm4 0l28-28v2L54 40h-2zm4 0l24-24v2L58 40h-2zm4 0l20-20v2L62 40h-2zm4 0l16-16v2L66 40h-2zm4 0l12-12v2L70 40h-2zm4 0l8-8v2l-6 6h-2zm4 0l4-4v2l-2 2h-2z'/%3E%3C/g%3E%3C/svg%3E");
        }

        body.light main{
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='80' viewBox='0 0 80 80'%3E%3Cg fill='%23000000' fill-opacity='0.03'%3E%3Cpath fill-rule='evenodd' d='M0 0h40v40H0V0zm40 40h40v40H40V40zm0-40h2l-2 2V0zm0 4l4-4h2l-6 6V4zm0 4l8-8h2L40 10V8zm0 4L52 0h2L40 14v-2zm0 4L56 0h2L40 18v-2zm0 4L60 0h2L40 22v-2zm0 4L64 0h2L40 26v-2zm0 4L68 0h2L40 30v-2zm0 4L72 0h2L40 34v-2zm0 4L76 0h2L40 38v-2zm0 4L80 0v2L42 40h-2zm4 0L80 4v2L46 40h-2zm4 0L80 8v2L50 40h-2zm4 0l28-28v2L54 40h-2zm4 0l24-24v2L58 40h-2zm4 0l20-20v2L62 40h-2zm4 0l16-16v2L66 40h-2zm4 0l12-12v2L70 40h-2zm4 0l8-8v2l-6 6h-2zm4 0l4-4v2l-2 2h-2z'/%3E%3C/g%3E%3C/svg%3E");
        }


    </style>

    <section id="service-start" class="row container">
        <div class="col-9">
            <h2 class="titleP"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Minecraft</h2>
            <br id="991none">
            <p class="container">Voici tout les travaux que nous réalisons avec Minecraft<br> et quelque chiffre sur nos travaux.</p>
            <br>
        </div>
        <div class="col-3">
            <img src="assets/Mc_Monochromatic.png" style="width: 125px;margin-left: -185px;">
            <br>
        </div>
    </section>
    <section id="MyRéalisation" class="container">

        <div id="statMC" class="row container">


            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1 class="bold">8M</h1>
                <h3>Téléchargement sur tout moddes et texture pack</h3>

            </div>

            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>110K</h1>
                <h3>Joueur unique sur tous nos serveur et évent</h3>

            </div>
            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>+90</h1>
                <h3>Projet créé et géré par Tyrolium</h3>


            </div>
            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>2017</h1>
                <h3>7 ans d'expertise sur ce jeu</h3>

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
    <hr style="background: rgb(161, 161, 161); margin: 0px 20% ">

    <br> <br> <br>
    <div class="home-desktop">

        <style>
            #service-second{
                border: 2px solid transparent;
                background-color: #4256a40d;
                backdrop-filter: blur(9px);
                border-radius: 59px;

            }

            .eventmc{
                width: 90%;
                max-width: 1408px!important;
                padding: 20px 60px 41px!important;
            }

            @media (max-width: 1300px) {

                .eventmc{
                    width: 100%;
                }
            }

            #service-second-but{
                border: 2px solid transparent;
                background-color: #4256a40d;
                backdrop-filter: blur(9px);
                border-radius: 59px;
                padding: 0px 60px 0;
                margin-top: 30px;

            }
        </style>

         <section id="service-second" class="container row eventmc">
            <div class="col-6" style="text-align: end;display: flex;">
                <img class="img-home" src="assets/analytics-process-monochromatic.png" style="width: 100%; margin: auto">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Oraganisaiton d'évenements</h2>
                    <p class="art">
                        Mettez en lumière votre marque en l'incorporant dans une expérience immersive et engageante dans le monde de Minecraft.<br>

                        Nous sommes spécialisés dans la création de campagnes publicitaires innovantes et percutantes au sein du jeu Minecraft, un jeu "bac à sable" populaire. En tant que créateur de serveur Minecraft depuis 2017, nous utilisons ce jeu comme une plateforme de création sans limites pour transformer vos idées en expériences virtuelles captivantes.<br>
                    </p>
                    <div style="text-align: center">
                        <small>Contact : <br>
                            officiel@tyrolium.fr<br>
                            +33 6 11 11 26 69</small><br><br>
                        <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
        </section>


        <section id="service-second-but" class="container row service-ecart">
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i> Dévéloppement de Moddes & Plugin </h2>
                    <p class="art">Nous offrons un service dédié au développement de votre mod ou plugin Minecraft.<br> Avec l'expertise pour créer des mods utilisant Forge, Fabric ou NeoForged, ainsi que des plugins pour Bukkit, Spigot ou Sponge, nous sommes équipés pour concrétiser vos idées les plus audacieuses, que ce soit pour des projets personnels ou commerciaux.</p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
            <div class="col-6">
                <img class="img-home" src="assets/Coding _Monochromatic.png" style="width: 96%; height: 100%">
            </div>
        </section>

        <section id="service-second" class="container row">
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/Designer%20_Monochromatic.png" style="width: 100%; height: 100%">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Création de Texture</h2>
                    <p class="art">
                        Service de création sur mesure pour vos packs de textures Minecraft. Nous sommes spécialisés dans le développement de packs de textures uniques pour Minecraft, adaptés à vos besoins personnels et commerciaux. nous donnons vie à vos visions les plus créatives en transformant l'esthétique de votre jeu.</p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
        </section>


        <section id="service-second-but" class="container row service-ecart">
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i> Notre Serveur</h2>
                    <p class="art">Tyrolium possède un projet appéler TyroServ, il s'agit d'un serveur PVP/Faction Moddé de renom qui à fait son succès en 2020, il s'agit d'un des plus gros projet de toute l'entreprise ayant atteint le nombre de 80K joueur unique.</p>
                    <div style="text-align: center">
                        <?php tyrobtn("https://tyroserv.fr", "contact", "Site de TyroServ");?>
                    </div>
                </article>
            </div>
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/tyroserv_Mono.png" style="width: 96%; height: 100%">
            </div>
        </section>

    </div>


    <!-- MOBILE -->

    <div class="home-res service-res">

        <section id="service-second-but">
            <h2><i class="fas fa-caret-right"></i> Oraganisaiton d'évenements</h2><br>
            <p>Mettez en lumière votre marque en l'incorporant dans une expérience immersive et engageante dans le monde de Minecraft.

                Nous sommes spécialisés dans la création de campagnes publicitaires innovantes et percutantes au sein du jeu Minecraft, un jeu "bac à sable" populaire. En tant que créateur de serveur Minecraft depuis 2017, nous utilisons ce jeu comme une plateforme de création sans limites pour transformer vos idées en expériences virtuelles captivantes.<br>
            </p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/analytics-process-monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <p style="text-align: center">
            <small >Contact : <br>
                officiel@tyrolium.fr<br>
                +33 6 11 11 26 69</small></p>
            <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>

            <br>
            <br>
        </section>


        <br>
        <br>

        <section id="service-second-but">
            <h2><i class="fas fa-caret-right"></i> Dévéloppement de Moddes & Plugin</h2><br>
            <p>Nous offrons un service dédié au développement de votre mod ou plugin Minecraft. Avec l'expertise pour créer des mods utilisant Forge, Fabric ou NeoForged, ainsi que des plugins pour Bukkit, Spigot ou Sponge, nous sommes équipés pour concrétiser vos idées les plus audacieuses, que ce soit pour des projets personnels ou commerciaux.</p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/Coding _Monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>

            <br>
            <br>
        </section>

        <br>
        <br>

        <section id="service-second-but">
            <h2><i class="fas fa-caret-right"></i> Création de Texture</h2><br>
            <p> Service de création sur mesure pour vos packs de textures Minecraft. Nous sommes spécialisés dans le développement de packs de textures uniques pour Minecraft, adaptés à vos besoins personnels et commerciaux. nous donnons vie à vos visions les plus créatives en transformant l'esthétique de votre jeu.
            </p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/Designer%20_Monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>

            <br>
            <br>
        </section>

        <br>
        <br>

        <section id="service-second-but">
            <h2><i class="fas fa-caret-right"></i> Notre Serveur</h2><br>
            <p>
                Tyrolium possède un projet appéler TyroServ, il s'agit d'un serveur PVP/Faction Moddé de renom qui à fait son succès en 2020, il s'agit d'un des plus gros projet de toute l'entreprise ayant atteint le nombre de 80K joueur unique.
            </p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/tyroserv_Mono.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <?php tyrobtn("https://tyroserv.fr", "contact", "Site de TyroServ");?>

            <br>
            <br>
        </section>



    </div>

    <br><br>

</main>

<?php footer(); ?> </body> </html>

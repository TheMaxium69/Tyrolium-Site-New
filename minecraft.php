<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>">
<?php if (!empty($_GET['navbar']) && $_GET['navbar'] == "off") { ?> <style> body{ padding-top: 0px!important;}</style><?php } else { ?><header> <?php navbar($page); ?> </header><?php } ?>

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

                <h1 class="bold">2M</h1>
                <h3>De téléchargement sur tout moddes et texture pack</h3>

            </div>

            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>70K</h1>
                <h3>Joueur unique sur tout nos serveur et évent</h3>

            </div>
            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>+90</h1>
                <h3>Projet créer et gérer par Tyrolium</h3>


            </div>
            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>2017</h1>
                <h3>7 ans d'expertise sur ce jeux</h3>

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

            #service-second-but{
                border: 2px solid transparent;
                background-color: #4256a40d;
                backdrop-filter: blur(9px);
                border-radius: 59px;
                padding: 0px 60px 0;
                margin-top: 30px;

            }
        </style>

         <section id="service-second" class="container row">
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/Designer%20_Monochromatic.png" style="width: 100%; height: 100%">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Oraganisaiton d'évenements</h2>
                    <p class="art">
                    Dans ce domaine très important pour vos projets, nous sommes capables de vous faire l'entièreté de votre identité visuelle.<br>
                    Nous vous accompagnerons pour créer votre logo, illustration ou même vos posts réseaux.
                    Nous sommes dans la capacité de vous aider à choisir et réaliser votre branding, votre charte graphique et vos couleurs.
                    Cette prestation sers avant tout à vous accompagner dans les choix graphiques de votre projet.</p>
                    <div style="text-align: center">
                        <?php //tyrobtn("contact.php?name=graph", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
        </section>


        <section id="service-second-but" class="container row service-ecart">
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i> Dévéloppement de Moddes </h2>
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

        <section id="service-second" class="container row">
            <div class="col-6" style="text-align: end">
                <img class="img-home" src="assets/Designer%20_Monochromatic.png" style="width: 100%; height: 100%">
            </div>
            <div class="container col-5">
                <article id="art-home">
                    <h2 class="art">Création d'assets</h2>
                    <p class="art">
                        Dans ce domaine très important pour vos projets, nous sommes capables de vous faire l'entièreté de votre identité visuelle.<br>
                        Nous vous accompagnerons pour créer votre logo, illustration ou même vos posts réseaux.
                        Nous sommes dans la capacité de vous aider à choisir et réaliser votre branding, votre charte graphique et vos couleurs.
                        Cette prestation sers avant tout à vous accompagner dans les choix graphiques de votre projet.</p>
                    <div style="text-align: center">
                        <?php //tyrobtn("contact.php?name=graph", "contact", "Contactez-nous pour cette prestation");?>
                    </div>
                </article>
            </div>
        </section>


        <section id="service-second-but" class="container row service-ecart">
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i> Notre Serveur</h2>
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

    <br><br>

</main>

<?php footer(); ?> </body> </html>

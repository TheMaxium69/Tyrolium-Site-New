<?php include "app/app.php"; $page = 1; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<main>
    <section id="particule">
        <div id="particule">
            <div id="head" style="margin-top: unset; text-align: center">
                <img id="head-img" src="https://tyrolium.fr/Contenu/Image/Tyrolium Site.png"> 
            </div>
            <div id="head">
                <h1>Tyrolium</h1><script src="javascript/textanime.js"></script>
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

    <!-- A PROPOS  -->
    <section id="home-tyro" class="container row">
        <div class="col-6" style="text-align: end">
            <img class="img-home" src="assets/COO_Monochromatic.png" style="width: 96%; height: 100%">
        </div>
        <div class="container col-5">
            <article id="art-home">
                <h2 class="art"><i class="fas fa-caret-right"></i> <?= $lang[$page]["about"]["title"] ?></h2>
                <h3 class="art"><?= $lang[$page]["about"]["txt"] ?></h3>
            </article>
        </div>
    </section>

    <hr style="background: rgb(161, 161, 161); margin-top: 80px; margin-bottom: 120px" >

    <!-- PROJET -->
    <section id="home-service" class="container row">
        <div class="container col-5">
            <article>
                <h2 class="art"><i class="fas fa-caret-right"></i> <?= $lang[$page]["project"]["title"] ?></h2>
                <p class="art"><?= $lang[$page]["project"]["txt"] ?></p>
                <div style="text-align: center">
                    <?php tyrobtn("./project", "project", $lang[$page]["project"]["btn"]);?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <a href="javascript:redirect(2);">
                <img class="img-home" src="assets/Startup_Monochromatic.png">
            </a>
        </div>
    </section>

    <!-- SERVICE -->
    <section id="home-project" class="container row">
        <div class="col-6">
            <a href="javascript:redirect(3);">
                <img class="img-home" src="assets/Team_work_Monochromatic.png">
            </a>
        </div>
        <div class="container col-5">
            <article>
                <h2 class="art"><i class="fas fa-caret-right"></i> <?= $lang[$page]["service"]["title"] ?></h2>
                <p class="art"><?= $lang[$page]["service"]["txt"] ?></p>
                <div style="text-align: center">
                    <?php tyrobtn("./website.php", "website-service", $lang[$page]["service"]["btn1"]);?>
                    <?php tyrobtn("./server.php", "server-service", $lang[$page]["service"]["btn2"]);?>
                    <?php tyrobtn("./minecraft.php", "minecraft-service", $lang[$page]["service"]["btn3"]);?>
                    <style>
                        #btn-website-service{
                            width: 40%;
                            margin-right: 10px;
                        }
                        #btn-server-service{
                            width: 40%;
                        }
                        #btn-minecraft-service{
                            margin-top: 10px;
                            width: 40%;
                        }


                    </style>
                </div>
            </article>
        </div>
    </section>

    <section id="home-collaboration" class="container row">
        <div class="container col-5">
            <article>
                <h2 class="art"><i class="fas fa-caret-right"></i> <?= $lang[$page]["collab"]["title"] ?></h2>
                <p class="art"><?= $lang[$page]["collab"]["txt"] ?></p>
                <div style="text-align: center">
                    <?php tyrobtn("./collaboration.php", "collaboration", $lang[$page]["collab"]["btn"]);?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <a href="javascript:redirect(4);">
                <img class="img-home" src="assets/Brainstorming_session_Monochromatic.png">             
            </a>    
        </div>
    </section>

        <?php if($env_isAccount == true) { ?>
            <!-- PC - ACCOUNT -->

    <section id="home-account"  style="border-radius: 20px">
        <div class="container row">
            <div class="col-6">        
                <a href="javascript:redirect(6);">
                    <img class="img-home" src="assets/Information_flow_Monochromatic.png" style="margin-top: 12px;">
                </a>
            </div>
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i> <?= $lang[$page]["account"]["title"] ?></h2>
                    <p class="art" style='    padding-bottom: 10px;
    margin-top: -21px;'><?= $lang[$page]["account"]["txt"] ?></p>
                    <div style="text-align: center">
                        <?php tyrobtn("./account.php", "account", $lang[$page]["account"]["btn"]);?>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="home-story" class="container row">
        <div class="container col-5">
            <article>
                <h2 class="art"><i class="fas fa-caret-right"></i> <?= $lang[$page]["story"]["title"] ?></h2>
                <p class="art"><?= $lang[$page]["story"]["txt"] ?></p>
                <div style="text-align: center">
                    <?php tyrobtn("./story.php", "story", $lang[$page]["story"]["btn"]);?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <a href="javascript:redirect(5);">
                <img class="img-home" src="assets/Timeline_Monochromatic.png">
            </a>
        </div>
    </section>

    <section id="home-french" class="container row">
        <div class="col-6">
            <img class="img-home" src="assets/Paris_Monochromatic.png">
        </div>
        <div class="container col-5">
            <article>
                <h2 class="art"> <i class="fas fa-caret-right"></i> <?= $lang[$page]["french"]["title"] ?></h2>
                <p class="art"><?= $lang[$page]["french"]["txt"] ?></p></article>
        </div>
    </section>

        <?php } else { ?>

    <!-- PC - NO ACCOUNT -->

        <section id="home-account">
            <div class="container row" style="padding-bottom: 30px">
                <div class="col-6">
                    <img class="img-home" src="assets/Timeline_Monochromatic.png">
                </div>
                <div class="container col-5">
                    <article>
                        <h2 class="art">Notre Histoire</h2>
                        <p class="art">Voilà depuis 2017 que Tyrolium existe et fait mûrir des projets et les gens qui ont travaillé et travaillent encore dessus.
                            Pendant ces <?= date("Y") - 2017; ?> années, une évolution s'est fait sentir et nous allons détailler cette évolution dans l'ordre chronologique et vous raconter les points clés de celle-ci.

                            N'oubliez pas cependant que l'évolution n'est pas la fin, elle n'est que le début de la poussée qui nous emmènera au sommet, tant que l'on peux faire mieux ça ne sera jamais terminé.</p>
                        <div style="text-align: center">
                            <?php tyrobtn("story.php", "story", "Voir l'Histoire de Tyrolium");?>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="home-french" class="container row">
            <div class="container col-5">
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
                    <h2 class="art-res"><i class="fas fa-caret-right"></i><?= $lang[$page]["about"]["title"] ?></h2>
                    <p class="art-res"><?= $lang[$page]["about"]["mobile"] ?></p>
                    <div>
                        <div class="" style="width: 60%; margin-left: 20%">
                            <img src="assets/COO_Monochromatic.png" width="100%" height="100%">
                        </div>
                    </div>
                </article>
            </div>
        </section>


        <hr style="background: rgb(161, 161, 161); margin-top: 40px; margin-bottom: 40px">

                <section id="home-project">
                    <div class="container col-4">
                        <article>
                            <h2 class="art-res"><i class="fas fa-caret-right"></i><?= $lang[$page]["project"]["title"] ?></h2>
                            <p class="art-res"><?= $lang[$page]["project"]["txt"] ?></p>
                            <div>
                                <div class="" style="width: 60%; margin-left: 20%">
                                    <img src="assets/Startup_Monochromatic.png" width="100%" height="100%">
                                </div>
                                <div class="" style="text-align: center; margin-top: 15px" >
                                    <?php tyrobtn("project", "project", $lang[$page]["project"]["btn"]);?>
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

                <section id="home-service">
                    <div class="container col-4">
                        <article>
                            <h2 class="art-res"><i class="fas fa-caret-right"></i>  <?= $lang[$page]["service"]["title"] ?></h2>
                            <p class="art-res"><?= $lang[$page]["service"]["txt"] ?> </p>
                            <div>
                                <div class="" style="width: 60%; margin-left: 20%">
                                    <img src="assets/Team_work_Monochromatic.png" width="100%" height="100%">
                                </div>
                                <div class="" style="text-align: center; margin-top: 15px" >
                                    <?php tyrobtn("./website.php", "website", $lang[$page]["service"]["btn1"]);?><br><br>
                                    <?php tyrobtn("./server.php", "server", $lang[$page]["service"]["btn2"]);?><br><br>
                                    <?php tyrobtn("./minecraft.php", "minecraft", $lang[$page]["service"]["btn3"]);?>
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
                            <h2 class="art-res"><i class="fas fa-caret-right"></i><?= $lang[$page]["collab"]["title"] ?></h2>
                            <p class="art-res"><?= $lang[$page]["collab"]["txt"] ?></p>
                            <div>
                                <div class="" style="width: 60%; margin-left: 20%">
                                    <img src="assets/Brainstorming_session_Monochromatic.png" width="100%" height="100%">
                                </div>
                                <div class="" style="text-align: center; margin-top: 15px" >
                                    <?php tyrobtn("collaboration", "collaboration", $lang[$page]["collab"]["btn"]);?>
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
                <div class="container col-4" style="padding-bottom: 38px">
                    <article>
                        <h2 class="art-res"><i class="fas fa-caret-right"></i><?= $lang[$page]["account"]["title"] ?></h2>
                        <p class="art-res"><?= $lang[$page]["account"]["txt"] ?></p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Information_flow_Monochromatic.png" width="100%" height="100%">
                            </div>
                            <div class="" style="text-align: center; margin-top: 15px" >
                                <?php tyrobtn("account", "account", $lang[$page]["account"]["btn"]);?>
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
                        <h2 class="art-res"><i class="fas fa-caret-right"></i>  <?= $lang[$page]["story"]["title"] ?></h2>
                        <p class="art-res"><?= $lang[$page]["story"]["txt"] ?></p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Timeline_Monochromatic.png" width="100%" height="100%">
                            </div>
                            <div class="" style="text-align: center; margin-top: 15px" >
                                <?php tyrobtn("story", "story", $lang[$page]["story"]["btn"]);?>
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
                        <h2 class="art-res"><i class="fas fa-caret-right"></i> <?= $lang[$page]["french"]["title"] ?></h2>
                        <p class="art-res"><?= $lang[$page]["french"]["mobile"] ?></p>
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

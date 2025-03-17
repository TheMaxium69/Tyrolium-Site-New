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
            <h2 class="titleP"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> <?= $lang[$page]['mc']['about']['title'] ?></h2>
            <br id="991none">
            <p class="container"><?= $lang[$page]['mc']['about']['txt'] ?></p>
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
                <h3><?= $lang[$page]['mc']['number'][0] ?></h3>

            </div>

            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>110K</h1>
                <h3><?= $lang[$page]['mc']['number'][1] ?></h3>

            </div>
            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>+90</h1>
                <h3><?= $lang[$page]['mc']['number'][2] ?></h3>


            </div>
            <div class="col-3" style="min-width: 200px; margin: 0 auto">

                <h1>2017</h1>
                <h3><?= $lang[$page]['mc']['number'][3] ?></h3>

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
                    <h2 class="art"><?= $lang[$page]['mc']['event']['title'] ?></h2>
                    <p class="art"><?= $lang[$page]['mc']['event']['txt'] ?></p>
                    <div style="text-align: center">
                        <small><?= $lang[$page]['mc']['event']['contact'] ?> : <br>
                            officiel@tyrolium.fr<br>
                            +33 6 11 11 26 69</small><br><br>
                        <?php tyrobtn("contact.php?name=mc", "contact", $lang[$page]['mc']['event']['btn']);?>
                    </div>
                </article>
            </div>
        </section>


        <section id="service-second-but" class="container row service-ecart">
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['mc']['dev']['title'] ?></h2>
                    <p class="art"><?= $lang[$page]['mc']['dev']['txt'] ?></p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=mc", "contact", $lang[$page]['mc']['dev']['btn']);?>
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
                    <h2 class="art"><?= $lang[$page]['mc']['texture']['title'] ?></h2>
                    <p class="art">
                        <?= $lang[$page]['mc']['texture']['txt'] ?>
                    </p>
                    <div style="text-align: center">
                        <?php tyrobtn("contact.php?name=mc", "contact", $lang[$page]['mc']['texture']['btn']);?>
                    </div>
                </article>
            </div>
        </section>


        <section id="service-second-but" class="container row service-ecart">
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['mc']['serv']['title'] ?></h2>
                    <p class="art">
                        <?= $lang[$page]['mc']['serv']['txt'] ?>
                    </p><div style="text-align: center">
                        <?php tyrobtn("https://tyroserv.fr", "contact", $lang[$page]['mc']['serv']['btn']);?>
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
            <h2><i class="fas fa-caret-right"></i> <?= $lang[$page]['mc']['event']['title'] ?></h2><br>
            <p><?= $lang[$page]['mc']['event']['txt'] ?></p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/analytics-process-monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <p style="text-align: center">
            <small><?= $lang[$page]['mc']['event']['contact'] ?> : <br>
                officiel@tyrolium.fr<br>
                +33 6 11 11 26 69</small></p>
            <?php tyrobtn("contact.php?name=mc", "contact", $lang[$page]['mc']['event']['btn']);?>

            <br>
            <br>
        </section>


        <br>
        <br>

        <section id="service-second-but">
            <h2><i class="fas fa-caret-right"></i> <?= $lang[$page]['mc']['dev']['title'] ?></h2><br>
            <p><?= $lang[$page]['mc']['dev']['txt'] ?></p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/Coding _Monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <?php tyrobtn("contact.php?name=mc", "contact", $lang[$page]['mc']['dev']['btn']);?>

            <br>
            <br>
        </section>

        <br>
        <br>

        <section id="service-second-but">
            <h2><i class="fas fa-caret-right"></i> <?= $lang[$page]['mc']['texture']['title'] ?></h2><br>
            <p> <?= $lang[$page]['mc']['texture']['txt'] ?></p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/Designer%20_Monochromatic.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <?php tyrobtn("contact.php?name=mc", "contact", $lang[$page]['mc']['texture']['btn']);?>

            <br>
            <br>
        </section>

        <br>
        <br>

        <section id="service-second-but">
            <h2><i class="fas fa-caret-right"></i> <?= $lang[$page]['mc']['serv']['title'] ?></h2><br>
            <p>
                <?= $lang[$page]['mc']['serv']['txt'] ?>
            </p>
            <div>
                <div class="" style="width: 60%; margin-left: 20%">
                    <img src="assets/tyroserv_Mono.png" width="100%" height="100%">
                </div>
            </div>
            <br>
            <?php tyrobtn("https://tyroserv.fr", "contact", $lang[$page]['mc']['serv']['btn']);?>

            <br>
            <br>
        </section>



    </div>

    <br><br>

</main>

<?php footer(); ?> </body> </html>

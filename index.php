<?php include "app/app.php"; $page = 1; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="particule">
        <div id="particule">
            <div id="head">
                <h1>Tyrolium</h1>
                <a href="#accueil"><p>
                    DÉCOUVREZ NOTRE UNIVERS
                </p></a>
            </div>
            <?php particule() ?>
        </div>
    </section>


    <div class="home-desktop">

    <section id="home-tyro" class="container row">
        <div class="col-6">
            <img src="assets/Tyrolium_home.png">
        </div>
        <div class="container col-4">
            <article id="art-home">
                <h2 class="art">TYROLIUM ENTERTAINMENT</h2>
                <h3 class="art">L'informatique au coeur de notre société.</h3>
                <br>
                <p class="art">De nos jours, nous sommes beaucoup à rêver de créer des projets en informatique. Tyrolium a réussi le pari de réaliser les rêves de nos employés passionés. Nous sommes fiers de ce que nous accomplissons tous les jours. Nous vous proposons des projets informatiques de grande ampleur toujours avec la passion de tous nos employés. Tyrolium veut vous proposer des services et des projets bien realisés, de quoi vous divertir.</p>
            </article>
        </div>
    </section>

    <hr style="background: rgb(161, 161, 161); margin-top: 80px; margin-bottom: 120px" >

    <section id="home-service" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Service</h2>
                <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                <div style="text-align: center">
                    <?php tyrobtn("service", "service", "Plus d'info");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img src="assets/Team_work_Monochromatic.png">
        </div>
    </section>

    <section id="home-project" class="container row">
        <div class="col-6">
            <img src="assets/Startup_Monochromatic.png">
        </div>
        <div class="container col-4">
            <article>
                <h2 class="art">Project</h2>
                <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                <div style="text-align: center">
                    <?php tyrobtn("project", "project", "Plus d'info");?>
                </div>
            </article>
        </div>
    </section>

    <section id="home-collaboration" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">collaboration</h2>
                <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                <div style="text-align: center">
                    <?php tyrobtn("collaboration", "collaboration", "Plus d'info");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img src="assets/Brainstorming_session_Monochromatic.png">
        </div>
    </section>

        <?php if($env_isAccount == true) { ?>

    <section id="home-account">
        <div class="container row">
            <div class="col-6">
                <img src="assets/Information_flow_Monochromatic.png">
            </div>
            <div class="container col-4">
                <article>
                    <h2 class="art">Account</h2>
                    <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                    <div style="text-align: center">
                        <?php tyrobtn("account", "account", "Plus d'info");?>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="home-story" class="container row">
        <div class="container col-4">
            <article>
                <h2 class="art">Histoire</h2>
                <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                <div style="text-align: center">
                    <?php tyrobtn("story", "story", "Plus d'info");?>
                </div>
            </article>
        </div>
        <div class="col-6">
            <img src="assets/Timeline_Monochromatic.png">
        </div>
    </section>

    <section id="home-french" class="container row">
        <div class="col-6">
            <img src="assets/Paris_Monochromatic.png">
        </div>
        <div class="container col-4">
            <article>
                <h2 class="art">France</h2>
                <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
            </article>
        </div>
    </section>

        <?php } else { ?>

        <section id="home-account">
            <div class="container row">
                <div class="col-6">
                    <img src="assets/Timeline_Monochromatic.png">
                </div>
                <div class="container col-4">
                    <article>
                        <h2 class="art">Histoire</h2>
                        <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                        <div style="text-align: center">
                            <?php tyrobtn("story", "story", "Plus d'info");?>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="home-story" class="container row">
            <div class="container col-4">
                <article>
                    <h2 class="art">France</h2>
                    <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>

                </article>
            </div>
            <div class="col-6">
                <img src="assets/Paris_Monochromatic.png">
            </div>
        </section>
    <?php } ?>

    </div>

    <div class="home-res">
        <section id="home-service" class="container">
            <div class="container col-4">
                <article>
                    <h2 class="art-res">Service</h2>
                    <p class="art-res">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>
                    <div>
                        <div class="" style="width: 60%; margin-left: 20%">
                            <img src="assets/Team_work_Monochromatic.png" width="100%" height="100%">
                        </div>
                        <div class="" style="text-align: center; margin-top: 15px" >
                            <?php tyrobtn("service", "service", "Plus d'info");?>
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
    </div>




</main>

<?php footer(); ?> </body> </html>

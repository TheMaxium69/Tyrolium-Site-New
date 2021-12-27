<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2 class="titleP">Nos Prestations</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
    </section>
    <section id="service-start">
        <h2 class="titleS">Site Web</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
    </section>
    <section class="service-page">
        <div class="background">
            <div class="container container-serv">
                <div class="panel pricing-table">

                    <div class="pricing-plan">
                        <img src="assets/paper-plane.png" alt="PaperPlane" class="pricing-img">
                        <h2 class="pricing-header">Site Personnel</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><span class="underline bold">Concretement</span> : Il s'agit d'une formule bien pour les porte-folio, les site de presentations juste textuel d'un projet</li>
                            <li class="pricing-features-item"><span class="underline bold">Techniquement</span> : il s'agit simple d'une/ou plusieur pages où l'on travaillera juste avec des languague de front-end, aucune relation avec une api ou une base de donné sera faite avec cette formule</li>
                        </ul>
                        <span class="pricing-price">30€</span>
                        <?php tyrobtn("service", "service", "NOT FREE TRIAL");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/plane.png" alt="Plane" class="pricing-img">
                        <h2 class="pricing-header">Site de Projet</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                            <li class="pricing-features-item">Techniquement :</li>
                        </ul>
                        <span class="pricing-price">75€</span>
                        <?php tyrobtn("service", "service", "NOT FREE TRIAL");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/space-ship.png" alt="SpaceShip" class="pricing-img">
                        <h2 class="pricing-header">Applications Web</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                            <li class="pricing-features-item">Techniquement :</li>
                        </ul>
                        <span class="pricing-price">500€</span>
                        <?php tyrobtn("service", "service", "NOT FREE TRIAL");?>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section id="service-start-but">
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
        <h2 class="titleS">Autre Service</h2>
    </section>
    <section id="service-second">
        <h2>Minecraft</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
        <?php tyrobtn("service", "service", "Plus d'info");?>
    </section>
    <section id="service-second-but">
        <h2>Bot Discord</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
        <?php tyrobtn("service", "service", "Plus d'info");?>
    </section>
    <section id="service-second-but">
        <h2>Configurations Serveur</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
        <?php tyrobtn("service", "service", "Plus d'info");?>
    </section>
    <section id="service-second-but">
        <h2>zahbeazbeaziuheai</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
        <?php tyrobtn("service", "service", "Plus d'info");?>
    </section>
    <br><br>
</main>

<?php footer(); ?> </body> </html>

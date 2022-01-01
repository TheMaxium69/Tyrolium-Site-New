<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

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
                        <h2 class="pricing-header">Site Personnel</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item"><span class="underline bold">Concretement</span> : Il s'agit d'une formule bien pour les porte-folio, les site de presentations juste textuel d'un projet</li>
                            <li class="pricing-features-item"><span class="underline bold">Techniquement</span> : il s'agit simple d'une/ou plusieur pages où l'on travaillera juste avec des languague de front-end, aucune relation avec une api ou une base de donné sera faite avec cette formule</li>
                        </ul>
                        <span class="pricing-price">30€</span>
                        <?php tyrobtn("contact.php?name=web&form=1", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/plane.png" alt="Plane" class="pricing-img">
                        <h2 class="pricing-header">Site de Projet</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                            <li class="pricing-features-item">Techniquement :</li>
                        </ul>
                        <span class="pricing-price">75€</span>
                        <?php tyrobtn("contact.php?name=web&form=2", "contact", "Contactez-nous pour cette formule");?>
                    </div>

                    <div class="pricing-plan">
                        <img src="assets/space-ship.png" alt="SpaceShip" class="pricing-img">
                        <h2 class="pricing-header">Applications Web</h2>
                        <ul class="pricing-features">
                            <li class="pricing-features-item">Lorem ipsum dolor sit amet</li>
                            <li class="pricing-features-item">Techniquement :</li>
                        </ul>
                        <span class="pricing-price">500€</span>
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
        <h2 class="titleS">Autre Service</h2>
    </section>
    <section id="service-second">
        <h2>Minecraft</h2>
        <p>Prestations où nous réalison le developpement de votre mod ou de votre plugin, nous pouvons aussi configurez votre serveur, notre équipe a beaucoup travail avec ce jeux, et nous somme en mesure de réalisé toute vos demande concernant ce jeux .</p>
        <br>
        <?php tyrobtn("contact.php?name=mc", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <section id="service-second-but">
        <h2>Bot Discord</h2>
        <p>Nous sommes capable de vous créer votre discord, autant pour automatiser ou personnaliser les moindre commande de vos serveur discord, mais aussi de le lier a des api, et autre logiciel ou applications .</p>
        <br>
        <?php tyrobtn("contact.php?name=bot", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <section id="service-second-but">
        <h2>Configurations Serveur</h2>
        <p>On peut vous conseillez ou vous configurez serveur, Linux est parfois compliqué a comprendre et nous pouvous installez mettre place toute vos demande sur votre serveur en fonction de votre besoin .</p>
        <br>
        <?php tyrobtn("contact.php?name=serv", "contact", "Contactez-nous pour cette prestation");?>
    </section>
    <br><br>
</main>

<?php footer(); ?> </body> </html>

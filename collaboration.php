<?php include "app/app.php"; $page = 4; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2>Notre Équipe</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla .</p>
        <br>
    </section>


    <section id="credit">
        <div class="container">
            <div class="row">

                <?php foreach ($env_perso as $perso){ ?>


                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="<?php echo $perso['icon']; ?>">
                        </div>
                        <div class="team-content">
                            <h3 class="name"><?php echo $perso['name']; ?></h3>
                            <h4 class="title"><?php echo $perso['role']; ?></h4>
                        </div>
                        <ul class="social">

                            <?php if(!empty($perso['facebook'])) { ?>
                                <li><a href="<?php echo $perso['facebook']; ?>" class="fab fa-facebook" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['twitter'])) { ?>
                                <li><a href="<?php echo $perso['twitter']; ?>" class="fab fa-twitter" aria-hidden="true"></a></li>
                            <?php } ?>


                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-google-plus" aria-hidden="true"></a></li>
                            <li><a href="https://codepen.io/collection/XdWJOQ/" class="fab fa-linkedin" aria-hidden="true"></a></li>
                        </ul>
                    </div>
                </div>

                <?php } ?>

            </div>
        </div>

    </section>

    <br>
    <hr style="background: rgb(161, 161, 161);">

    <section id="projet" class="container">
        <br>
        <h2>Nous Rejoindre</h2>
        <p>Tyrolium recrute des membres passionnés par notre travail, nous n'avons pas spécialement de critères de sélection si ce n'est la compréhension de notre travail et l'investissement au sein de celui-ci ou d'un projet.</p>
        <br>
    </section>


</main>

<?php footer(); ?> </body> </html>

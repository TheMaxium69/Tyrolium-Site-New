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
    <section id="accueil" class="container">
        <div class="container">
            <article>
                <h2>TYROLIUM ENTERTAINMENT</h2>
                <br>
                <h3>L'informatique au coeur de notre société.</h3>
                <br>
                <p>De nos jours, nous sommes beaucoup à rêver de créer des projets en informatique. Tyrolium a réussi le pari de réaliser les rêves de nos employés passionés. Nous sommes fiers de ce que nous accomplissons tous les jours. Nous vous proposons des projets informatiques de grande ampleur toujours avec la passion de tous nos employés. Tyrolium veut vous proposer des services et des projets bien realisés, de quoi vous divertir.</p>
            </article>
        </div>
    </section>
</main>

<footer> <?php footer(); ?> </footer> </body> </html>

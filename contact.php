<?php include "app/app.php"; $page = 8; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="particule">
        <div id="particule">
            <div id="head">
                <h1>Tyrolium</h1>
                <a href="#home-tyro"><p>
                        DÉCOUVREZ QUI NOUS SOMMES
                    </p></a>
            </div>
            <?php particule() ?>
        </div>
    </section>


</main>

<?php footer(); ?> </body> </html>

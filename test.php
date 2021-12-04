<?php include "app/app.php"; $page = 2; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <?php particule() ?>
</main>

<footer> <?php footer(); ?> </footer> </body> </html>

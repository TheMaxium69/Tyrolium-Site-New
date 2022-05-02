<?php include "app/app.php"; $page = 6; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php if($env_isAccount == true) { ?>
    <main>

        <a href="connect.php" class="btn btn-success">Accedez a la connexion</a>




    </main>

<?php } ?>

<?php footer(); ?> </body> </html>

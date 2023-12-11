<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2 class="titleP">Nos Prestations</h2>
        <p>Cette page contient les prestations, avec ci-dessous toutes les différentes prestations que nous vendons.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
        <br>
    </section>
    <section id="service-start" class="row container">
        <div class="col-9">
            <h2 class="titleS"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Audio Visuel</h2>
            <br id="991none">
            <p class="container">Lorem ipsu.</p>
            <br>
        </div>
        <div class="col-3">
            <img src="assets/Coding%20_Monochromatic.png" style="width: 125px;margin-left: -185px;">
            <br>
        </div>
    </section>




</main>

<?php footer(); ?> </body> </html>

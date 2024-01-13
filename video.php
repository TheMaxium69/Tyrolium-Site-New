<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<div class="heading-projet-img" id="video-heading"></div>

<main id="service">

    <section id="service-start" class="row container">
        <div class="col-9">
            <h2 class="titleP"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Montage Audio</h2>
            <br id="991none">
            <p class="container">Ci-dessous les différentes formules sont affichées,<br> nous faisons majoritairement de la création de sites web.</p>
            <br>
        </div>
        <div class="col-3">
            <img src="assets/Coding%20_Monochromatic.png" style="width: 125px;margin-left: -185px;">
            <br>
        </div>
    </section>
    <section class="service-page">

    </section>



    <br><br>

</main>

<?php footer(); ?> </body> </html>

<?php include "app/app.php"; $page = 100; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<main>
    
    
    <section class="error-container">
      <span class="four"><span class="screen-reader-text">4</span></span>
      <span class="zero"><span class="screen-reader-text">0</span></span>
      <span class="four"><span class="screen-reader-text">4</span></span>
    </section>
    
    <div style="text-align: center; 
    margin: 70px 15px;">
    
        <h1>Page d'erreur</h1>
        <?php tyrobtn("index.php", "service", "Revenir sur la page d'accueil");?>

    </div>

    <br><br><br>
    
</main>

<?php footer(); ?> </body> </html>

<?php include "app/app.php"; $page = 6; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<?php if($env_isAccount == true) { ?>
    <main class="account-main">

    	<!-- <section id="particule" style="margin-bottom: 50px;">
	        <div id="particule">
	            <div id="head" style="
                margin-top: 80px;">
	                <h1>Compte<br> Tyrolium</h1>
	                <a href="#btn-up"><p>
	                    DÉCOUVREZ LES COMPTES USERITIUM
	                </p></a>
	            </div>
	            <?php // if (empty($_COOKIE["color"])){ $colorCookie = "dark"; }else{ $colorCookie = $_COOKIE["color"]; }
	            // particule($colorCookie) ?>
	        </div>
	    </section> -->

      <section id="particule" style="margin-bottom: 50px;">
        <div id="particule">
            <div id="head" style="margin-top: -31px; text-align: center">
                <img id="head-img" src="https://tyrolium.fr/Contenu/Image/Tyrolium Site.png"> 
            </div>
            <div id="head" style="
                margin-top: 50px;
                ">
                <h1><?= $lang[$page]["head"]["title-prefix"] ?><br> <c class="change">Tyrolium</c></h1><script src="javascript/textanime-account.js"></script>
                <a href="#btn-up"><p>
                   <?= $lang[$page]["head"]["sub"] ?>
                </p></a>
            </div>
            <?php if (empty($_COOKIE["color"])){ $colorCookie = "dark"; }else{ $colorCookie = $_COOKIE["color"]; }
            particule($colorCookie) ?>
        </div>
    </section>
        
        
        <?php if($env_isUseritium == false){ ?>
            <section id="connection" class="container">
            <!--<div class="row">
                
                <a href="connect.php" class="btn btn-success">Accedez a la connexion</a>

            </div>-->
            <br>

            <div class="jumbotron">
                <h1 class="display-4 accountDisplay"> <i class="fa fa-info-circle"></i> Les comptes ne sont pas disponible</h1>
                <p >Les comptes Useritium sortiront le <strong>30 septembre 2022</strong>, vous pourrez créer votre compte ici ou sur son site.
Découvrez également des nombreuses fonctionnalités disponibles en dessous</p>
                <hr class="my-4">
                <p class="lead">Pour voir plus d'informations sur les comptes Useritium, nous vous invitons à regarder le trailer ou à aller sur le site officiel des comptes</p>
                <?php tyrobtn("https://www.youtube.com/watch?v=zJ3rbBJCYdM", "buttonAccount", "Voir le trailer");?>
                <?php tyrobtn("https://useritium.fr", "buttonAccount", "Site Officiel");?>
            </div>


            <style>
                .jumbotron{
                    background: #26272b;
                }
                body.light .jumbotron{
                    background: #e1e1e1;
                }
                #btn-buttonAccount{
                    font-size: 12px;
                }
                
                @media(max-width: 970px){
                    h1.accountDisplay{
                        font-size: 2.5rem;
                    }
                    
                    #service-second{
                        padding: 20px 30px 0;
                    }

                    #service-second-but{
                        padding: 20px 30px 0;
                    }
                }
                
                
            </style>


        <?php } else { ?>
            <section id="connection">
            <div class="cotn_principal">
                <div class="cont_centrar">

                    <div class="cont_login">
                        <div class="cont_info_log_sign_up">
                            <div class="col_md_login">
                                <div class="cont_ba_opcitiy">
                                    <h2><?= $lang[$page]["log"]['login']["title"] ?></h2>
                                    <p><?= $lang[$page]["log"]['login']["txt"] ?></p>
                                    <a target="_blank" href="https://useritium.fr/connect.php" class="btn btn_login"><?= $lang[$page]["log"]['login']["btn"] ?></a>
                                </div>
                            </div>
                            <div class="col_md_sign_up">
                                <div class="cont_ba_opcitiy">
                                    <h2><?= $lang[$page]["log"]['signup']["title"] ?></h2>
                                    <p><?= $lang[$page]["log"]['signup']["txt"] ?></p>
                                    <a target="_blank" href="https://useritium.fr/connect.php" class="btn btn_sign_up"><?= $lang[$page]["log"]['signup']["btn"] ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="cont_back_info">
                            <div class="cont_img_back_grey">
                                <img src="./assets/user2.jpg" alt="" />
                            </div>
                        </div>
                        <div class="cont_forms" >
                            <div class="cont_img_back_">
                                <img src="./assets/user1.jpg" alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="cotn_mobile">
                <?php tyrobtn("connect.php", "insciption", $lang[$page]["log"]["btn-all"]);?>
            </div>
            <br>
            <style>

  #connection {
    margin: 0px auto;
    padding: 0px;
    text-align: center;
    font-family: "Open Sans", sans-serif;
  }
  #connection a{
    color: white;
  }

  #connection a:hover{
    color: white;
  }


  .cotn_principal {
    margin-top: -115px;
    /* position: absolute; */
    width: 100%;
    display: flex;
    height: 100%;
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#cfd8dc+0,607d8b+100,b0bec5+100 */
    }
  
  .cont_centrar {
    display: flex;
    align-self: center;
    /* width: 100%; */
    margin: 0 auto;
  }
  
  .cont_login {
    position: relative;
    width: 640px;
  }
  
  .cont_back_info {
    position: relative;
    float: left;
    width: 640px;
    height: 280px;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
  }
  
  .cont_forms {
    position: absolute;
    overflow: hidden;
    top: 0px;
    left: 0px;
    width: 320px;
    height: 280px;
    background-color: #eee;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_forms_active_login {
    box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
    height: 420px;
    top: -60px;
    left: 0px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_forms_active_sign_up {
    box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
    height: 420px;
    top: -60px;
    left: 320px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_img_back_grey {
    position: absolute;
    width: 950px;
    top: -80px;
    left: -116px;
  }
  
  .cont_img_back_grey > img {
    width: 100%;
    opacity: unset;
    animation-name: animar_fondo;
    animation-duration: 20s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    filter: brightness(50%);
  }

  body.light .cont_img_back_grey > img {
    width: 100%;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    opacity: 0.2;
    animation-name: animar_fondo;
    animation-duration: 20s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
  }
  
  .cont_img_back_ {
    position: absolute;
    width: 950px;
    top: -80px;
    left: -116px;
  }
  
  .cont_img_back_ > img {
    width: 100%;
    opacity: unset;
    animation-name: animar_fondo;
    animation-duration: 20s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    filter: brightness(50%);
  }

  body.light .cont_img_back_ > img {
    width: 100%;
    opacity: 0.3;
    animation-name: animar_fondo;
    animation-duration: 20s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
    animation-direction: alternate;
  }
  
  .cont_forms_active_login > .cont_img_back_ {
    top: -20px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_forms_active_sign_up > .cont_img_back_ {
    top: -20px;
    left: -435px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_info_log_sign_up {
    position: absolute;
    width: 640px;
    height: 280px;
    top: 0px;
    z-index: 1;
  }
  
  .col_md_login {
    position: relative;
    float: left;
    width: 50%;
  }
  
  .col_md_login > h2 {
    font-weight: 400;
    margin-top: 70px;
    color: #757575;
  }
  
  .col_md_login > p {
    font-weight: 400;
    margin-top: 15px;
    width: 80%;
    color: #37474f;
  }
  
  .btn_login {
    background-color: #26c6da;
    border: none;
    padding: 10px;
    width: 200px;
    border-radius: 3px;
    box-shadow: 1px 5px 20px -5px rgba(0, 0, 0, 0.4);
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
  }
  
  .col_md_sign_up {
    position: relative;
    float: left;
    width: 50%;
  }
  
  .cont_ba_opcitiy > h2 {
    font-weight: 400;
    color: #fff;
  }
  
  .cont_ba_opcitiy > p {
    font-weight: 400;
    margin-top: 15px;
    color: #fff;
  }
  /* ----------------------------------
  background text    
  ------------------------------------
   */
  .cont_ba_opcitiy {
    position: relative;
    background-color: rgba(120, 144, 156, 0.55);
    width: 80%;
    border-radius: 3px;
    margin-top: 60px;
    padding: 15px 0px;
    margin-left: 10%;
  }
  
  .btn_sign_up {
    background-color: #ef5350;
    border: none;
    padding: 10px;
    width: 200px;
    border-radius: 3px;
    box-shadow: 1px 5px 20px -5px rgba(0, 0, 0, 0.4);
    color: #fff;
    margin-top: 10px;
    cursor: pointer;
    font-size: 16px;
  }
  .cont_forms_active_sign_up {
    z-index: 2;
  }
  
  @-webkit-keyframes animar_fondo {
    from {
      -webkit-transform: scale(1) translate(0px);
      -moz-transform: scale(1) translate(0px);
      -ms-transform: scale(1) translate(0px);
      -o-transform: scale(1) translate(0px);
      transform: scale(1) translate(0px);
    }
    to {
      -webkit-transform: scale(1.5) translate(50px);
      -moz-transform: scale(1.5) translate(50px);
      -ms-transform: scale(1.5) translate(50px);
      -o-transform: scale(1.5) translate(50px);
      transform: scale(1.5) translate(50px);
    }
  }
  @-o-keyframes identifier {
    from {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }
    to {
      -webkit-transform: scale(1.5);
      -moz-transform: scale(1.5);
      -ms-transform: scale(1.5);
      -o-transform: scale(1.5);
      transform: scale(1.5);
    }
  }
  @-moz-keyframes identifier {
    from {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }
    to {
      -webkit-transform: scale(1.5);
      -moz-transform: scale(1.5);
      -ms-transform: scale(1.5);
      -o-transform: scale(1.5);
      transform: scale(1.5);
    }
  }
  @keyframes identifier {
    from {
      -webkit-transform: scale(1);
      -moz-transform: scale(1);
      -ms-transform: scale(1);
      -o-transform: scale(1);
      transform: scale(1);
    }
    to {
      -webkit-transform: scale(1.5);
      -moz-transform: scale(1.5);
      -ms-transform: scale(1.5);
      -o-transform: scale(1.5);
      transform: scale(1.5);
    }
  }
  .cont_form_login {
    position: absolute;
    opacity: 0;
    display: none;
    width: 320px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_forms_active_login {
    z-index: 2;
  }
  
  .cont_form_sign_up {
    position: absolute;
    width: 320px;
    float: left;
    opacity: 0;
    display: none;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
  }
  
  .cont_form_sign_up > input {
    text-align: left;
    padding: 15px 5px;
    margin-left: 10px;
    margin-top: 20px;
    width: 260px;
    border: none;
    color: #757575;
  }
  
  .cont_form_sign_up > h2 {
    margin-top: 50px;
    font-weight: 400;
    color: #757575;
  }
  
  .cont_form_login > input {
    padding: 15px 5px;
    margin-left: 10px;
    margin-top: 20px;
    width: 260px;
    border: none;
    text-align: left;
    color: #757575;
  }
  
  .cont_form_login > h2 {
    margin-top: 110px;
    font-weight: 400;
    color: #757575;
  }
  .cont_form_login > a,
  .cont_form_sign_up > a {
    color: #757575;
    position: relative;
    float: left;
    margin: 10px;
    margin-left: 30px;
  }

  
  @media (max-width: 699px) {
    .cotn_principal{
      display: none;
    }
  }

  @media (min-width: 700px) {
    .cotn_mobile{
      display: none;
    }
  }
            </style>
            <?php } ?>
        </section>



        <div id="btn-up"></div>


        <style>

          .account-main #service-second-but h2.art, .account-main #service-second h2.art{
              text-align: start;
          }

          .account-main #service-second-but p.art, .account-main #service-second p.art{
              text-align: justify;
          }



        </style>

        <!--PC-->
            <div class="home-desktop">

                <section id="service-second" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Information%20carousel_Monochromatic.png" style="width: 96%;
    margin-top: 65px;">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['about']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['about']['txt'] ?>
                            </p>
                        </article>
                    </div>
                </section>

                <div class="container">

    <hr style="background: rgb(161, 161, 161); margin-top:45px" >
                </div>
                
                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['sync']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['sync']['txt'] ?>
                            </p>
                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/World%20wide%20web_Monochromatic.png" style="width: 100%;">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Sending%20emails_Monochromatic.png" style="width: 100%; margin-top: 17px">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['mail']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['mail']['txt'] ?>
                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['cloud']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['cloud']['txt'] ?>
                            </p>

                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/Data%20storage_Monochromatic.png" style="width: 100%">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Files%20And%20Folder_Monochromatic.svg" style="width: 100%; height: 100%">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['doc']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['doc']['txt'] ?>
                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['presta']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['presta']['txt'] ?>
                            </p>
                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/Consulting_Monochromatic.png">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Gaming%20_Monochromatic.png" style="width: 100%; height: 100%">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['jv']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['jv']['txt'] ?>
                            </p>
                        </article>
                    </div>

                </section>
                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['serv']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['serv']['txt'] ?>
                            </p>
                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/Data%20Hosting_Monochromatic.png" style="width: 87%;">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Online%20protection_Monochromatic.png" style="width: 100%; margin-top: 48px">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art"><i class="fas fa-caret-right"></i><?= $lang[$page]['enga']['title'] ?></h2>
                            <p class="art">
                                <?= $lang[$page]['enga']['txt'] ?>
                            </p>
                        </article>
                    </div>
                </section>

            </div>
        
        
        

    <div class="home-res">
    
        
    <section id="service-second">
        <h2><?= $lang[$page]['about']['title'] ?></h2>
        <p>
            <?= $lang[$page]['about']['txt'] ?>
        </p>
                        <div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Information%20carousel_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
                        
    </section>
        
        
    <hr style="background: rgb(161, 161, 161); margin-top:45px" >
        
        
    <section id="service-second-but">
        <h2><?= $lang[$page]['sync']['title'] ?></h2>
        <p>
            <?= $lang[$page]['sync']['txt'] ?>
                            </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/World%20wide%20web_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
    <section id="service-second-but">
        <h2>
            <?= $lang[$page]['mail']['title'] ?>
        </h2>
        <p>
            <?= $lang[$page]['mail']['txt'] ?>
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Sending%20emails_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
    <section id="service-second-but">
        <h2>
            <?= $lang[$page]['cloud']['title'] ?>
        </h2>
        <p>
            <?= $lang[$page]['cloud']['txt'] ?>
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Data%20storage_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
        
    <section id="service-second-but">
        <h2>
            <?= $lang[$page]['doc']['title'] ?>
        </h2>
        <p>
            <?= $lang[$page]['doc']['txt'] ?>
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Files%20And%20Folder_Monochromatic.svg" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
        
    <section id="service-second-but">
        <h2>
            <?= $lang[$page]['presta']['title'] ?>
        </h2>
        <p>
            <?= $lang[$page]['presta']['txt'] ?>
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Consulting_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section><section id="service-second-but">
        <h2>
            <?= $lang[$page]['jv']['title'] ?>
        </h2>
        <p>
            <?= $lang[$page]['jv']['txt'] ?>
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Gaming%20_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section><section id="service-second-but">
        <h2>
            <?= $lang[$page]['serv']['title'] ?>
        </h2>
        <p>
            <?= $lang[$page]['serv']['txt'] ?>
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Data%20Hosting_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section><section id="service-second-but">
        <h2>
            <?= $lang[$page]['enga']['title'] ?>
        </h2>
        <p>
            <?= $lang[$page]['enga']['txt'] ?>
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Online%20protection_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
     
    </div>

        <br><br>
    </main>

<?php } ?>
    
<?php footer(); ?> </body> </html>

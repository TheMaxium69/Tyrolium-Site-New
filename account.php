<?php include "app/app.php"; $page = 6; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

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
                <h1>Compte<br> <c class="change">Tyrolium</c></h1><script src="javascript/textanime-account.js"></script>
                <a href="#btn-up"><p>
                  LES COMPTES CRÉÉ PAR TYROLIUM
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
                                    <h2>Connexion</h2>  
                                    <p>Connectez-vous et accedez à votre panel</p> 
                                    <a href="connect.php" class="btn btn_login">Se connecter</a>
                                </div>
                            </div>
                            <div class="col_md_sign_up">
                                <div class="cont_ba_opcitiy">
                                    <h2>Inscription</h2>
                                    <p>Inscrivez-vous, ça vous prendre moin d'1 min</p>
                                    <a href="connect.php" class="btn btn_sign_up">S'incrire</a>
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
                <?php tyrobtn("connect.php", "insciption", "Se connecter / S'incrire");?>
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
                            <h2 class="art"><i class="fas fa-caret-right"></i> A propos des comptes Useritium</h2>
                            <p class="art">Les comptes Useritium sont proposés par Tyrolium, afin de vous proposer une adresse mail spécialisée et personnelle.<br>

Ces comptes vous offrent un cloud et des fonctionnalités pour la création de documents ou de notes, de plus, ils permettent egalement de pouvoir gérer vos jeux vidéos ou vos serveurs personnels et/ou professionnels.<br>

Ils vous permettent également de connaître l'avancée de vos demandes de prestations.<br>

Ces comptes sont aussi une garantie de sécurité de vos données, nous nous engageons à ne jamais partager ou divulguer quelconques informations vous concernant ou liées à ces comptes (projet open source).</p>
                        </article>
                    </div>
                </section>

                <div class="container">

    <hr style="background: rgb(161, 161, 161); margin-top:45px" >
                </div>
                
                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i> Synchronisation avec tous vos Sites</h2>
                            <p class="art">
                                Synchronisez les comptes Useritium avec tous nos sites et les sites de nos partenaires, cela permet d'avoir un seul compte et un seul mot de passe afin de simplifier toutes vos connexions et vos créations de comptes.<br>
Vous pourrez consulter tous les sites ou vous êtes connectés sur le pannel 
Cette synchronisation permet aussi de voir toutes vos informations sur le site de Useritium
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
                            <h2 class="art"><i class="fas fa-caret-right"></i> Votre boîte Mail</h2>
                            <p class="art">
                                La boîte mail de Useritium à énormément d'avantages.
Elle chiffre vos données et vos informations personnelles, elle est facile d'utilisation, elle est également très intuitive et pratique.<br>

Votre mail sera personnalisé, avec des adresses mail comme<br>

exemple@useritium.fr 
ou 
exemple@tyromail.fr <br>

Nous nous engageons enfin, à ne jamais vendre ou divulguer vos données et informations personnelles.
                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i> Votre Cloud personnel</h2>
                            <p class="art">
                                Le cloud offert avec le compte Useritium permet de synchroniser toutes vos images, tous vos documents, vos fichiers que vous pourrez retrouver sur tous vos appareils.<br>
Ce cloud est chiffré et protégé et aucune information personnelle ne sera divulguée à des fins commerciales. 
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
                            <h2 class="art"><i class="fas fa-caret-right"></i> Créez vos Documents et vos Notes</h2>
                            <p class="art">

                                Les comptes Useritium permettent de créer des notes et tout autre type de documents (tableurs, présentations...).<br>
Toutes ces notes et ces documents seront également synchronisés sur tous vos appareils. 

                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i> Panel de Prestations</h2>
                            <p class="art">
Tyrolium produit des prestations de sites web, graphisme, musiques...
Nos clients pourront retrouver l'avancée en temps réel de leurs prestations ainsi que toute information complémentaire afin de simplifier la prise de contact. <br>
En effet, nous voulons être proches de nos clients, ils pourront alors également nous contacter pour des questions, des modifications ou toute autre demande concernant leurs prestations en cours.

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
                            <h2 class="art"><i class="fas fa-caret-right"></i> Retrouvez vos Jeux Vidéo</h2>
                            <p class="art">
                                Vous retrouverez ici tous les jeux vidéos que vous possédez, dont ceux de <a class="textAccount" href="https://tyroserv.fr">TyroServ</a> et <a class="textAccount" href="https://www.linkedin.com/company/tyrostudio">TyroStudio</a> ainsi que ceux de nos futurs partenaires.<br><br>
Vos sauvegardes y seront stockées <br> Ainsi vous pourrez également ajouter vos amis et consulter leur profil
                            </p>
                        </article>
                    </div>

                </section>
                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i> Gérez tous vos Serveurs</h2>
                            <p class="art">
                                Vous pourrez retrouver dans cette section, tous vos comptes achetés par notre filiale SolidServ.<br>
Dans ce pannel il vous sera possible de faire toute la gestion de vos serveurs, gérer les accès de vos différents utilisateurs, et accéder à vos bases de données ainsi, que tout synchroniser grâce aux comptes Useritium. 
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
                            <h2 class="art"><i class="fas fa-caret-right"></i> Nos Engagements</h2>
                            Tyrolium s'engage au près de vous avec les comptes Useritium et leur fonctionnalités sur différents points.<br>

A fournir un travail et un relationnel de qualité.<br>

La gestion de nos serveurs et nos infrastructures sont 100% éco responsables.<br>

Vos données et informations personnelles sont cryptées.<br>

Vos données et informations personnelles ne seront jamais divulguées ou vendues pour quelque raison que ce soit.<br>
                        
                            Tous nos codes et applications sont open source<br>

                            <p class="art">
                            </p>
                        </article>
                    </div>
                </section>

            </div>
        
        
        

    <div class="home-res">
    
        
    <section id="service-second">
        <h2>A propos des comptes Useritium</h2>
        <p>
         Les comptes Useritium sont proposés par Tyrolium, afin de vous proposer une adresse mail spécialisée et personnelle.<br><br>

Ces comptes vous offrent un cloud et des fonctionnalités pour la création de documents ou de notes, de plus, ils permettent egalement de pouvoir gérer vos jeux vidéos ou vos serveurs personnels et/ou professionnels.<br><br>

Ils vous permettent également de connaître l'avancée de vos demandes de prestations.<br><br>

Ces comptes sont aussi une garantie de sécurité de vos données, nous nous engageons à ne jamais partager ou divulguer quelconques informations vous concernant ou liées à ces comptes (projet open source).
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
        <h2>Synchronisation avec tous vos Sites</h2>
        <p>
                                Synchronisez les comptes Useritium avec tous nos sites et les sites de nos partenaires, cela permet d'avoir un seul compte et un seul mot de passe afin de simplifier toutes vos connexions et vos créations de comptes.<br><br>
Vous pourrez consulter tous les sites ou vous êtes connectés sur le pannel 
Cette synchronisation permet aussi de voir toutes vos informations sur le site de Useritium
                            </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/World%20wide%20web_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
    <section id="service-second-but">
        <h2>
        Votre boîte Mail
        </h2>
        <p>
        
        
                                La boîte mail de Useritium à énormément d'avantages.
Elle chiffre vos données et vos informations personnelles, elle est facile d'utilisation, elle est également très intuitive et pratique.<br><br>

Votre mail sera personnalisé, avec des adresses mail comme<br><br> 

exemple@useritium.fr 
ou 
exemple@tyromail.fr <br><br>

Nous nous engageons enfin, à ne jamais vendre ou divulguer vos données et informations personnelles.
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Sending%20emails_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
    <section id="service-second-but">
        <h2>
        Votre Cloud personnel
        </h2>
        <p>
        
        
                                Le cloud offert avec le compte Useritium permet de synchroniser toutes vos images, tous vos documents, vos fichiers que vous pourrez retrouver sur tous vos appareils.<br><br>
Ce cloud est chiffré et protégé et aucune information personnelle ne sera divulguée à des fins commerciales. 
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Data%20storage_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
        
    <section id="service-second-but">
        <h2>
        Créez vos Documents et vos Notes
        </h2>
        <p>
        
        
                                Les comptes Useritium permettent de créer des notes et tout autre type de documents (tableurs, présentations...).<br><br>
Toutes ces notes et ces documents seront également synchronisés sur tous vos appareils. 
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Files%20And%20Folder_Monochromatic.svg" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section>
        
        
    <section id="service-second-but">
        <h2>
        Panel de Prestations
        </h2>
        <p>
        
        
Tyrolium produit des prestations de sites web, graphisme, musiques...
Nos clients pourront retrouver l'avancée en temps réel de leurs prestations ainsi que toute information complémentaire afin de simplifier la prise de contact. <br><br>
En effet, nous voulons être proches de nos clients, ils pourront alors également nous contacter pour des questions, des modifications ou toute autre demande concernant leurs prestations en cours.
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Consulting_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section><section id="service-second-but">
        <h2>
        Retrouvez vos Jeux Vidéo
        </h2>
        <p>
        
                                Vous retrouverez ici tous les jeux vidéos que vous possédez, dont ceux de <a class="textAccount" href="https://tyroserv.fr">TyroServ</a> et <a class="textAccount" href="https://www.linkedin.com/company/tyrostudio">TyroStudio</a> ainsi que ceux de nos futurs partenaires.<br><br>
Vos sauvegardes y seront stockées <br><br> Ainsi vous pourrez également ajouter vos amis et consulter leur profil
        
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Gaming%20_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section><section id="service-second-but">
        <h2>
        Gérez tous vos Serveurs
        </h2>
        <p>
        
                                Vous pourrez retrouver dans cette section, tous vos comptes achetés par notre filiale SolidServ.<br><br>
Dans ce pannel il vous sera possible de faire toute la gestion de vos serveurs, gérer les accès de vos différents utilisateurs, et accéder à vos bases de données ainsi, que tout synchroniser grâce aux comptes Useritium. 
        
        </p><div>
                            <div class="" style="width: 60%; margin-left: 20%">
                                <img src="assets/Data%20Hosting_Monochromatic.png" width="100%" height="100%">
                            </div>
                        </div>
                    <br>
    </section><section id="service-second-but">
        <h2>
        Nos Engagements
        </h2>
        <p>
                            Tyrolium s'engage au près de vous avec les comptes Useritium et leur fonctionnalités sur différents points.<br><br>

A fournir un travail et un relationnel de qualité.<br>

La gestion de nos serveurs et nos infrastructures sont 100% éco responsables.<br>

Vos données et informations personnelles sont cryptées.<br>

Vos données et informations personnelles ne seront jamais divulguées ou vendues pour quelque raison que ce soit.<br>
                        
                            Tous nos codes et applications sont open source<br>
        
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

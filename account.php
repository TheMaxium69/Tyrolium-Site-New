<?php include "app/app.php"; $page = 6; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php if($env_isAccount == true) { ?>
    <main>

    	<section id="particule">
	        <div id="particule">
	            <div id="head" style="
                margin-top: 80px;">
	                <h1>Compte<br> Tyrolium</h1>
	                <a href="#btn-up"><p>
	                    DÉCOUVREZ LES COMPTES USERITIUM
	                </p></a>
	            </div>
	            <?php if (empty($_COOKIE["color"])){ $colorCookie = "dark"; }else{ $colorCookie = $_COOKIE["color"]; }
	            particule($colorCookie) ?>
	        </div>
	    </section>
        
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
                <?php tyrobtn("https://youtu.be/zJ3rbBJCYdM", "buttonAccount", "Voir le trailer");?>
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
        </section>



        <div id="btn-up"></div>

        <!--PC-->
            <div class="home-desktop">

                <section id="service-second" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Information%20carousel_Monochromatic.png" style="width: 96%;
    margin-top: 110px;">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art">A propos des comptes Useritium</h2>
                            <p class="art">Les comptes Useritium sont proposés par Tyrolium, afin de vous proposer une adresse mail spécialisée et personnelle.<br><br>

Ces comptes vous offrent un cloud et des fonctionnalités pour la création de documents ou de notes, de plus, ils permettent egalement de pouvoir gérer vos jeux vidéos ou vos serveurs personnels et/ou professionnels.<br><br>

Ils vous permettent également de connaître l'avancée de vos demandes de prestations.<br><br>

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
                            <h2 class="art">Synchronisation avec tous vos Sites</h2>
                            <p class="art">
                                Synchronisez les comptes Useritium avec tous nos sites et les sites de nos partenaires, cela permet d'avoir un seul compte et un seul mot de passe afin de simplifier toutes vos connexions et vos créations de comptes.<br><br>
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
                        <img class="img-home" src="assets/Sending%20emails_Monochromatic.png" style="width: 100%; margin-top: 70px">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art">Votre boîte Mail</h2>
                            <p class="art">
                                La boîte mail de Useritium à énormément d'avantages.
Elle chiffre vos données et vos informations personnelles, elle est facile d'utilisation, elle est également très intuitive et pratique.<br><br>

Votre mail sera personnalisé, avec des adresses mail comme<br><br> 

exemple@useritium.fr 
ou 
exemple@tyromail.fr <br><br>

Nous nous engageons enfin, à ne jamais vendre ou divulguer vos données et informations personnelles.
                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art">Votre Cloud personnel</h2>
                            <p class="art">
                                Le cloud offert avec le compte Useritium permet de synchroniser toutes vos images, tous vos documents, vos fichiers que vous pourrez retrouver sur tous vos appareils.<br><br>
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
                            <h2 class="art">Créez vos Documents et vos Notes</h2>
                            <p class="art">

                                Les comptes Useritium permettent de créer des notes et tout autre type de documents (tableurs, présentations...).<br><br>
Toutes ces notes et ces documents seront également synchronisés sur tous vos appareils. 

                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art">Panel de Prestations</h2>
                            <p class="art">
Tyrolium produit des prestations de sites web, graphisme, musiques...
Nos clients pourront retrouver l'avancée en temps réel de leurs prestations ainsi que toute information complémentaire afin de simplifier la prise de contact. <br><br>
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
                            <h2 class="art">Retrouvez vos Jeux Vidéo</h2>
                            <p class="art">
                                Vous retrouverez ici tous les jeux vidéos que vous possédez, dont ceux de <a class="textAccount" href="https://tyroserv.fr">TyroServ</a> et <a class="textAccount" href="https://www.linkedin.com/company/tyrostudio">TyroStudio</a> ainsi que ceux de nos futurs partenaires.<br><br>
Vos sauvegardes y seront stockées <br><br> Ainsi vous pourrez également ajouter vos amis et consulter leur profil
                            </p>
                        </article>
                    </div>

                </section>
                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art">Gérez tous vos Serveurs</h2>
                            <p class="art">
                                Vous pourrez retrouver dans cette section, tous vos comptes achetés par notre filiale SolidServ.<br><br>
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
                            <h2 class="art">Nos Engagements</h2>
                            Tyrolium s'engage au près de vous avec les comptes Useritium et leur fonctionnalités sur différents points.<br><br>

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

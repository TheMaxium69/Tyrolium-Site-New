<?php include "app/app.php"; $page = 6; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php if($env_isAccount == true) { ?>
    <main>

    	<section id="particule">
	        <div id="particule">
	            <div id="head" style="
                margin-top: 80px;">
	                <h1>Compte Tyrolium</h1>
	                <a href="#btn-up"><p>
	                    DÉCOUVREZ LES COMPTE USERITIUM
	                </p></a>
	            </div>
	            <?php if (empty($_COOKIE["color"])){ $colorCookie = "dark"; }else{ $colorCookie = $_COOKIE["color"]; }
	            particule($colorCookie) ?>
	        </div>
	    </section>

        <style></style>
        
        <section id="connection" class="container">
        
            <!--<div class="row">
                
                <a href="connect.php" class="btn btn-success">Accedez a la connexion</a>

            </div>-->
            <br>

            <div class="jumbotron">
                <h1 class="display-4"> <i class="fa fa-info-circle"></i> Les comptes ne sont pas disponible</h1>
                <p >Les Comptes Useritium Sortirons le <strong>30 Sptembre 2022</strong>, Vous pourrez créer tout ça ici ou sur sont site, et profitez des nombreuse fonctionnalité disponible en dessous</p>
                <hr class="my-4">
                <p class="lead">Pour voir plus d'information sur les comptes Useritium nous vous inviton a regarder le trailer ou à allez sur le site officiel des comptes.</p>
                <?php tyrobtn("https://useritium.fr", "buttonAccount", "Voir le trailer");?>
                <?php tyrobtn("https://useritium.fr", "buttonAccount", "Site Officiel");?>
            </div>


            <style>
                .jumbotron{
                    background: #26272b;
                }
                #btn-buttonAccount{
                    font-size: 12px;
                }
            </style>
        </section>



        <div id="btn-up"></div>

        <!--PC-->
            <div class="home-desktop">

                <section id="service-second" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Information%20carousel_Monochromatic.png" style="width: 96%; height: 100%">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art">Intro Explication</h2>
                            <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art">Syncro Web</h2>
                            <p class="art">
                                Syncroniser tout vos site, avec les comptes Useritium, qui permet d'avoir un seul, un seul mots de passe a fait de simplifier toute vos connexion et vos création de compte
                            </p>
                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/World%20wide%20web_Monochromatic.png">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Sending%20emails_Monochromatic.png" style="width: 96%; height: 100%">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art">Mail</h2>
                            <p class="art">
                                Une boîte mail gratuite avec vos
                                données chiffrés et non
                                vendues.<br><br>
                                Obtener votre email comme<br>
                                exemple@useritium.fr<br>
                                ou<br>
                                exemple@tyromail.fr
                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art">Cloud</h2>
                            <p class="art">
                                Synchroniser toutes vos images,vos
                                documents,vos fichiers sur le cloud pour
                                les retouver sur tous vos appareils!
                            </p>

                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/Data%20storage_Monochromatic.png">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Files%20And%20Folder_Monochromatic.svg" style="width: 96%; height: 100%">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art">Document / Note</h2>
                            <p class="art">

                                Créer des notes et tout types de
                                documents(exemple:tableur,
                                présentation ..)
                                3
                                Toutes ces notes et ses documents
                                seront synchronisées sur tous vos
                                appareils grâces aux comptes Useritium

                            </p>
                        </article>
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art">Prestation</h2>
                            <p class="art">

                                Tyrolium produit des prestations
                                (Site web,graphisme ...)
                                Nos clients pourront retrouver l'avancée
                                du service en temps réel et toute
                                information complémentaire afin
                                simplifier la prise de contact!

                            </p>
                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/Consulting_Monochromatic.png">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Gaming%20_Monochromatic.png" style="width: 96%; height: 100%">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art">Jeux Vidéo</h2>
                            <p class="art">
                                Vous retrouverez ici tous les jeux vidéos
                                que vous possèdez dont
                                ceux de TyroServ et TyroStudio
                                et nos futurs partenaires
                            </p>
                        </article>
                    </div>

                </section>
                <section id="service-second-but" class="container row">
                    <div class="container col-5">
                        <article>
                            <h2 class="art">Serveur</h2>
                            <p class="art">
                                Grâceànotre filiale SolidServ vous
                                pourrez retrouver tous vos serveurs ici!

                            </p>
                        </article>
                    </div>
                    <div class="col-6">
                        <img class="img-home" src="assets/Data%20Hosting_Monochromatic.png">
                    </div>
                </section>

                <section id="service-second-but" class="container row">
                    <div class="col-6" style="text-align: end">
                        <img class="img-home" src="assets/Online%20protection_Monochromatic.png" style="width: 96%; height: 100%">
                    </div>
                    <div class="container col-5">
                        <article id="art-home">
                            <h2 class="art">Engagement</h2>
                            <p class="art">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        </article>
                    </div>
                </section>

            </div>

        <br><br>
    </main>

<?php } ?>
    
<?php footer(); ?> </body> </html>

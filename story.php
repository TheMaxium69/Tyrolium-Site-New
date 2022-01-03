<?php include "app/app.php"; $page = 5; head($page); ?>
<body id="story"> <header> <?php navbar($page); ?> </header>

<section id="storyhead" class="container">
    <br>
    <h2 style="text-align: center">Notre Histoire</h2>
    <p>Tyrolium est un projet qui a été créé il y a des années.
        En hommage à tous ces moments importants de notre histoire, nous avons réalisé cette page pour nos souvenirs personnels et pour vous montrer tout les grands moments qui nous ont amené où nous sommes aujourd'hui.</p>
    <br>
    <hr style="background: rgb(161, 161, 161);">
    <br>
</section>
<main id="story">
    <section class="timeline">
        <div class="container">

            <?php  $nbStory = count($env_story);

            for ($i = 0; $i <= $nbStory-1; $i++) { ?>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <?php if (!empty($env_story[$i]['picture'])) { ?>
                    <div class="timeline-content timeline-card">
                        <div class="timeline-img-header" id="st<?php echo $i; ?>">
                            <h2><?php echo $env_story[$i]['title']; ?></h2>
                        </div>
                    <?php } else {?>
                    <div class="timeline-content">
                        <h2><?php echo $env_story[$i]['title']; ?></h2>
                    <?php } ?>
                        <div class="date"><?php echo $env_story[$i]['date']; ?></div>
                        <p><?php echo $env_story[$i]['content']; ?></p>
                        <?php if (!empty($env_story[$i]['btn'])){ ?>
                            <a class="btn-more" href="<?php echo $env_story[$i]['btn']['url']; ?>"><?php echo $env_story[$i]['btn']['text']; ?></a>
                        <?php } ?>
                    </div>
                </div>

            <?php }?>







            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <h2>Trailer de TyroServ</h2>
                    <div class="date">30 MARS 2020</div>
                    <p>Trailer pour du lancement de TyroServ (Le Serveur Minecraft PVP/Faction Moddé). Dans cette vidéo on annonce pour la première fois la dete de sorti du serveur</p>
                    <a class="btn-more" href="https://www.youtube.com/watch?v=rNq089toP6g&t">Voir la vidéo</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content timeline-card js--fadeInRight">
                    <div class="timeline-img-header" id="st4">
                        <h2>Lancement de TyroServ</h2>
                    </div>
                    <div class="date">26 avril 2020</div>
                    <p>Lancement du Serveur Minecraft, avec le site, le launcher, le TyroMod et les maps (Architechure créer dans le jeux Minecraft)</p>
                    <a class="btn-more" href="https://tyrolium.fr/Contenu/Image/Tyrolium ServerMC.png">Voir l'image</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <div class="date">29 avril 2020</div>
                    <h2>TyroServ Attein les 4000 Joueur</h2>
                    <p>Seulement 4 Jour après la sorti officiel du serveur, nous atteinions les 4000 joueur unique, et en moyen 160 joueur connecter en permenance.</p>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content timeline-card js--fadeInRight">
                    <div class="timeline-img-header" id="st5">
                        <h2>Création de Gamenium</h2>
                    </div>
                    <div class="date">5 mai 2020</div>
                    <p>Création du projet Gamenium, il s'agit d'un site d'actualité, et de critique de jeux-vidéo</p>

                    <a class="btn-more" href="https://tyrolium.fr/Contenu/Image/Gamenium Old.png">Voir l'image</a>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <h2>Création de TyroStudio</h2>
                    <div class="date">5 mai 2020</div>
                    <p style="padding-bottom: 10px;">Création du projet TyroStudio, il s'agit du studio de développement de jeux vidéo</p>
                </div>
            </div>


            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <div class="date">24 mai 2020</div>
                    <h2>Lancement du site de Wonderlium</h2>
                    <p>Lancement du site du Wonderlium, projet réalisant des vidéos
                        sur l'univers geek</p>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <div class="date">27 Août 2020</div>
                    <h2>Lancement de la Boutique</h2>
                    <p>Lancement de la boutique de Tyrolium, et création du projet "TyroShop"</p>
                </div>
            </div>

            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content timeline-card js--fadeInRight">
                    <div class="timeline-img-header" id="st9">
                        <h2>Création du logo de TyroStudio</h2>
                    </div>
                    <div class="date">28 Août 2020</div>
                    <p>Premier logo du projet de TyroStudio, il represente un phenix, il reste encore aujourd'hui assez mysterieux</p>
                    <a class="btn-more" href="https://tyrolium.fr/Contenu/Image/Tyrolium Studio.png">Voir l'image</a>
                </div>
            </div>


            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <h2>TyroServ Attein les 10000 Joueur</h2>
                    <div class="date">4 septembre 2020</div>
                    <p>Après 5 mois, TyroServ attent le chiffre de 10 000 Joueur Unique connectez sur le serveur.</p>

                </div>
            </div>


            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInRight">
                    <div class="date">1 Septembre 2020</div>
                    <h2>Deuxième vidéo de Wonderlium</h2>
                    <p>Il s'agit de la deuxième vidéo du projet Wonderlium, sur le sujet de la Console appeler GameCube.</p>
                </div>
            </div>


            <!--<div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInLeft">
                    <div class="date">1 SEP 2016</div>
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>-->

















            <div class="timeline-item">

                <div class="timeline-img"></div>

                <div class="timeline-content js--fadeInRight">
                    <div class="date">1 SEP 2016</div>
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime ipsa ratione omnis alias cupiditate saepe atque totam aperiam sed nulla voluptatem recusandae dolor, nostrum excepturi amet in dolores. Alias, ullam.</p>
                    <a class="bnt-more" href="javascript:void(0)">More</a>
                </div>
            </div>




        </div>
    </section>


    <style>

    <?php for ($i = 0; $i <= $nbStory-1; $i++) { ?>

        <?php if (!empty($env_story[$i]['picture'])) { ?>

            #st<?php echo $i; ?>{
                background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("<?php echo $env_story[$i]['picture']; ?>") center center no-repeat;
            }

        <?php }
    }?>


        /*
        #st2{
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("assets/story/Wonderlium.png") center center no-repeat;
        }
        #st3{
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("assets/story/TyroMusic.png") center center no-repeat;
        }
        #st4{
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("https://tyrolium.fr/Contenu/Image/Tyrolium%20ServerMC.png") center center no-repeat;
        }
        #st5{
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("https://tyrolium.fr/Contenu/Image/Gamenium%20Old.png") center center no-repeat;
        }
        #st6{
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("https://tyrolium.fr/Contenu/Image/Tyrolium%20Studio.png") center center no-repeat;
        }
        #st7{
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("https://tyrolium.fr/Contenu/Image/Freenium.png") center center no-repeat;
        }
        #st8 {
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("https://tyrolium.fr/Contenu/Image/Tyrolium%20Music.png") center center no-repeat;
        }
        #st9 {
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.55)), url("https://tyrolium.fr/Contenu/Image/Tyrolium%20Studio.png") center center no-repeat;
        }*/
    </style>

</main>

<?php footer(); require "extension/JQuery.phtml"; require "extension/ScrollReveal.phtml"?>
<script src="javascript/story.js"></script> </body> </html>

<?php include "app/app.php"; $page = 4; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<main>
<section id="projet" class="container">
        <br>
        <h2>Nos Partenaire</h2>
        <p>Voici les entreprises, organisations et collectivités qui nous font confiance, et qu'on travaille activement à l'amélioration et la création de projets.</p>
        <br>
    </section>

    <div id="no-container">
    <section id="partenaire" class="container">
        
    <!-- Desktop -->
    <div class="part-desktop">
        <div class="row">
            <div class="col">
                <a target="_bank" href="https://www.lafrenchtech-onelse.com/" title="French Tech One Lyon St-Étienne">
                    <img src="<?php echo $env_assets; ?>part/frenchtechlyon.png" alt="frenchtech">
                </a>
            </div>

            <div class="col">
                <a target="_bank" href="https://www.auvergnerhonealpes.fr/" title="La Region Auvergne-Rhône-Alpes">
                    <img src="<?php echo $env_assets; ?>part/auvergne-Rhone-Alphes.png" alt="Auvergne-Rhône-Alphes">
                </a>
            </div>

            <div class="col">
                <a target="_bank" href="https://www.grandest.fr/" title="La Region Grand Est">
                    <img src="<?php echo $env_assets; ?>part/grandest.png" alt="Grand Est">
                </a>
            </div>

            <div class="col">
                <a target="_bank" href="https://www.linkedin.com/company/g%C3%A9n%C3%A9ration-ium/" title="Génératium IUM">
                    <img src="<?php echo $env_assets; ?>part/Generatium-ium.png" alt="generatium-ium">
                </a>
            </div>

<!--            <div class="col">-->
<!--                <a target="_bank" href="https://batirpositif.com" title="Bâtir Positif - Ingénierie Responsable">-->
<!--                    <img src="--><?php //echo $env_assets; ?><!--part/bt.jpg" alt="batirpositif">-->
<!--                </a>-->
<!--            </div>-->

            <div class="col">
                <a target="_blank" href="https://www.instagram.com/maewanm/" title="Saint Balais">
                    <img src="<?php echo $env_assets; ?>part/saintbalais.png" alt="saint-balais">
                </a>
            </div>
            
        </div>
    </div>
        <!-- Mobile -->
        <div class="part-mobile">
                <style>


            .splide__slide img {
                width: 150px;
                border-radius: 33px;
            }


            .splide__slide {
            min-height: 2px;
            text-align: center;
            }

            .splide__pagination {
                position: relative;
                z-index: 1;
                /* bottom: 0.5em; */
                left: 50%;
                transform: translateX(-50%);
                padding: 0;
                top: 10px;
            }

            .splide__arrows{
                display: none;
            }

            #splide-track{
                padding-top: 22px;
                padding-bottom: 19px;
            }

            </style>

                <div id="splide">

                        <div class="splide__track" id="splide-track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.lafrenchtech-onelse.com/" title="French Tech One Lyon St-Étienne">
                                        <img src="<?php echo $env_assets; ?>part/frenchtechlyon.png" alt="frenchtech">
                                    </a>
                                </li>
                                
                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.auvergnerhonealpes.fr/" title="La Region Auvergne-Rhône-Alpes">
                                        <img src="<?php echo $env_assets; ?>part/auvergne-Rhone-Alphes.png" alt="Auvergne-Rhône-Alphes">
                                    </a>
                                </li>
                                        
                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.grandest.fr/" title="La Region Grand Est">
                                        <img src="<?php echo $env_assets; ?>part/grandest.png" alt="Grand Est">
                                    </a>
                                </li>
                                
                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.linkedin.com/company/g%C3%A9n%C3%A9ration-ium/" title="Génératium IUM">
                                        <img src="<?php echo $env_assets; ?>part/Generatium-ium.png" alt="generatium-ium">
                                    </a>
                                </li>

                                <li class="splide__slide">
                                    <a target="_bank" href="https://batirpositif.com" title="Bâtir Positif - Ingénierie Responsable">
                                        <img src="<?php echo $env_assets; ?>part/bt.jpg" alt="batirpositif">
                                    </a>
                                </li>

                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.instagram.com/maewanm/" title="Saint Balais">
                                        <img src="<?php echo $env_assets; ?>part/saintbalais.png" alt="saint-balais">
                                    </a>
                                </li>
                        
                        
                            </ul> <!-- /.splide__list -->
                        </div> <!-- /.splide__track -->
                </div> <!-- /.splide -->


            <!-- 885 -->
            <script src='https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/js/splide.min.js'></script>
            <script>

            // SplideJS Slider. See full docs at:
            // https://splidejs.com/
            document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('#splide', {
                type         : 'loop',
                autoplay     : true,
                interval     : 1800,
                focus        : 'center',
                pagination   : false,
                arrow        : false,
                fixedWidth   : 173
            });

            
            splide.mount();

            });



            </script>
        </div>

        <style>


/* 885 */

@media(max-width: 885px){
    

    .part-desktop{
        display: none;
    }

    .sponso-desktop{
        display: none;
    }
    
    #no-container .container {
        max-width: unset;
        margin-left: unset;
        margin-right: unset;
        padding-right: unset;
        padding-left: unset;
        width: unset;
    }

    #section-fondateur .container{

        width: 100%;

    }
    
    #section-fondateur .radiusMobile{
            
        border-radius: 10px!important;

    }

    #section-fondateur .col-6{

        min-width: 100%;
        padding-right: 0px;
        padding-left: 0px;

    }

    #section-fondateur .col-5{
        min-width: 100%;
        margin-bottom: 29px;
        font-size: 14px;
    }

    #section-fondateur .mobileDesac{
        display: none!important;
    }


}



@media(min-width: 886px){
    
    .part-mobile{
        display: none;
    }
    .sponso-mobile{
        display: none;
    }

}



</style>







        <br>
        <section id="service-start-but">
        <?php tyrobtn("contact.php?partenaire=true", "devpart", "Devenir notre Partenaire");?>
        </section>
        <br>
    </section>
</div>


    <br>
    <hr class="" style="background: rgba(161,161,161,0.6);">



    <section id="projet" class="container">
        <br>
        <h2>Notre Équipe</h2>
        <p>Nous sommes une équipe de passionné par notre travail et ce que nous créons tout les jours, nous sommes jeune mais plein d'envie pour notre futur.</p>
        <br>
    </section>


    <section id="credit">
        <div class="container">

            <section id="section-fondateur"> 
                <div class="container row radiusMobile">
                    <div class="col-6" style="text-align: center;">    
                            
                            <div class="">
                                <div class="">
                                    <div class="our-team">
                                        <div class="picture">
                                            <img class="img-fluid" src="assets/pp/Maxime_Tournier.jpg">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="name">Maxime Tournier</h3>
                                            <h4 class="title">PDG & Fondateur,<br> Développeur</h4>
                                        </div>
                                        <ul class="social">
                                            <li><a href="https://instagram.com/the_maxime_san" class="fab fa-instagram" aria-hidden="true"></a></li>
                                            <li><a href="https://github.com/TheMaxium69" class="fab fa-github" aria-hidden="true"></a></li>
                                            <li><a href="https://linkedin.com/in/maxime-tournier-tyrolium" class="fab fa-linkedin" aria-hidden="true"></a></li>
                                            <li><a href="https://www.tiktok.com/@themaximesan" class="fab fa-tiktok" aria-hidden="true"></a></li>
                                            <li><a href="https://www.youtube.com/@TheMaximeSan/" class="fab fa-youtube" aria-hidden="true"></a></li>
                                            <li><a href="https://twitter.com/MaximeTournier2/" class="fab fa-twitter" aria-hidden="true"></a></li>
                                            <li class="mobileDesac"><a href="https://twitch.tv/TheMaximeSan" class="fab fa-twitch" aria-hidden="true"></a></li>
                                            <li class="mobileDesac"><a href="https://www.facebook.com/maxime.tournier.73" class="fab fa-facebook" aria-hidden="true"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="container col-5">
                        <article>
                            <h2 class="art"><i class="fas fa-caret-right"></i> Fondateur de Tyrolium</h2>
                            <p class="art" style='padding-bottom: 10px; margin-top: -21px;'>
                            Félicitations au fondateur pour ses 7 années d'engagement total dans Tyrolium et ses projets.
                            Son dévouement exemplaire est une source d'inspiration pour toutes les personnes qui travaillent dans l'entreprise. 
                            Si Tyrolium est arrivé là où il en est aujourd'hui, c'est bien grâce à Maxime Tournier, celui qui a donné une chance à chacun d'atteindre nos rêves.
                            </p>
                            
                        </article>
                    </div>
                </div>
            </section>

            <div class="row">

                <?php foreach ($env_perso as $perso){ 
                
                
                if(!empty($perso['vide'])){ ?>
                    
                    <div class="user-vide col-12 col-sm-6 col-md-4 col-lg-3"></div>
                    
                <?php } else {
                
                ?>

                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="our-team">
                        <div class="picture">
                            <img class="img-fluid" src="
                            <?php if(!empty($perso['icon'])) {
                                echo $env_pp . $perso['icon'];
                            } else {
                                echo $env_pp_default;
                            } ?>
                            ">
                        </div>
                        <div class="team-content">
                            <h3 class="name"><?php echo $perso['name']; ?></h3>
                            <h4 class="title"><?php echo $perso['role']; ?></h4>
                        </div>
                        <ul class="social">

                            <?php
                            if(!empty($perso['facebook'])) { ?>
                                <li><a href="<?php echo $perso['facebook']; ?>" class="fab fa-facebook" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['instagram'])) { ?>
                                <li><a href="<?php echo $perso['instagram']; ?>" class="fab fa-instagram" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['twitter'])) { ?>
                                <li><a href="<?php echo $perso['twitter']; ?>" class="fab fa-twitter" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['youtube'])) { ?>
                                <li><a href="<?php echo $perso['youtube']; ?>" class="fab fa-youtube" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['soundcloud'])) { ?>
                                <li><a href="<?php echo $perso['soundcloud']; ?>" class="fab fa-soundcloud" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['github'])) { ?>
                                <li><a href="<?php echo $perso['github']; ?>" class="fab fa-github" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['behance'])) { ?>
                                <li><a href="<?php echo $perso['behance']; ?>" class="fab fa-behance" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['twitch'])) { ?>
                                <li><a href="<?php echo $perso['twitch']; ?>" class="fab fa-twitch" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['linkedin'])) { ?>
                                <li><a href="<?php echo $perso['linkedin']; ?>" class="fab fa-linkedin" aria-hidden="true"></a></li>
                            <?php }
                            if(!empty($perso['tiktok'])) { ?>
                                <li><a href="<?php echo $perso['tiktok']; ?>" class="fab fa-tiktok" aria-hidden="true"></a></li>
                            <?php }

                            ?>
                        </ul>
                    </div>
                </div>
            

                <?php } } ?>

                
            </div>
            <div style="text-align: center">
            
            <small>Un grand remerciement à nos freelance qui travaillent activement mais ne sont pas membres du projet</small>
            
            <br><br>

            <?php //tyrobtn("collaboration.php#recrut", "joinmembre", "Rejoindre l'équipe");?>
            
            <?php tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSdRZ5UxQCDDXHHx6xQKxgrS_JiwAZnr4QQbPs3glVem5-cOnA/viewform?usp=sf_link", "joinmembre", "Rejoindre l'équipe");?>
        
            </div>
        </div>

    </section>


    <br>
    <hr class="" style="background: rgba(161,161,161,0.6);">
    

    <section id="projet" class="container">
        <br>
        <h2>Ceux qu'on Sponsorise</h2>
        <p>Il s'agit d'organisations, de personnalités et de travailleurs d'internet que nous sponsorisons afin de les soutenir dans leurs projets.</p>
        <br>
    </section>

<div id="no-container">
    <section id="partenaire" class="container" style="
    padding-bottom: 75px;">

    <!-- desktop -->
<div class="sponso-desktop">
        
        <div class="row">
            
            <div class="col">
                <a target="_bank" href="https://www.twitch.tv/auroretvv" title="AuroreTVv">
                    <img src="<?php echo $env_assets; ?>part/AuroreTVv.jpg" alt="AuroreTVv">
                </a>
            </div>

            <div class="col">
                <a target="_bank" href="https://www.youtube.com/@MAEWANofficiel" title="MAEWAN">
                    <img src="<?php echo $env_assets; ?>part/MAEWAN.jpg" alt="MAEWAN">
                </a>
            </div>
            
            <div class="col">
                <a target="_bank" href="https://youtube.com/c/Eroniage" title="Eroniage">
                    <img src="<?php echo $env_assets; ?>part/Eroniage.png" alt="Eroniage">
                </a>
            </div>
            
        </div>
        
        <div class="row">


            <div class="col">
                <a target="_bank" href="https://www.twitch.tv/doublet_creator" title="DoubleT">
                    <img src="<?php echo $env_assets; ?>part/DoubleT.png" alt="DoubleT">
                </a>
            </div>

            <div class="col">
                <a target="_bank" href="https://www.linkedin.com/company/maxime-serveur/" title="Maxime/SERVEUR">
                    <img src="<?php echo $env_assets; ?>part/Maxime-SERVEUR.jpg" alt="maxime-serveur">
                </a>
            </div>
            
            <div class="col">
                <a target="_bank" href="https://www.linkedin.com/company/maxime-minecraft/" title="Maxime/MINECRAFT">
                    <img src="<?php echo $env_assets; ?>part/Maxime-MINECRAFT.png" alt="maxime-minecraft">
                </a>
            </div>
            
        </div>
</div>
<!-- mobile -->
<div class="sponso-mobile">


<div id="splide2">

                        <div class="splide__track" id="splide-track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.twitch.tv/auroretvv" title="AuroreTVv">
                                        <img src="<?php echo $env_assets; ?>part/AuroreTVv.jpg" alt="AuroreTVv">
                                    </a>
                                </li>

                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.youtube.com/@MAEWANofficiel" title="MAEWAN">
                                        <img src="<?php echo $env_assets; ?>part/MAEWAN.jpg" alt="MAEWAN">
                                    </a>
                                </li>
                                
                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.twitch.tv/doublet_creator" title="DoubleT">
                                        <img src="<?php echo $env_assets; ?>part/DoubleT.png" alt="DoubleT">
                                    </a>
                                </li>
                                        
                                <li class="splide__slide">
                                    <a target="_bank" href="https://youtube.com/c/Eroniage" title="Eroniage">
                                        <img src="<?php echo $env_assets; ?>part/Eroniage.png" alt="Eroniage">
                                    </a>
                                </li>
                                
                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.linkedin.com/company/maxime-serveur/" title="Maxime/SERVEUR">
                                        <img src="<?php echo $env_assets; ?>part/Maxime-SERVEUR.jpg" alt="maxime-serveur">
                                    </a>
                                </li>

                                <li class="splide__slide">
                                    <a target="_bank" href="https://www.linkedin.com/company/maxime-minecraft/" title="Maxime/MINECRAFT">
                                        <img src="<?php echo $env_assets; ?>part/Maxime-MINECRAFT.png" alt="maxime-minecraft">
                                    </a>
                                </li>
                        
                        
                            </ul> <!-- /.splide__list -->
                        </div> <!-- /.splide__track -->
                </div> <!-- /.splide -->


            <script>

            // SplideJS Slider. See full docs at:
            // https://splidejs.com/
            document.addEventListener('DOMContentLoaded', function () {
            var splide = new Splide('#splide2', {
                type         : 'loop',
                autoplay     : true,
                interval     : 1800,
                focus        : 'center',
                pagination   : false,
                arrow        : false,
                fixedWidth   : 173
            });

            
            splide.mount();

            });



            </script>













</div>
    </section>
        </div>    
    <!-- <br>
    <hr class="container" style="background: rgba(161,161,161,0.6);">

    <section id="projet" class="container">
        <br>
        <h2>Nous Rejoindre</h2>
        <p>Tyrolium recrute des membres passionnés par notre travail, nous n'avons pas spécialement de critères de sélection si ce n'est la compréhension de notre travail et l'investissement au sein de celui-ci ou d'un projet.</p>
        <br>
    </section>


    <section id="recrut">
        <ul class="container">
            <li>
                <h3>DÉVELOPPEUR<br>INFORMATIQUE</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSer9XcD21PCCqawiHfF82hhX1O-RUWattlnGf0o1iWu5mdLwg/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>GRAPHISTE,<br>DESIGNER</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSeqvsgsvkItfJyu09LvRGLyMyOczVliqTg2bF5QWFUi6GSIcw/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>MONTEUR<br>VIDÉO</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSeKHDYQTqZvkFK89LO1T5UQG1BoZcDIFz_n1KBA5tXNqyplzw/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>BUILDER<br>MINECRAFT</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLScKQkZcm5bEyT1P06yWF3NSR9-23wE_msztn_QcDf9G-HRU5g/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>COMPOSITEUR, MUSICIEN, <br>CHANTEUR</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSfV4Nb3D_S1EALC-INAt7M5uxwQHv3h0j3ltms1rtqVOgGWYQ/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>MODÉRATEUR, <br>ASSISTANT</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSc9DeAU_koGj3UJNYiB7judKpzkIPDUvDXGmvvs9z3cDF7XpA/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>ANIMATEUR<br>DISCORD</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSflU5SxdYVPOnyJZB0SWi4xNjqNJAFycPAMBAQkJDY_uzHu6w/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>COMMUNITY<br>MANAGER</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSdlVrklk0i8NPk8VqcK3ueDt6pOoM4LTHBiYnpovWjFDvKyCQ/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
            <li>
                <h3>MEMBRE SANS COMPÉCENSE PRÉSICE</h3>
                <br>
                <?php //tyrobtn("https://docs.google.com/forms/d/e/1FAIpQLSdRZ5UxQCDDXHHx6xQKxgrS_JiwAZnr4QQbPs3glVem5-cOnA/viewform?usp=sf_link", "recru", "Accedez au formulaire");?>
            </li>
        </ul>

    </section> -->


</main>

<?php footer(); ?> </body> </html>

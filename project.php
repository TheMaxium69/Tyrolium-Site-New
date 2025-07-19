<?php include "app/app.php"; $page = 2; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<main>
    <section id="projet">
        <div id="project-atom" class="row container">

            <div class="col-8">
                    <h2><?= $lang[$page]["about"]['title'] ?></h2>
                    <br id="991none">
                    <p class="container"><?= $lang[$page]["about"]['txt'] ?></p>
            </div>
            <div class="col-4">
                <img src="assets/atom_project_new.png" style="width: 100%;">
                <br>
            </div>
        </div>

        <hr id="hratom" style="background: rgb(161, 161, 161);">
        <br>
        <?php
            $nbBack = count($env_back);
            echo '<style> @media (min-width: 801px) {';
            for ($i = 0; $i <= $nbBack-1; $i++) {
                echo '
                #projet ul li#a'. $i .'{
                    background: linear-gradient(
                            to right,
                            #151515 30%,
                            rgba(0, 0, 0, 0.2) 50%
                    ),
                    url("'. $env_back[$i] .'");
                    background-size: cover;
                    background-position: center 35%;
                    border-radius: 13px;
                }';
                echo '
                body.light #projet ul li#a'. $i .'{
                    color: black;
                    background: linear-gradient(
                        to right,
                        white 30%,
                        rgba(0, 0, 0, 0.2) 50%
                    ),
                    url("'. $env_back[$i] .'");
                    background-size: cover;
                    background-position: center 35%;
                    border-radius: 13px;
                    box-shadow: 0 2px 6px 0 rgba(136, 148, 171, 0.2), 0 24px 20px -24px rgba(71, 82, 107, 0.1);
                }';
            }
            echo '} @media (max-width: 800px) {';

            for ($i = 0; $i <= $nbBack-1; $i++) {
                echo '
                    #projet ul li#a'. $i .'{
                        background: linear-gradient(
                                to bottom,
                                rgba(0, 0, 0, 0.2) 130px,
                                #151515 30%
                        ),
                        url("'. $env_back[$i] .'");
                        background-size: cover;
                        border-radius: 13px;';
                if ($i == 0){
                    echo 'background-position: center 300%;';
                } else {
                    echo 'background-position: center 0%;';
                }
                echo '}';

                echo '
                    body.light #projet ul li#a'. $i .'{
                        background: linear-gradient(
                                to bottom,
                                rgba(0, 0, 0, 0.2) 130px,
                                white 30%
                        ),
                        url("'. $env_back[$i] .'");
                        background-size: cover;
                        border-radius: 13px;
                        box-shadow: 0 2px 6px 0 rgba(136, 148, 171, 0.2), 0 24px 20px -24px rgba(71, 82, 107, 0.1);';
                if ($i == 0){
                    echo 'background-position: center 300%;';
                } else {
                    echo 'background-position: center 0%;';
                }
                echo '}';
            }

            echo '} </style>'; ?>
        <ul>

            <li id="a0">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroServS3.png" logo="assets/anim/TyroServ%20Anim.png" gif="assets/anim/tyroserv.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroservLogo">
                <h2><?= $lang[$page]["tyroserv"]['title'] ?></h2>
                <p><?= $lang[$page]["tyroserv"]['content'] ?></p>
                <?php if ($lang[$page]["tyroserv"]['sub'] !== "") { ?><small><?= $lang[$page]["tyroserv"]['sub'] ?></small><br><?php } ?>
                <a href="https://www.tyroserv.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["tyroserv"]['btn'] ?></a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumserver/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://twitter.com/tyrolium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/@TyroServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/TyroServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.curseforge.com/minecraft/mc-mods/tyromod/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/curse.png" alt="curseforge"/></a>
                <a href="https://www.tiktok.com/@tyroserv?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/tyroserv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>   

            <li id="a8">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/SolidServ.png" logo="assets/anim/SolidServ%20Anim.png" gif="http://tyrolium.fr/Contenu/Image/SolidServ%20Anim2.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="SolidServLogo">
                <h2><?= $lang[$page]["solidserv"]['title'] ?></h2>
                <p><?= $lang[$page]["solidserv"]['content'] ?></p>
                <?php if ($lang[$page]["solidserv"]['sub'] !== "") { ?><small><?= $lang[$page]["solidserv"]['sub'] ?></small><br><?php } ?>
                <a href="https://solidserv.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["solidserv"]['btn'] ?></a><br>
                <a href="https://discord.gg/ycwWzmCQNx" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/solidserv/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://twitter.com/solid_serv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCB3F4NN820r3Se4ZZinQpHA" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/SolidServ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.tiktok.com/@solidserv?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/solidserv" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a1">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Gamenium.png" logo="http://tyrolium.fr/Contenu/Image/Gamenium.png" gif="https://cdn.discordapp.com/attachments/982397863462072330/982756304617631805/Gamenium_animation.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="GameniumLogo">
                <h2><?= $lang[$page]["gamenium"]['title'] ?></h2>
                <p><?= $lang[$page]["gamenium"]['content'] ?></p>
                <?php if ($lang[$page]["gamenium"]['sub'] !== "") { ?><small><?= $lang[$page]["gamenium"]['sub'] ?></small><br><?php } ?>
                <a href="https://gamenium.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["gamenium"]['btn'] ?></a><br>
                <a href="https://www.instagram.com/gamenium/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.youtube.com/channel/UCOGbXX9AOJR-dhuvqFufDIQ/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.tiktok.com/@gamenium?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.twitch.tv/gamenium_off" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitch.png" alt="twitch"/></a>
                <a href="https://www.linkedin.com/company/gamenium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>

            <li id="a14">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Avra (Blue).png"  alt="AvraLogo">
                <h2><?= $lang[$page]["avra"]['title'] ?></h2>
                <p><?= $lang[$page]["avra"]['content'] ?></p>
                <?php if ($lang[$page]["avra"]['sub'] !== "") { ?><small><?= $lang[$page]["avra"]['sub'] ?></small><br><?php } ?>
                <a href="https://www.avra.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["avra"]['btn'] ?></a><br>
<!--                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>-->
            </li>

            <li id="a3">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" logo="http://tyrolium.fr/Contenu/Image/Tyrolium Studio.png" gif="assets/anim/TyroStudio%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="StudioLogo">
                <h2><?= $lang[$page]["tyrostudio"]['title'] ?></h2>
                <p><?= $lang[$page]["tyrostudio"]['content'] ?></p>
                <?php if ($lang[$page]["tyrostudio"]['sub'] !== "") { ?><small><?= $lang[$page]["tyrostudio"]['sub'] ?></small><br><?php } ?>
                <a href="https://tyrostudio.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["tyrostudio"]['btn'] ?></a><br>
                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/tyroliumstudio/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.linkedin.com/company/tyrostudio" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>


            <li id="a15">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/NexiumiaCRM.png" alt="NexiumiaCRMLogo">
                <h2><?= $lang[$page]["nexiumiacrm"]['title'] ?></h2>
                <p><?= $lang[$page]["nexiumiacrm"]['content'] ?></p>
                <?php if ($lang[$page]["nexiumiacrm"]['sub'] !== "") { ?><small><?= $lang[$page]["nexiumiacrm"]['sub'] ?></small><br><?php } ?>
                <a href="https://nexiumiacrm.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["nexiumiacrm"]['btn'] ?></a><br>
                <!--                <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>-->
            </li>

            <li id="a13">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Vturias.png" alt="VturiasLogo">
                <h2><?= $lang[$page]["vturias"]['title'] ?></h2>
                <p><?= $lang[$page]["vturias"]['content'] ?></p>
                <?php if ($lang[$page]["vturias"]['sub'] !== "") { ?><small><?= $lang[$page]["vturias"]['sub'] ?></small><br><?php } ?>
                <a href="https://www.vturias.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["vturias"]['btn'] ?></a><br>
                <a href="https://twitter.com/Vturias_Project" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://discord.gg/nUc8kED8st" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://www.instagram.com/vturias_project/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://www.youtube.com/@VturiasProject" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://www.tiktok.com/@vturias_project" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.linkedin.com/company/vturias/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>

            </li>

            <li id="a11">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/Influnias.png" logo="assets/anim/Influnias%20Anim.png" gif="assets/anim/Influnias%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="InfluniasLogo">
                <h2><?= $lang[$page]["influnias"]['title'] ?></h2>
                <p><?= $lang[$page]["influnias"]['content'] ?></p>
                <?php if ($lang[$page]["influnias"]['sub'] !== "") { ?><small><?= $lang[$page]["influnias"]['sub'] ?></small><br><?php } ?>
                <a href="https://www.influnias.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/><?= $lang[$page]["influnias"]['btn'] ?></a><br>
                <a href="https://www.instagram.com/influnias/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                <a href="https://discord.gg/ycwWzmCQNx" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                <a href="https://twitter.com/influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitter.png" alt="twitter"/></a>
                <a href="https://www.youtube.com/channel/UCm0ASpIy2CJsS9hzVedo_yg" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                <a href="https://github.com/Influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                <a href="https://www.tiktok.com/@influnias?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                <a href="https://www.twitch.tv/influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/twitch.png" alt="twitch"/></a>
                <a href="https://www.linkedin.com/company/influnias" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
            </li>
            
            <bottom id="btn-old-project">
                
                <label><?= $lang[$page]["old-btn"] ?></label><br>
                <i class="fas fa-chevron-down"></i>
        
            </bottom>

            <style>
            
                #btn-old-project{
                    width: 100%;
                }


            </style>

        </ul>

        <br><br>

        <style id="old-script">

            #old-project{
                display: none;
            }


        </style>

        <script>

        var oldbtn = document.getElementById("btn-old-project");
        let tempProject = 1;

        oldbtn.addEventListener("click", e => {
            
            let articleOld = document.getElementById("old-script")

            if(tempProject == 1){

                articleOld.innerHTML = '#old-project{display: unset;}';
                oldbtn.innerHTML = ' <label>Voir les anciens projets</label><br><i class="fas fa-chevron-up"></i>';
                tempProject = 2;

            } else {

                articleOld.innerHTML = '#old-project{display: none;}';
                oldbtn.innerHTML = ' <label>Voir les anciens projets</label><br><i class="fas fa-chevron-down"></i>';
                tempProject = 1;

            }

        });

        </script>

    <div id="old-project">
        
        <br><br>

            <div id="project-atom" class="row container">

                <div class="col">
                        <h2><?= $lang[$page]["about-old"]["title"] ?></h2>
                        <br id="991none">
                        <p class="container"><?= $lang[$page]["about-old"]["txt"] ?></p>
                </div>
            </div>

        <ul>    
            <li id="a4">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Wonderlium.png" logo="http://tyrolium.fr/Contenu/Image/Wonderlium.png" gif="assets/anim/Wonderlium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="WonderliumLogo">
                <h2><?= $lang[$page]["wonderlium"]["title"] ?><br><span class="badge badge-pill badge-danger infoNew-A4"><?= $lang[$page]["stat-old"]["red"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A4" style="display: none;">
                    <p>Collectif réalisant des vidéos<br> sur l'univers geek.</p>
                    <small>Nouvelle vidéo disponible sur notre chaine youtube.</small><br>
                    <a href="https://www.youtube.com/channel/UC8tEUehEz2p53Pw8wSky3TQ" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/> Allez sur notre chaine</a><br>
                    <a href="http://site.wonderlium.yt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/></a>
                    <a href="https://www.instagram.com/wonderlium/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.youtube.com/channel/UCF15KKWE_j0fbV6olDN8W8Q" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://github.com/Wonderlium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                    <a href="https://www.tiktok.com/@wonderlium?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                    <a href="https://www.linkedin.com/company/wonderlium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A4">
                    <p><?= $lang[$page]["wonderlium"]["content"] ?></p>
                    <!-- <small>Stat : abo:</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A4" onclick="oldProjectBtn('4','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>
                
            
            </li>

            <li id="a5">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/Selemusium.png" logo="assets/anim/Selemusium%20Anim.png" gif="assets/anim/Selemusium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="SelemusiumLogo">
                <h2><?= $lang[$page]["selemusium"]["title"] ?><br><span class="badge badge-pill badge-danger infoNew-A5"><?= $lang[$page]["stat-old"]["red"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A5" style="display: none;">
                    <p>Projet de création de musique.</p>
                    <small>Nouvel Album disponible sur le site officiel.</small><br>
                    <a href="https://selemusium.xyz/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                    <a href="https://open.spotify.com/artist/2yWQ9fey7HTSX7ChOfvl3R" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/spotify.png" alt="spotify"/></a>
                    <a href="https://www.deezer.com/fr/artist/174249627" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/deezer.png" alt="deezer"/></a>
                    <a href="https://soundcloud.com/selemusium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/soundcloud.png" alt="soundcloud"/></a>
                    <a href="https://www.instagram.com/selemusium/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.youtube.com/channel/UC71QZyaMR2AiK00Hz7fZ_gw/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/youtube.png" alt="youtube"/></a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://github.com/Selemusium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                    <a href="https://www.tiktok.com/@selemusium?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                    <a href="https://www.linkedin.com/company/selemusium" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A5">
                    <p><?= $lang[$page]["selemusium"]["content"] ?></p>
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A5" onclick="oldProjectBtn('5','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>

            </li>

            <li id="a2">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" logo="https://tyrolium.fr/Contenu/Image/TyroDiscord.png" gif="assets/anim/TyroDiscord%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroDiscord">
                <h2><?= $lang[$page]["tyrodiscord"]["title"] ?><br><span class="badge badge-pill badge-primary infoNew-A2"><?= $lang[$page]["stat-old"]["blue"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A2" style="display: none;">
                    <p>Projet de bot et logiciel pour<br> améliorer l'expérience de Discord.</p>
                    <small>Disponible entièrement sur le site officiel.</small><br>
                    <a href="https://www.tyrodiscord.xyz/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                    <a href="https://www.instagram.com/tyrodiscord/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://github.com/TyroDiscord" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/github.png" alt="github"/></a>
                    <a href="https://www.linkedin.com/company/tyrodiscord" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A2">
                    <p><?= $lang[$page]["tyrodiscord"]["content"] ?></p>
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A2" onclick="oldProjectBtn('2','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>

            </li>

            <li id="a6">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroShop.png" logo="https://tyrolium.fr/Contenu/Image/TyroShop.png" gif="assets/anim/TyroShop%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="ShopLogo">
                <h2><?= $lang[$page]["tyroshop"]["title"] ?><br><span class="badge badge-pill badge-primary infoNew-A6"><?= $lang[$page]["stat-old"]["blue"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A6" style="display: none;">
                    <p>Notre boutique avec des collections<br> faites par nos graphistes.</p>
                    <small>Disponible entièrement sur le site officiel.</small><br>
                    <a href="http://shop.tyrolium.fr/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/link.png" alt="link"/> Allez sur le site</a><br>
                    <a href="https://discord.gg/km8h5jHezt" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/discord.png" alt="discord"/></a>
                    <a href="https://www.instagram.com/tyroliumshop/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.tiktok.com/@tyroshop?" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/tiktok.png" alt="tiktok"/></a>
                    <a href="https://www.linkedin.com/company/tyroshop" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A6">
                    <p><?= $lang[$page]["tyroshop"]["content"] ?></p>
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A6" onclick="oldProjectBtn('6','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>

            </li>

            <li id="a7">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/DuoGramme.png" logo="https://tyrolium.fr/Contenu/Image/DuoGramme.png" gif="assets/anim/DuoGramme%20Anim.gif"  onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="Duo-Gramme">
                <h2><?= $lang[$page]["duogramme"]["title"] ?><br><span class="badge badge-pill badge-danger infoNew-A7"><?= $lang[$page]["stat-old"]["red"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A7" style="display: none;">
                    <p>Projet de plusieurs concepts divertissements<br> et informatifs sur les réseaux sociaux.</p>
                    <small>En collaboration avec l'entreprise "<a class="btn-part" href="https://www.youtube.com/c/MA3WAN">MA3WAN</a>" .</small><br>
                    <a href="https://www.instagram.com/nftgramme/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/> Allez sur notre Instagram</a><br>
                    <a href="https://www.instagram.com/albumaugramme/" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/instagram.png" alt="instagram"/></a>
                    <a href="https://www.linkedin.com/company/duogramme" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/></a>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A7">
                    <p><?= $lang[$page]["duogramme"]["content"] ?></p>
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A7" onclick="oldProjectBtn('7','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>

            </li>

            <li id="a10">
                <img class="logo" src="https://tyrolium.fr/Contenu/Image/TyroStudent.png" logo="http://tyrolium.fr/Contenu/Image/TyroStudent.png" gif="assets/anim/TyroStudent%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="TyroStudent">
                <h2><?= $lang[$page]["tyrostudent"]["title"] ?><br><span class="badge badge-pill badge-warning infoNew-A10"><?= $lang[$page]["stat-old"]["yellow"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A10" style="display: none;">
                    <p>Projet de Formation de Tyrolium</p>
                    <a href="https://www.linkedin.com/company/tyrostudent" class="btn" target="_blank" ><img class="icon" src="http://tyrolium.fr/Contenu/Image/icone/linkedIn.png" alt="linkedin"/> Allez sur notre Linkedin</a><br>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A10">
                    <p><?= $lang[$page]["tyrostudent"]["content"] ?></p>
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A10" onclick="oldProjectBtn('10','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>

            </li>

            <li id="a9">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Chantium.png" logo="http://tyrolium.fr/Contenu/Image/Chantium.png" gif="assets/anim/Chantium%20Anim.gif" onmouseover=hoverProject(this); onmouseout=unHoverProject(this); alt="ChantiumLogo">
                <h2><?= $lang[$page]["chantium"]["title"] ?><br><span class="badge badge-pill badge-info infoNew-A9"><?= $lang[$page]["stat-old"]["cyan"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A9" style="display: none;">
                    <p>Application de gestion afin de simplifier la communication<br> des different cores de métier sur un chantier</p>
                    <small>En collaboration avec l'entreprise "<a class="btn-part" href="https://batirpositif.com">Bâtir Positif</a>" .</small><br>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A9">
                    <p><?= $lang[$page]["chantium"]["content"] ?></p>
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A9" onclick="oldProjectBtn('9','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>

            </li>

            <li id="a12">
                <img class="logo" src="http://tyrolium.fr/Contenu/Image/Freenium.png" alt="FreeniumLogo">
                <h2><?= $lang[$page]["freenium"]["title"] ?><br><span class="badge badge-pill badge-primary infoNew-A12"><?= $lang[$page]["stat-old"]["blue"] ?></span></h2>

                <!-- Text Old -->
                <div class="infoOld-A12" style="display: none;">
                    <p>Secteur réservé aux activités de freelance. </p>
                </div>
                <!-- Text Explication -->
                <div class="infoNew-A12">
                    <p><?= $lang[$page]["freenium"]["content"] ?></p>
                    <!-- <small>Stat : NB</small><br> -->
                </div>

                <hr style="width: 70%;background: white;margin-left: auto;margin-right: auto;">
                <bottom class="btn btnInfoOld btnInfoOld-A12" onclick="oldProjectBtn('12','def')" data-close="<?= $lang[$page]['btn-old']['close'] ?>" data-open="<?= $lang[$page]['btn-old']['open'] ?>"><i class="fas fa-chevron-down"></i><?= $lang[$page]['btn-old']['open'] ?></bottom>
            </li>
        </ul>
    </div>
        <style>

            .btn-part:hover{
                text-decoration: underline;
            }

        </style>
    </section>
</main>

<?php footer(); ?> </body> </html>

<?php include "app/app.php"; $page = 3; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>">
<?php if (!empty($_GET['navbar']) && $_GET['navbar'] == "off") { ?> <style> body{ padding-top: 0px!important;}</style><?php } else { ?><header> <?php navbar($page); ?> </header><?php } ?>

<div class="heading-projet-img" id="server-heading"></div>

<main id="service">
    <style> main {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 304 304' width='304' height='304'%3E%3Cpath fill='%239C92AC' fill-opacity='0.1' d='M44.1 224a5 5 0 1 1 0 2H0v-2h44.1zm160 48a5 5 0 1 1 0 2H82v-2h122.1zm57.8-46a5 5 0 1 1 0-2H304v2h-42.1zm0 16a5 5 0 1 1 0-2H304v2h-42.1zm6.2-114a5 5 0 1 1 0 2h-86.2a5 5 0 1 1 0-2h86.2zm-256-48a5 5 0 1 1 0 2H0v-2h12.1zm185.8 34a5 5 0 1 1 0-2h86.2a5 5 0 1 1 0 2h-86.2zM258 12.1a5 5 0 1 1-2 0V0h2v12.1zm-64 208a5 5 0 1 1-2 0v-54.2a5 5 0 1 1 2 0v54.2zm48-198.2V80h62v2h-64V21.9a5 5 0 1 1 2 0zm16 16V64h46v2h-48V37.9a5 5 0 1 1 2 0zm-128 96V208h16v12.1a5 5 0 1 1-2 0V210h-16v-76.1a5 5 0 1 1 2 0zm-5.9-21.9a5 5 0 1 1 0 2H114v48H85.9a5 5 0 1 1 0-2H112v-48h12.1zm-6.2 130a5 5 0 1 1 0-2H176v-74.1a5 5 0 1 1 2 0V242h-60.1zm-16-64a5 5 0 1 1 0-2H114v48h10.1a5 5 0 1 1 0 2H112v-48h-10.1zM66 284.1a5 5 0 1 1-2 0V274H50v30h-2v-32h18v12.1zM236.1 176a5 5 0 1 1 0 2H226v94h48v32h-2v-30h-48v-98h12.1zm25.8-30a5 5 0 1 1 0-2H274v44.1a5 5 0 1 1-2 0V146h-10.1zm-64 96a5 5 0 1 1 0-2H208v-80h16v-14h-42.1a5 5 0 1 1 0-2H226v18h-16v80h-12.1zm86.2-210a5 5 0 1 1 0 2H272V0h2v32h10.1zM98 101.9V146H53.9a5 5 0 1 1 0-2H96v-42.1a5 5 0 1 1 2 0zM53.9 34a5 5 0 1 1 0-2H80V0h2v34H53.9zm60.1 3.9V66H82v64H69.9a5 5 0 1 1 0-2H80V64h32V37.9a5 5 0 1 1 2 0zM101.9 82a5 5 0 1 1 0-2H128V37.9a5 5 0 1 1 2 0V82h-28.1zm16-64a5 5 0 1 1 0-2H146v44.1a5 5 0 1 1-2 0V18h-26.1zm102.2 270a5 5 0 1 1 0 2H98v14h-2v-16h124.1zM242 149.9V160h16v34h-16v62h48v48h-2v-46h-48v-66h16v-30h-16v-12.1a5 5 0 1 1 2 0zM53.9 18a5 5 0 1 1 0-2H64V2H48V0h18v18H53.9zm112 32a5 5 0 1 1 0-2H192V0h50v2h-48v48h-28.1zm-48-48a5 5 0 0 1-9.8-2h2.07a3 3 0 1 0 5.66 0H178v34h-18V21.9a5 5 0 1 1 2 0V32h14V2h-58.1zm0 96a5 5 0 1 1 0-2H137l32-32h39V21.9a5 5 0 1 1 2 0V66h-40.17l-32 32H117.9zm28.1 90.1a5 5 0 1 1-2 0v-76.51L175.59 80H224V21.9a5 5 0 1 1 2 0V82h-49.59L146 112.41v75.69zm16 32a5 5 0 1 1-2 0v-99.51L184.59 96H300.1a5 5 0 0 1 3.9-3.9v2.07a3 3 0 0 0 0 5.66v2.07a5 5 0 0 1-3.9-3.9H185.41L162 121.41v98.69zm-144-64a5 5 0 1 1-2 0v-3.51l48-48V48h32V0h2v50H66v55.41l-48 48v2.69zM50 53.9v43.51l-48 48V208h26.1a5 5 0 1 1 0 2H0v-65.41l48-48V53.9a5 5 0 1 1 2 0zm-16 16V89.41l-34 34v-2.82l32-32V69.9a5 5 0 1 1 2 0zM12.1 32a5 5 0 1 1 0 2H9.41L0 43.41V40.6L8.59 32h3.51zm265.8 18a5 5 0 1 1 0-2h18.69l7.41-7.41v2.82L297.41 50H277.9zm-16 160a5 5 0 1 1 0-2H288v-71.41l16-16v2.82l-14 14V210h-28.1zm-208 32a5 5 0 1 1 0-2H64v-22.59L40.59 194H21.9a5 5 0 1 1 0-2H41.41L66 216.59V242H53.9zm150.2 14a5 5 0 1 1 0 2H96v-56.6L56.6 162H37.9a5 5 0 1 1 0-2h19.5L98 200.6V256h106.1zm-150.2 2a5 5 0 1 1 0-2H80v-46.59L48.59 178H21.9a5 5 0 1 1 0-2H49.41L82 208.59V258H53.9zM34 39.8v1.61L9.41 66H0v-2h8.59L32 40.59V0h2v39.8zM2 300.1a5 5 0 0 1 3.9 3.9H3.83A3 3 0 0 0 0 302.17V256h18v48h-2v-46H2v42.1zM34 241v63h-2v-62H0v-2h34v1zM17 18H0v-2h16V0h2v18h-1zm273-2h14v2h-16V0h2v16zm-32 273v15h-2v-14h-14v14h-2v-16h18v1zM0 92.1A5.02 5.02 0 0 1 6 97a5 5 0 0 1-6 4.9v-2.07a3 3 0 1 0 0-5.66V92.1zM80 272h2v32h-2v-32zm37.9 32h-2.07a3 3 0 0 0-5.66 0h-2.07a5 5 0 0 1 9.8 0zM5.9 0A5.02 5.02 0 0 1 0 5.9V3.83A3 3 0 0 0 3.83 0H5.9zm294.2 0h2.07A3 3 0 0 0 304 3.83V5.9a5 5 0 0 1-3.9-5.9zm3.9 300.1v2.07a3 3 0 0 0-1.83 1.83h-2.07a5 5 0 0 1 3.9-3.9zM97 100a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-48 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 96a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-144a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm96 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM49 36a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-32 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM33 68a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 240a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm80-176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 48a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm112 176a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-16 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 180a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 16a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0-32a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16 0a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM17 84a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm32 64a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm16-16a3 3 0 1 0 0-6 3 3 0 0 0 0 6z'%3E%3C/path%3E%3C/svg%3E");
        } </style>

    <section id="service-start" class="row container">
        <div class="col-9">
            <h2 class="titleP"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Serveur Informatique</h2>
            <br id="991none">
            <p class="container">Nous somme en mesure de vous offrire une palette de service<br> autour de votre serveur informatique et du déploiement de vos Logiciel.</p>
            <br>
        </div>
        <div class="col-3">
            <img src="assets/Online%20storage_Monochromatic.png" style="width: 125px;margin-left: -185px;">
            <br>
        </div>
    </section>
    <br>
    <hr style="background: rgb(161, 161, 161); margin: 0px 20% ">

    <br>

    <section id="service-start" class="container">

        <h2 class="titleP"><i class="fas fa-caret-right" style="  color: #1325d7;"></i> Nos Formule</h2>

    </section>


    <section id="offre">

        <div class="row desktop" id="ord2">


            <div class="col">

                <div class="trans container" data-size="3">

                    <h2>VPS</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 12€/Mois</h3>

                    <ul>
                        <li>
                            Processeur jusqu'a 4.5GHz+
                        </li>

                        <li>
                            Ram dédiée jusqu'a 32go
                        </li>

                        <li>
                            Stockage <j>SSD NVMe</j> jusqu'a 500go
                        </li>

                        <li>
                            Bande passante à partir de <j>250Mbit/s</j>
                        </li>

                        <li>
                            Utilisateur root/Administrateur
                        </li>

                        <li>
                            Acces <j>SSH/SFTP</j>
                        </li>

                    </ul>


                    <button id="btn-service" class="tyrobutton" data-url="https://solidserv.fr/vps.php">voir plus</button>
                </div>

            </div>


            <div class="col">

                <div class="trans container" data-size="2G">

                    <h2>Site Web</h2>
                    <hr>

                    <h3><g>à partir de :</g><br> 5€/Mois</h3>

                    <ul>
                        <li>
                            Trafic jusqu'à <j>100 000 Visites/Mois</j>
                        </li>

                        <li>
                            Compatible <j>PHP</j> (Toute Version)
                        </li>

                        <li>
                            Stockage SSD NVMe jusqu'a 100go
                        </li>

                        <li>
                            Acces <j>FTP/SFTP</j> et <j>cPanel</j>
                        </li>
                        <li>
                            Installation en 1-clic du <j>SSL</j>
                        </li>
                        <li>
                            Dispo avec Wordpress/Shopify...
                        </li>
                        <li>
                            BDD <j>MySQL/MariaDB</j> Offerte
                        </li>

                    </ul>

                    <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr1();">indisponible</button>
                </div>

            </div>
            <div class="col">

                <div class="trans container" data-size="2D">

                    <h2>Minecraft</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 3€/Mois</h3>

                    <ul>
                        <li>
                            Allumé <j>24h/24</j> et <j>7J/7</j>
                        </li>

                        <li>
                            Processeur jusqu'a 4.5GHz+
                        </li>

                        <li>
                            <j>Slot ilimité</j>
                        </li>

                        <li>
                            Ram dédiée jusqu'a 32go
                        </li>
                        <li>
                            Acces <j>FTP/SFTP</j>
                        </li>
                        <li>
                            Spigot/Forge/Sponge/OpenMod ...
                        </li>
                        <li>
                            Panel Pterodactyl
                        </li>

                    </ul>


                    <button id="btn-service" class="tyrobutton" data-url="https://solidserv.fr/minecraft.php">voir plus</button>
                </div>

            </div>
            <div class="col">

                <div class="trans container" data-size="1">

                    <h2>FiveM</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 10€/Mois</h3>

                    <ul>
                        <li>
                            Processeur jusqu'a 4.5GHz+
                        </li>
                        <li>
                            <j>Anti-DDOS</j> Game
                        </li>

                        <li>
                            Uptime de 99%
                        </li>
                        <li>
                            Ram dédiée jusqu'a 32go
                        </li>


                        <li>
                            Acces <j>FTP/SFTP</j>
                        </li>
                        <li>
                            BDD <j>MySQL/MariaDB</j> Offerte
                        </li>
                        <li>
                            Panel Pterodactyl
                        </li>

                    </ul>

                    <button id="btn-service" class="tyrobutton" data-url="fivem.php">voir plus</button>


                </div>

            </div>

            <div class="col">

                <div class="trans container" data-size="1">

                    <h2>Stockage</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 4.50€/Mois</h3>

                    <ul>

                        <li>
                            Stockage jusqu'a <j>100To</j>
                        </li>

                        <li>
                            Bande passante à partir de 250Mbit/s
                        </li>

                        <li>
                            Jusqu'à <j>100 utilisateurs</j> connectés
                        </li>

                        <li>
                            Disque dur <j>Raid</j> ou <j>SSD NVMe</j>
                        </li>

                        <li>
                            Allumé <j>24h/24</j> et <j>7J/7</j>
                        </li>


                        <li>
                            Acces FTP/SFTP
                        </li>

                    </ul>

                    <div>

                        <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr();">indisponible</button>

                    </div>
                </div>

            </div>



        </div>


        <div class="row desktop">

            <div class="col">

                <div id="o1" class="trans container" data-size="1">

                    <h2>Stockage</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 4.50€/Mois</h3>

                    <ul>

                        <li>
                            Stockage jusqu'a <j>100To</j>
                        </li>

                        <li>
                            Bande passante à partir de 250Mbit/s
                        </li>

                        <li>
                            Jusqu'à <j>100 utilisateurs</j> connectés
                        </li>

                        <li>
                            Disque dur <j>Raid</j> ou <j>SSD NVMe</j>
                        </li>

                        <li>
                            Allumé <j>24h/24</j> et <j>7J/7</j>
                        </li>


                        <li>
                            Acces FTP/SFTP
                        </li>

                    </ul>

                    <div>

                        <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr();">indisponible</button>

                    </div>
                </div>

            </div>
            <div class="col">

                <div id="o2" class="trans container" data-size="2G">

                    <h2>Site Web</h2>
                    <hr>

                    <h3><g>à partir de :</g><br> 5€/Mois</h3>

                    <ul>
                        <li>
                            Trafic jusqu'à <j>100 000 Visites/Mois</j>
                        </li>

                        <li>
                            Compatible <j>PHP</j> (Toute Version)
                        </li>

                        <li>
                            Stockage SSD NVMe jusqu'a 100go
                        </li>

                        <li>
                            Acces <j>FTP/SFTP</j> et <j>cPanel</j>
                        </li>
                        <li>
                            Installation en 1-clic du <j>SSL</j>
                        </li>
                        <li>
                            Dispo avec Wordpress/Shopify...
                        </li>
                        <li>
                            BDD <j>MySQL/MariaDB</j> Offerte
                        </li>

                    </ul>

                    <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr1();">indisponible</button>
                </div>

            </div>
            <div class="col">

                <div id="o3" class="trans container" data-size="3">

                    <h2>VPS</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 12€/Mois</h3>

                    <ul>
                        <li>
                            Processeur jusqu'a 4.5GHz+
                        </li>

                        <li>
                            Ram dédiée jusqu'a 32go
                        </li>

                        <li>
                            Stockage <j>SSD NVMe</j> jusqu'a 500go
                        </li>

                        <li>
                            Bande passante à partir de <j>250Mbit/s</j>
                        </li>

                        <li>
                            Utilisateur root/Administrateur
                        </li>

                        <li>
                            Acces <j>SSH/SFTP</j>
                        </li>

                    </ul>


                    <button id="btn-service" class="tyrobutton" data-url="https://solidserv.fr/vps.php">voir plus</button>
                </div>

            </div>
            <div class="col">

                <div id="o4" class="trans container" data-size="2D">

                    <h2>Minecraft</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 3€/Mois</h3>

                    <ul>
                        <li>
                            Allumé <j>24h/24</j> et <j>7J/7</j>
                        </li>

                        <li>
                            Processeur jusqu'a 4.5GHz+
                        </li>

                        <li>
                            <j>Slot ilimité</j>
                        </li>

                        <li>
                            Ram dédiée jusqu'a 32go
                        </li>
                        <li>
                            Acces <j>FTP/SFTP</j>
                        </li>
                        <li>
                            Spigot/Forge/Sponge/OpenMod ...
                        </li>
                        <li>
                            Panel Pterodactyl
                        </li>

                    </ul>


                    <button id="btn-service" class="tyrobutton" data-url="https://solidserv.fr/minecraft.php">voir plus</button>
                </div>

            </div>
            <div class="col">

                <div id="o5" class="trans container" data-size="1">

                    <h2>Dédier</h2>
                    <hr>
                    <h3><g>à partir de :</g><br> 60€/Mois</h3>

                    <ul>
                        <li>
                            Processeur jusqu'a 4.5GHz+
                        </li>
                        <li>
                            <j>Anti-DDOS</j> Game
                        </li>

                        <li>
                            Uptime de 99%
                        </li>
                        <li>
                            Ram dédiée jusqu'a 32go
                        </li>


                        <li>
                            Acces <j>FTP/SFTP</j>
                        </li>
                        <li>
                            BDD <j>MySQL/MariaDB</j> Offerte
                        </li>
                        <li>
                            Panel Pterodactyl
                        </li>

                    </ul>

                    <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr2();">INDISPONILE</button>


                </div>

            </div>



        </div>
        <div class="row mobile">

            <div class="col-6">
                <div class="row container">
                    <div class="col-5">
                        <h2>VPS</h2>
                        <hr>
                        <h3><g>à partir de :</g><br> 12€/Mois</h3>

                        <button id="btn-service" class="tyrobutton" data-url="https://solidserv.fr/vps.php">voir plus</button>
                    </div>
                    <div class="col-7">
                        <ul>
                            <li>
                                Processeur jusqu'a 4.5GHz+
                            </li>

                            <li>
                                Ram dédiée jusqu'a 32go
                            </li>

                            <li>
                                Stockage <j>SSD NVMe</j> jusqu'a 500go
                            </li>

                            <li>
                                Bande passante à partir de <j>250Mbit/s</j>
                            </li>

                            <li>
                                Utilisateur root/Administrateur
                            </li>

                            <li>
                                Acces <j>SSH/SFTP</j>
                            </li>


                        </ul>
                    </div>
                </div>
            </div><div class="col-6">
                <div class="row container">
                    <div class="col-5">
                        <h2>Site Web</h2>
                        <hr>
                        <h3><g>à partir de :</g><br> 5€/Mois</h3>

                        <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr1();">indisponibles</button>
                    </div>
                    <div class="col-7">
                        <ul>
                            <li>
                                Trafic jusqu'à <j>100 000 Visites/Mois</j>
                            </li>

                            <li>
                                Compatible <j>PHP</j> (Toute Version)
                            </li>

                            <li>
                                Stockage SSD NVMe jusqu'a 100go
                            </li>

                            <li>
                                Acces <j>FTP/SFTP</j> et <j>cPanel</j>
                            </li>
                            <li>
                                Installation en 1-clic du <j>SSL</j>
                            </li>
                            <li>
                                Dispo avec Wordpress/Shopify...
                            </li>
                            <li>
                                BDD <j>MySQL/MariaDB</j> Offerte
                            </li>


                        </ul>
                    </div>
                </div>
            </div><div class="col-6">
                <div class="row container">
                    <div class="col-5">
                        <h2>Minecraft</h2>
                        <hr>
                        <h3><g>à partir de :</g><br> 3€/Mois</h3>

                        <button id="btn-service" class="tyrobutton" data-url="https://solidserv.fr/minecraft.php">voir plus</button>
                    </div>
                    <div class="col-7">
                        <ul>
                            <li>
                                Allumé <j>24h/24</j> et <j>7J/7</j>
                            </li>

                            <li>
                                Processeur jusqu'a 4.5GHz+
                            </li>

                            <li>
                                <j>Slot ilimité</j>
                            </li>

                            <li>
                                Ram dédiée jusqu'a 32go
                            </li>
                            <li>
                                Acces <j>FTP/SFTP</j>
                            </li>
                            <li>
                                Spigot/Forge/Sponge/OpenMod ...
                            </li>
                            <li>
                                Panel Pterodactyl
                            </li>


                        </ul>
                    </div>
                </div>
            </div><div class="col-6">
                <div class="row container">
                    <div class="col-5">
                        <h2>Dédier</h2>
                        <hr>
                        <h3><g>à partir de :</g><br> 60€/Mois</h3>

                        <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr2();">INDISPONIBLE</button>
                    </div>
                    <div class="col-7">
                        <ul>
                            <li>
                                Processeur jusqu'a 4.5GHz+
                            </li>
                            <li>
                                <j>Anti-DDOS</j> Game
                            </li>

                            <li>
                                Uptime de 99%
                            </li>
                            <li>
                                Ram dédiée jusqu'a 32go
                            </li>


                            <li>
                                Acces <j>FTP/SFTP</j>
                            </li>
                            <li>
                                BDD <j>MySQL/MariaDB</j> Offerte
                            </li>
                            <li>
                                Panel Pterodactyl
                            </li>
                        </ul>
                    </div>
                </div>
            </div><div class="col-6">
                <div class="row container">
                    <div class="col-5">
                        <h2>Stockage</h2>
                        <hr>
                        <h3><g>à partir de :</g><br> 4.50€/Mois</h3>

                        <button id="btn-service" class="tyrobutton" data-url="javascript:pageerr();">indisponible</button>
                    </div>
                    <div class="col-7">
                        <ul>
                            <li>
                                Stockage jusqu'a <j>100To</j>
                            </li>

                            <li>
                                Bande passante à partir de 250Mbit/s
                            </li>

                            <li>
                                Jusqu'à <j>100 utilisateurs</j> connectés
                            </li>

                            <li>
                                Disque dur <j>Raid</j> ou <j>SSD NVMe</j>
                            </li>

                            <li>
                                Allumé <j>24h/24</j> et <j>7J/7</j>
                            </li>


                            <li>
                                Acces FTP/SFTP
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <style>

        /*************************
                  OFFRE
         *************************/
        #offre {
            --color-principal: #095bd5;
            --color-secondaire: #e77908;
            --color-background: #003f9d;


            --color-mc-secondaire: #ff0000;
        }

        #offre #ord2{
            display: none;
        }

        #offre .desktop{
            max-width: 1474px;
            margin: 5% auto;
        }
        #offre .mobile{
            display: none;
        }
        @media (max-width: 1664px) {
            #offre .desktop{
                max-width: unset;
                margin: 5%;
            }
        }

        @media (max-width: 1552px) {
            #offre .desktop{
                max-width: unset;
                margin: 5% 0;
            }
        }
        @media (max-width: 1424px) {
            #offre .desktop{
                display: none;
            }
            #offre .mobile{
                display: flex;
                margin-right: unset;
                margin-left: unset;
                margin-top: 5%;
            }

        }
        @media (max-width: 505px) {
            #offre .desktop{
                display: none;
            }
            #offre #ord2{
                display: initial;
            }
            #offre .mobile{
                display: none;
            }
        }

        #offre .mobile .container{
            height: 200px;
            box-shadow: 0 0 16px rgb(0 0 0 / 10%);
            border-radius: 6px;
            border: solid 1px #26272b;
            background-color: #26272b;
        }

        body.light #offre .mobile .container {

            border: solid 1px #e8e8e8;
            background-color: white;

        }

        #offre .mobile .col-6 {
            margin: 1% auto;
            min-width: 500px;
        }

        #offre .mobile .container .col-7{
            margin-top: 13px;
        }

        #offre .mobile .container .col-7 ul{
            font-size: 14px;
            margin: 0;
        }



        #offre .row .col .container{

            height: 378px;


            box-shadow: 0 0 16px rgb(0 0 0 / 10%);
            border-radius: 6px;

            border: solid 1px #26272b;
            background-color: #26272b;

            transition: transform 0.3s ease-in;

            position: relative;
            max-width: 245px;
            min-width: 245px;

        }

        body.light #offre .row .col .container {

            border: solid 1px #e8e8e8;
            background-color: white;

        }



        #offre h2{

            text-align: center;
            font-size: 28px;
            margin-top: 23px;
            margin-bottom: -2px;
            text-transform: uppercase;

        }

        #offre h3{
            font-size: 21px;
            color: var(--color-principal);
            text-align: center;
            margin-bottom: 23px;

        }

        #offre g{
            color: #e3e3e3;
            text-align: center;
            font-size: 16px;

        }

        body.light #offre g {
            color: #959191;
        }


        #offre h3::first-letter {
            text-transform: uppercase;
        }


        #offre ul{
            margin: 0 0 0 18px;
            font-size: 12px;
            font-weight: 300;
        }

        #offre li{
            list-style: url(https://solidserv.fr/assets/check.png);
        }

        #offre li j{
            font-weight: 700;
            color: var(--color-secondaire);
        }

        #offre .tyrobutton{
            position: absolute;
            bottom: 20px;
            margin-left: 2%;
            width: 80%;
            /* margin-left: 15%; */
            /* margin: 0 auto 0 auto; */
            font-size: 11px;
            text-transform: uppercase;
            transition: transform 0s ease-in;
        }


        /*TRANSFORM*/

        .trans[data-size="3"] {
            -webkit-transform:scale(1.15); /* Safari et Chrome */
            -moz-transform:scale(1.15); /* Firefox */
            -ms-transform:scale(1.15); /* Internet Explorer 9 */
            -o-transform:scale(1.15); /* Opera */
            transform:scale(1.15);
        }
        .trans[data-size="2D"] {
            -webkit-transform:scale(1.10); /* Safari et Chrome */
            -moz-transform:scale(1.10); /* Firefox */
            -ms-transform:scale(1.10); /* Internet Explorer 9 */
            -o-transform:scale(1.10); /* Opera */
            transform: scale(1.10)translate(6px, 0px);
        }
        .trans[data-size="2G"] {
            -webkit-transform:scale(1.10); /* Safari et Chrome */
            -moz-transform:scale(1.10); /* Firefox */
            -ms-transform:scale(1.10); /* Internet Explorer 9 */
            -o-transform:scale(1.10); /* Opera */
            transform: scale(1.10)translate(-6px, 0px);
        }
        .trans[data-size="1"] {
            -webkit-transform:unset; /* Safari et Chrome */
            -moz-transform:unset; /* Firefox */
            -ms-transform:unset; /* Internet Explorer 9 */
            -o-transform:unset; /* Opera */
            transform:unset;
        }

        @media (max-width: 506px) {
            .trans[data-size="3"] {
                -webkit-transform:unset; /* Safari et Chrome */
                -moz-transform:unset; /* Firefox */
                -ms-transform:unset; /* Internet Explorer 9 */
                -o-transform:unset; /* Opera */
                transform:unset;
            }
            .trans[data-size="2D"] {
                -webkit-transform:unset; /* Safari et Chrome */
                -moz-transform:unset; /* Firefox */
                -ms-transform:unset; /* Internet Explorer 9 */
                -o-transform:unset; /* Opera */
                transform:unset;
            }
            .trans[data-size="2G"] {
                -webkit-transform:unset; /* Safari et Chrome */
                -moz-transform:unset; /* Firefox */
                -ms-transform:unset; /* Internet Explorer 9 */
                -o-transform:unset; /* Opera */
                transform:unset;
            }
            .trans[data-size="1"] {
                -webkit-transform:unset; /* Safari et Chrome */
                -moz-transform:unset; /* Firefox */
                -ms-transform:unset; /* Internet Explorer 9 */
                -o-transform:unset; /* Opera */
                transform:unset;
            }

            #offre .row .col .container{
                margin: 10px auto;
            }

        }
    </style>
    <script src="https://tyrolium.fr/javascript/tyrobtn.js"></script>
    <script src="javascript/offre.js"></script>


    <style>
        #service-solidserv div.container:first-child{
            border: 2px solid transparent;
            background-color: #4256a40d!important;
            backdrop-filter: blur(9px);
            border-radius: 59px;
        }
        #service-solidserv div.container:last-child{
            background-color: transparent!important;
        }

        #service-solidserv h2.art {
            padding-top: 35px;
        }
    </style>


    <section id="service-solidserv" class="service-ecart">
        <div class="container row">
            <div class="col-6" style="text-align: center;">
                <a href="https://solidserv.fr">
                    <img class="img-solidserv img-home" src="assets/solidserv_service.png">
                </a>
            </div>
            <div class="container col-5">
                <article>
                    <h2 class="art"><i class="fas fa-caret-right"></i> Grâce à SolidServ</h2>
                    <p class="art" style='    padding-bottom: 10px;
        margin-top: -21px;'>

                        Cette page est proposé par notre propre filaile <strong>SolidServ</strong>, il s'agit notre propre hébergeur serveur créer et porté par Tyrolium et ses équipes depuis plus de 2 ans

                    </p>
                    <div style="text-align: center">
                        <?php tyrobtn("https://solidserv.fr", "solidserv", "Site de SolidServ");?>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <br><br>

</main>

<?php footer(); ?> </body> </html>

<?php include "app/app.php"; $page = 7; head($page); ?>
<body onLoad="cookie()" class="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>"> <header> <?php navbar($page); ?> </header>

<?php loader() ?>

<main>
    <section id="projet">
        <br>
        <h2><?= $lang[$page]['about']['title'] ?></h2>
        <p class="container"><?= $lang[$page]['about']['txt'] ?></p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
    </section>

    <section id="formulaire">


        <div class="container">
            <div class="section-contact">
                <div class="form-contact">
                    <form id="form-contact-key" method="get" action="<?php echo $env_bd_contact; ?>" onsubmit="handleFormSubmit(event)">

                        <h2 style="text-align: center"><?= $lang[$page]['form']['title-select'] ?></h2>
                        <br>
                        <div class="dynamicSelect">
                                <span class="dynamicSelect-dropdown">
                                    <div include="form-input-select()">
                                            <?php if(!empty($_GET['name'])) { ?>
                                        <input type="hidden" name="raison" value="form-1">
                                        <select class="dynamicSelect-select" name="raison" disabled style="color: #0854ff">
                                                <option hidden value="form-1">Prestations >
                                                    <?php if ($_GET['name'] == "web") {
                                                        echo "Site Web > ";

                                                        if ($_GET['form'] == "1") {
                                                            echo "Site personnel";
                                                        } else if ($_GET['form'] == "2") {
                                                            echo "Site de Projet";
                                                        } else if ($_GET['form'] == "3") {
                                                            echo "Application Web";
                                                        } else {
                                                            echo "Autre";
                                                        }

                                                    } else if ($_GET['name'] == "mc") {
                                                        echo "Minecraft";
                                                    } else if ($_GET['name'] == "bot") {
                                                        echo "Bot Discord";
                                                    } else if ($_GET['name'] == "serv") {
                                                        echo "Serveur";
                                                    } else if ($_GET['name'] == "graph") {
                                                        echo "Graphisme";
                                                    } else if ($_GET['name'] == "music") {
                                                        echo "Musicales";
                                                    } else if ($_GET['name'] == "anim") {
                                                        echo "Vidéos";
                                                    } ?>
                                                </option>
                                            <?php } else if(!empty($_GET['partenaire'])) { ?>

                                        <input type="hidden" name="raison" value="form-3">
                                        <select class="dynamicSelect-select" name="raison" disabled style="color: #0854ff">
                                                <option hidden value="form-3">Collaboration</option>
                                            <?php } else { ?>

                                        <select class="dynamicSelect-select" name="raison" required>
                                                <option hidden value=""><?= $lang[$page]['select']['undefine'] ?></option>
                                            <?php } ?>
                                                <option value="form-1">Prestations</option>
                                                <option value="form-2">Projets</option>
                                                <option value="form-3">Collaboration</option>
                                                <option value="form-4">Aide/Bug</option>
                                                <option value="form-5">Autre</option>
                                        </select>
                                    </div>
                                </span>

                                <!-- Form 1 -->
                                <div class="form-wrapper">
                                    <div id="form-1" class="dynamicSelect-form">
                                            <span class="dynamicSelect-dropdown">
                                                 <div include="form-input-select()">
                                                <select class="dynamicSelect-select" name="prestation">
                                                    <?php if(!empty($_GET['name'])) { ?>

                                                                    <?php if ($_GET['name'] == "web") {
                                                                        $pGet = "p0";
                                                                    } else if ($_GET['name'] == "mc") {
                                                                        $pGet = "p1";
                                                                    } else if ($_GET['name'] == "bot") {
                                                                        $pGet = "p2";
                                                                    } else if ($_GET['name'] == "serv") {
                                                                        $pGet = "p3";
                                                                    } else if ($_GET['name'] == "graph") {
                                                                        $pGet = "p4";
                                                                    } else if ($_GET['name'] == "music") {
                                                                        $pGet = "p5";
                                                                    } else if ($_GET['name'] == "anim") {
                                                                        $pGet = "p6";
                                                                    } ?>
                                                        <option hidden value="form-<?php echo $pGet?>">null</option>
                                                    <?php } else { ?>
                                                        <option hidden value="null">Choisis une prestation</option>
                                                    <?php } ?>

                                                    <?php  $nbPresta = count($env_presta);

                                                    for ($i = 0; $i <= $nbPresta-1; $i++) {

                                                        echo '<option value="form-p'. $i .'">'. $env_presta[$i] .'</option>';

                                                    }?>

                                                </select>
                                                 </div>
                                            </span>

                                            <div class="form-wrapper">
                                                <div id="form-p0" class="dynamicSelect-form">

                                                    <div include="form-input-select()">
                                                    <select class="dynamicSelect-select" name="web">
                                                        <?php if(!empty($_GET['name']) && !empty($_GET['form']) && $_GET['name'] == "web") { ?>

                                                            <?php if ($_GET['form'] == "1") {
                                                                $wGet = "0";
                                                            } else if ($_GET['form'] == "2") {
                                                                $wGet = "1";
                                                            } else if ($_GET['form'] == "3") {
                                                                $wGet = "2";
                                                            } ?>
                                                            <option hidden value="<?php echo $wGet?>">null</option>
                                                        <?php } else { ?>
                                                            <option hidden value="null">Choisis une formule</option>
                                                        <?php } ?>

                                                        <?php  $nbPrestaW = count($env_presta_web);

                                                        for ($i = 0; $i <= $nbPrestaW-1; $i++) {

                                                            echo '<option value="'. $i .'">'. $env_presta_web[$i] .'</option>';

                                                        }?>

                                                    </select>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="form-wrapper">
                                                <div id="form-p1" class="dynamicSelect-form">

                                                    <div include="form-input-select()">
                                                    <select class="dynamicSelect-select" name="mc">
                                                        <option hidden value="null">Choisis une formule</option>

                                                        <?php  $nbPrestaM = count($env_presta_mc);

                                                        for ($i = 0; $i <= $nbPrestaM-1; $i++) {

                                                            echo '<option value="'. $i .'">'. $env_presta_mc[$i] .'</option>';

                                                        }?>

                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <!-- Form 2 -->
                                <div class="form-wrapper">
                                    <div id="form-2" class="dynamicSelect-form">

                                        <div include="form-input-select()">
                                        <select class="dynamicSelect-select" name="projet">
                                            <option hidden value="null">Choisir le projet</option>

                                            <?php  $nbProject = count($env_projet);

                                            for ($i = 0; $i <= $nbProject-1; $i++) {

                                                echo '<option value="'. $i .'">'. $env_projet[$i] .'</option>';

                                            }?>

                                        </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <br>
                        <h2 style="text-align: center"><?= $lang[$page]['form']['title-input'] ?></h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="firstName" placeholder="<?= $lang[$page]['form']['firstname'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-file-signature"></i>
                                    <input type="text" name="lastName" placeholder="<?= $lang[$page]['form']['lastname'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="<?= $lang[$page]['form']['mail'] ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" name="phoneNumber" placeholder="<?= $lang[$page]['form']['num'] ?>">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input">
                                    <i class="fas fa-comment-dots"></i>
                                    <textarea placeholder="<?= $lang[$page]['form']['msg'] ?>" name="text"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-12">
                            
                                <div class="single-input text-center">  
                                    
                                    <div class="g-recaptcha" data-theme="<?php if (empty($_COOKIE["color"])){ echo "dark"; }else{echo $_COOKIE["color"]; } ?>" data-sitekey="<?= $env_captcha_clientid ?>"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="submit-input text-center">
                                    <input type="submit" name="submit" value="<?= $lang[$page]['form']['submit'] ?>">
                                </div>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function handleFormSubmit(event) {
                event.preventDefault(); // Empêche le formulaire de soumettre de manière classique

                // Obtenez les données du formulaire
                const form = document.getElementById('form-contact-key');
                const formData = new FormData(form);

                // Première soumission (GET vers votre action PHP)
                fetch(form.action + '?' + new URLSearchParams(formData), {
                    method: 'GET',
                })
                    .then(response => response.text())
                    .then(result => {
                        console.log('Envoyé à l\'action PHP');

                        // Deuxième soumission (POST vers Formspree)
                        fetch('https://formspree.io/f/xldrpwrr', {
                            method: 'POST',
                            body: formData,
                        })
                            .then(response => response.text())
                            .then(result => {
                                console.log('Envoyé à Formspree');

                                // Une fois les deux soumissions terminées, on peut afficher un message ou rediriger
                                // alert('Formulaire envoyé avec succès !');
                            });
                    })
                    .catch(error => console.error('Erreur:', error));
            }
        </script>

        <p style="text-align: center; font-size: 10px; padding: 0px 40px">* <?= $lang[$page]['form']['conditions'] ?></p>

        <section id="projet">

            <hr style="background: rgb(161, 161, 161);">
            <br>
            <p class="container"><?= $lang[$page]['other'] ?> <br> <i>officiel@tyrolium.fr</i><br><i>+33 6 11 11 26 69</i></p>
            <br>
        </section>

    </section>
    <script src="javascript/form.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
    <script src='izitoast-1.4.0/iziToast.min.js'></script>
    <script  src="javascript/notif.js"></script>


    <?php if (!empty($_GET['err'])) {
        
        if($_GET['err'] == "C404"){ ?>
             <script>
                if(Text != 1){
                    iziToast.error({
                        title: 'Erreur',
                        position: 'bottomRight',
                        message: 'reCAPTCHA Erreur | Code : <?php echo $_GET['err']; ?>'
                    });
                }
            </script>
    
    <?php } else { ?>
        
            <script>
                if(Text != 1){
                    iziToast.error({
                        title: 'Erreur',
                        position: 'bottomRight',
                        message: 'Une erreur est survenue | Code : <?php echo $_GET['err']; ?>'
                    });
                }
            </script>
        
    <?php } } ?>

    <?php if (!empty($_GET['true'])) {?>
        <script>
            if(Text != 1){
                iziToast.success({
                    title: 'OK',
                    position: 'bottomRight',
                    message: 'Votre demande a bien été envoyé !'
                });
            }
        </script>
    <?php } ?>

</main>

<?php footer(); ?> </body> </html>

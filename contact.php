<?php include "app/app.php"; $page = 8; head($page); ?>
<body> <header> <?php navbar($page); ?> </header>

<main>
    <section id="projet">
        <br>
        <h2>Nous Contactez</h2>
        <p class="container">Voici la page pour nous contactez, nous vous esseyerons un mail, a la suite de cette demande. Le delaie ce situe entre 24h à 72h.</p>
        <br>
        <hr style="background: rgb(161, 161, 161);">
    </section>
    <section id="formulaire">


        <div class="container">
            <div class="section-contact">
                <div class="form-contact">
                    <form method="get" action="<?php echo $env_bd_contact; ?>">

                        <h2 style="text-align: center">Raison de la prise de contact</h2>
                        <br>
                        <div class="dynamicSelect">
                                <span class="dynamicSelect-dropdown">
                                    <div include="form-input-select()">
                                        <select class="dynamicSelect-select" name="raison" required>
                                            <option hidden value="">Choisi la raison</option>
                                            <option value="form-1">Prestations</option>
                                            <option value="form-2">Projets</option>
                                            <option value="form-3">Colaboration</option>
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
                                                    <option hidden value="null">Choisir une prestations</option>

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
                                                        <option hidden value="null">Choisir la formule</option>

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
                                                        <option hidden value="null">Choisir la formule</option>

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
                        <h2 style="text-align: center">Vos Informations</h2>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="firstName" placeholder="Entrez votre prenom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-file-signature"></i>
                                    <input type="text" name="lastName" placeholder="Entrez votre nom" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-envelope"></i>
                                    <input type="email" name="email" placeholder="Entrez votre email" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" name="phoneNumber" placeholder="Entrez votre numéro de téléphone">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input">
                                    <i class="fas fa-comment-dots"></i>
                                    <textarea placeholder="Entrez un messsage" name="text"></textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="submit-input text-center">
                                    <input type="submit" name="submit" value="Envoyer">
                                </div>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        </div>

        <p style="text-align: center; font-size: 10px; padding: 0px 40px">* toute vos information serve uniquement dans la communications avec nous, et ne serons pas utiliser a quelqu'autre utiliser que ça, il ne sera ni revendu, ni partager</p>

        <section id="projet">

            <hr style="background: rgb(161, 161, 161);">
            <br>
            <p class="container">Vous pouvez aussi prendre contact avec nous par notre mail ou avec par numéro téléphone <br> <i>officiel@tyrolium.fr</i><br><i>+33 6 11 11 26 69</i></p>
            <br>
        </section>

    </section>
    <script src="javascript/form.js"></script>

</main>

<?php footer(); ?> </body> </html>

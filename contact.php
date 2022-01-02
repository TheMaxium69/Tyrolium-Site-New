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
                    <form method="get" action="http://localhost/">
                            <div class="dynamicSelect">
                                <span class="dynamicSelect-dropdown">
                                    <select class="dynamicSelect-select" name="raison">
                                        <option selected value="null">Raison</option>
                                        <option value="form-1">Prestations</option>
                                        <option value="form-2">Projets</option>
                                        <option value="form-3">Colaboration</option>
                                        <option value="form-4">Aide/Bug</option>
                                        <option value="form-5">Autre</option>
                                    </select>
                                </span>

                                <!-- Form 1 -->
                                <div class="form-wrapper">
                                    <div id="form-1" class="dynamicSelect-form">
                                            <span class="dynamicSelect-dropdown">
                                                <select class="dynamicSelect-select" name="prestation">
                                                    <option selected value="null">Choisir une prestations</option>

                                                    <?php  $nbPresta = count($env_presta);

                                                    for ($i = 0; $i <= $nbPresta-1; $i++) {

                                                        echo '<option value="form-p'. $i .'">'. $env_presta[$i] .'</option>';

                                                    }?>

                                                </select>
                                            </span>

                                            <div class="form-wrapper">
                                                <div id="form-p0" class="dynamicSelect-form">

                                                    <select class="dynamicSelect-select" name="web">
                                                        <option selected value="null">Choisir la formule</option>

                                                        <?php  $nbPrestaW = count($env_presta_web);

                                                        for ($i = 0; $i <= $nbPrestaW-1; $i++) {

                                                            echo '<option value="'. $i .'">'. $env_presta_web[$i] .'</option>';

                                                        }?>

                                                    </select>


                                                </div>
                                            </div>

                                            <div class="form-wrapper">
                                                <div id="form-p1" class="dynamicSelect-form">

                                                    <select class="dynamicSelect-select" name="mc">
                                                        <option selected value="null">Choisir la formule</option>

                                                        <?php  $nbPrestaM = count($env_presta_mc);

                                                        for ($i = 0; $i <= $nbPrestaM-1; $i++) {

                                                            echo '<option value="'. $i .'">'. $env_presta_mc[$i] .'</option>';

                                                        }?>

                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <!-- Form 2 -->
                                <div class="form-wrapper">
                                    <div id="form-2" class="dynamicSelect-form">

                                        <select class="dynamicSelect-select" name="projet">
                                            <option selected value="null">Choisir le projet</option>

                                            <?php  $nbProject = count($env_projet);

                                            for ($i = 0; $i <= $nbProject-1; $i++) {

                                                echo '<option value="'. $i .'">'. $env_projet[$i] .'</option>';

                                            }?>

                                        </select>
                                    </div>
                                </div>

                            </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-user"></i>
                                    <input type="text" name="name" placeholder="ENTER YOUR NAME">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-envelope"></i>
                                    <input type="text" name="email" placeholder="ENTER YOUR EMAIL">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-phone"></i>
                                    <input type="text" name="phoneNumber" placeholder="ENTER YOUR PHONE NUMBER">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <i class="fas fa-check"></i>
                                    <input type="text" name="subject" placeholder="ENTER YOUR SUBJECT">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input">
                                    <i class="fas fa-comment-dots"></i>
                                    <textarea placeholder="ENTER YOUR MESSAGE" name="text"></textarea>
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










    </section>
    <style>
        .dynamicSelect-form {
            display: none;
        }

        .form-visible {
            display: block;
        }

    /*   --- */
        input{
        }

        textarea{
        }

        .section-contact {
            padding: 120px;
        }

        .section-contact .header-section .title {
            position: relative;
            margin-bottom: 17px;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 55px;
        }

        .section-contact .header-section .title .dot {
            display: inline-block;
            position: absolute;
            bottom: 8px;
            width: 8px;
            height: 8px;
            margin-left: 3px;
            background-color: #df383f;
        }

        .section-contact .header-section .description {
            font-family: "Roboto", sans-serif;
            color: #2a6287;
        }

        .section-contact .header-section .big-title {
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translate(-50%,70%);
            font-size: 120px;
            font-weight: 700;
            opacity: 0.15;
        }

        .section-contact .form-contact {

        }

        .section-contact .form-contact .single-input {
            position: relative;
            margin-top: 40px;
        }

        .section-contact .form-contact .single-input i {
            position: absolute;
            top: 5px;
            left: 15px;
            color: #0049ee;
        }

        .section-contact .form-contact .single-input input,
        .section-contact .form-contact .single-input textarea {
            width: 100%;
            border: none;
            border-bottom: 2px solid #ffffff;
            padding-left: 50px;
            padding-bottom: 15px;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            transition: border .3s;
            background: transparent;
            color: white;
        }

        .section-contact .form-contact .single-input input::placeholder,
        .section-contact .form-contact .single-input textarea::placeholder {
            color: #a0a0a0;
        }

        .section-contact .form-contact .single-input input:focus,
        .section-contact .form-contact .single-input textarea:focus {
            border-color: #0049ee;
        }

        .section-contact .form-contact .single-input textarea {
            height: 150px;
            min-height: 50px;
        }

        .section-contact .form-contact .submit-input input {
            margin-top: 40px;
            padding: 15px 50px;
            background-color: #0049ee;
            color: #fff;
            border: none;
            font-weight: 700;
            transition: background-color .3s;
        }

        .section-contact .form-contact .submit-input input:hover {
            background-color: #0030a1;
        }

        @media (max-width: 575.99px) {
            .section-contact {
                padding: 80px 60px;
            }

            .section-contact .header-section .title {
                font-size: 40px;
            }

            .section-contact .header-section .big-title {
                font-size: 80px;
            }

            .section-contact .header-section .description {
                font-size: 14px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.99px) {
            .section-contact {
                padding: 80px 60px;
            }

            .section-contact .header-section .title {
                font-size: 45px;
            }

            .section-contact .header-section .big-title {
                font-size: 100px;
            }
        }

        @media (min-width: 768px) and (max-width: 991.99px) {
            .section-contact {
                padding: 80px 60px;
            }

            .section-contact .header-section .title {
                font-size: 45px;
            }

            .section-contact .header-section .big-title {
                font-size: 100px;
            }
        }

    </style>
    <script src="javascript/form.js"></script>

</main>

<?php footer(); ?> </body> </html>

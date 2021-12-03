<?php include "app/app.php"; $page = 6; ?><!doctype html>
<html lang="fr">
<head>
    <?php head($page); ?>
    <link rel='stylesheet' href='inconscout-2.1.9/unicons.css'>
</head>
<body>
<main>
    <header>
        <?php navbar($page); ?>
    </header>

<div id="particule-acc">
<section id="account">
    <div class="section">
        <div class="container">
            <div class="justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Connexion</span><span>S'inscrire</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">Connexion</h4>
                                            <div class="form-group">
                                                <input type="email" name="logemail" class="form-style" placeholder="Ton Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Ton Mot De Passe" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="#" class="btn mt-4">Envoyer</a>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Mot de passe oublié?</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4 pb-3">S'inscrire</h4>
                                            <div class="form-group">
                                                <input type="text" name="logname" class="form-style" placeholder="Ton Pseudo" id="logname" autocomplete="off">
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" name="logemail" class="form-style" placeholder="Ton Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style" placeholder="Ton Mot De Passe" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <a href="#" class="btn mt-4">Envoyer</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php particule() ?>
    </div>


</main>

<footer>

</footer>

</body>
</html>

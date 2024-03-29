<?php

require "../app/env.php";
require_once "request.php";
require "return.php";
require "model.php";
require "injectProtect.php";
require "mail.php";
require "../recaptcha-php-lib-1.2.4/autoload.php";

if (!empty($_GET['firstName']) && !empty($_GET['lastName']) && !empty($_GET['email']) && !empty($_GET['raison'])){
    
    
    $recaptcha = new \ReCaptcha\ReCaptcha($env_captcha_servid);
    $resp = $recaptcha->verify($_GET['g-recaptcha-response']);
    if ($resp->isSuccess()) {
        
        // Verified!
        $sendObject = null;
        $sendObject = new sendRequest();

        $sendObject->firstName = $_GET['firstName'];
        $sendObject->lastName = $_GET['lastName'];
        $sendObject->email = $_GET['email'];
        $sendObject->phoneNumber = $_GET['phoneNumber'];
        $sendObject->content = $_GET['text'];

        if ( $_GET['raison'] == "form-1"){
            $sendObject->raison = "Prestations";

            if ( $_GET['prestation'] == "form-p0"){
                $sendObject->prestation = "Site Web";
                    if ( $_GET['web'] == "0"){
                        $sendObject->web = "Site personnel";
                    } else if ( $_GET['web'] == "1"){
                        $sendObject->web = "Site de Projet";
                    } else if ( $_GET['web'] == "2"){
                        $sendObject->web = "Application Web";
                    } else if ( $_GET['web'] == "3"){
                        $sendObject->web = "Autre";
                    } else {
                        $sendObject->web = "Autre";
                    }
            } else if ( $_GET['prestation'] == "form-p1"){
                $sendObject->prestation = "Minecraft";
                    if ( $_GET['mc'] == "0"){
                        $sendObject->mc = "Mod";
                    } else if ( $_GET['mc'] == "1"){
                        $sendObject->mc = "Plugin";
                    } else if ( $_GET['mc'] == "2"){
                        $sendObject->mc = "Serveur";
                    } else if ( $_GET['mc'] == "3"){
                        $sendObject->mc = "Autre";
                    } else {
                        $sendObject->mc = "Autre";
                    }
            } else if ( $_GET['prestation'] == "form-p2"){
                $sendObject->prestation = "Bot Discord";
            } else if ( $_GET['prestation'] == "form-p3"){
                $sendObject->prestation = "Serveur";
            } else if ( $_GET['prestation'] == "form-p4"){
                $sendObject->prestation = "Graphisme";
            }else if ( $_GET['prestation'] == "form-p5"){
                $sendObject->prestation = "Musicales";
            }else if ( $_GET['prestation'] == "form-p6"){
                $sendObject->prestation = "Animations";
            }else if ( $_GET['prestation'] == "form-p7"){
                $sendObject->prestation = "Autre";
            } else {
                $sendObject->prestation = "Autre";
            }
        } else if ( $_GET['raison'] == "form-2"){
            $sendObject->raison = "Projets";
            if ( $_GET['projet'] == "0"){
                $sendObject->projet = "TyroServ";
            } else if ( $_GET['projet'] == "1"){
                $sendObject->projet = "SolidServ";
            } else if ( $_GET['projet'] == "2"){
                $sendObject->projet = "Gamenium";
            } else if ( $_GET['projet'] == "3"){
                $sendObject->projet = "TyroDiscord";
            } else if ( $_GET['projet'] == "4"){
                $sendObject->projet = "TyroStudio";
            } else if ( $_GET['projet'] == "5"){
                $sendObject->projet = "Wonderlium";
            } else if ( $_GET['projet'] == "6"){
                $sendObject->projet = "Sélémusium";
            } else if ( $_GET['projet'] == "7"){
                $sendObject->projet = "TyroShop";
            } else if ( $_GET['projet'] == "8"){
                $sendObject->projet = "DuoGramme";
            } else if ( $_GET['projet'] == "9"){
                $sendObject->projet = "TyroStudent";
            } else if ( $_GET['projet'] == "10"){
                $sendObject->projet = "Chantium";
            } else if ( $_GET['projet'] == "11"){
                $sendObject->projet = "Autre";
            } else {
                $sendObject->projet = "Autre";
            }
        } else if ( $_GET['raison'] == "form-3"){
            $sendObject->raison = "Colaboration";
        } else if ( $_GET['raison'] == "form-4"){
            $sendObject->raison = "Aide/Bug";
        } else if ( $_GET['raison'] == "form-5"){
            $sendObject->raison = "Autre";
        } else {
            $sendObject->raison = "Autre";
        }

        $sendObjectProtect = protect($sendObject);
        //upMail($sendObjectProtect);
        insert($sendObjectProtect);
        
    } else {
        $errors = $resp->getErrorCodes();
        erreur("C404");
    }

} else {
    erreur("T901");
}

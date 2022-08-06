<?php

if(!isset($_SESSION['lang'])){
    
    $_SESSION['lang'] = "fr_FR";
    
} else if (!empty($_GET['lang'])){
    
    $_SESSION['lang'] = $_GET['lang'];
    
}

require "lang/".$_SESSION['lang'].".lang.php";

?>
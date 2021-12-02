<?php
// Env File
require_once "app/env.php";

// Meta
require_once "composant/meta.phtml";

// Title
$title = "Tyrolium Site";
echo '<title>'. $title .'</title>';

// Logo
echo '<link href="'. $env_logoUrl .'" rel="shortcut icon">';

// Extention
require_once "extension/ext.php";

?>
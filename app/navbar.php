<?php
function navbar($page)
{
    require_once "./composant/navbarTop.phtml";

    require_once "./composant/navbar". $page .".phtml";

    require_once "./composant/navbarDown.phtml";
}
?>




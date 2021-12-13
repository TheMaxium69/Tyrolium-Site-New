<?php
function navbar($page)
{
    require_once "./composant/navbarTop.phtml";

    require_once "./composant/navbar". $page .".phtml";

    require "env.php";
    if ($page != 6 && $env_isAccount == true){
        echo '<li class="nav-item">
                <a class="nav-link" href="javascript:redirect(6)"><i class="far fa-user"></i>Compte</a>
              </li>';
    }

    require_once "./composant/navbarDown.phtml";

    echo '<script src="javascript/navbar.js"></script>';
}
?>




<?php

$uri = $_SERVER["REQUEST_URI"];

if ($uri === "/inscription") {
    if (isset($_POST["btnEnvoi"])) {
       
    }
    require_once "Templates/users/inscriptionOrEditProfil.php";
} elseif ($uri === "/connexion") {
    require_once "Templates/users/connexion.php";
} elseif ($uri === "/profil") {
    require_once "Templates/users/profil.php";
}

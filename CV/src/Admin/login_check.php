<?php

session_start();

// $_SESSION['logged'] = true;

if ($_SESSION['logged'] === false || !isset($_SESSION['logged'])){
    header('Location:http://'.$_SERVER[HTTP_HOST].'/admin/login.php'); // mettre l'adresse où on veut rediriger
    exit();
};



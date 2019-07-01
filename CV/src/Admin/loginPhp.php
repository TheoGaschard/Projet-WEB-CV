<?php

session_start();

$message = "";
$adminEmail = "theo.GASCHARD@ynov.com";
$adminpassword = "12345";


// print_r($_POST);

if(count($_POST) == 2 && $_POST['email'] != "" && $_POST['password'] != ""){
    if($adminEmail == $_POST['email'] && $adminpassword == $_POST['password']){
        
        $_SESSION['logged'] = true;
        header('Location:http://'.$_SERVER[HTTP_HOST].'/admin/index.php'); // mettre l'adresse où on veut rediriger
        exit();

    } else {

        $message = "Identifiant/mot de passe incorect";

    }
} elseif(count($_POST) == 0) {
    
    $message = "_";

} else {

    $message = "formulaire incomplet";

}

<?php

require_once(__DIR__.'/../../src/fonctions_PHP/connexion_BDD.php');

if (isset($_POST['message']) && $_POST['message'] != '' ) {

    $mail = $_POST['mail'];
    $objet = $_POST['nom'];
    $mess = $_POST['message'];


    $statement = $connection->prepare(
        'INSERT INTO CONTACT (ID, Mail, Objet, Message) VALUES ("2",":mail.",":objet.",":mess");'
    );
    $statement->bindValue(':mail', $mail);
    $statement->bindValue(':objet', $objet);
    $statement->bindValue(':mess', $mess);
    $statement->execute();

}




?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Site CV Theo Gaschard</title>
        <link rel="stylesheet" href="../css/nom.css">
        <link rel="stylesheet" href="../css/fonction.css">
        
    </head>
<body>




<?php
    require_once('../../src/fonctions_PHP/header_pages_annexes.php');
?>

<div class="titrepage">
    <p>
        CONTACT
    </p>
</div>

<div id="bodypage">
    <p id="textecontact">
        Veuillez me laisser un message ci-dessous afin que j'améliore mon site !
    </p>

    <p>Objet : <p>
    <form method="POST" action="http://localhost:4242/pages/6contact.php">
        <p>
            <input type="text" name="nom" id="champnom"  />
        </p>
  

        <p>Mail : <p>
    
            <p>
                <input type="email" name="mail" id="champmail"  />
            </p>
        

        <p>Message : <p>
        
            <p>
                <textarea name="message" id="message" rows="10" cols="100">
                </textarea>    
            </p>
        
        <a>
            <button id="boutoncontact" >
                ENVOYER
            </button>
        </a>
    </form>


</div>

</body>
 
<script src="6contact.js"></script>

</html>
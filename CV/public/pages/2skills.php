<?php

require_once(__DIR__.'/../../src/fonctions_PHP/connexion_BDD.php');

$statement = $connection->prepare('SELECT * FROM skills');
$statement->execute();

$allResults = $statement->fetchAll(\PDO::FETCH_ASSOC);

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
        SKILLS
    </p>
</div>

<div id="bodypage">
    <p class="titreskill"> Permis B </p>

    <p class="titreskill"> Langues : </p>

    <div class="ligneskill">
        <p class="nomskill"> Anglais : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkAnglais"> </div>
        </div>
    </div>  
    <div class="ligneskill">
        <p class="nomskill"> Espagnol : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkEspagnol"> </div>
        </div>
    </div>  

    <p class="titreskill"> Developement logiciel : </p>
    
    <div class="ligneskill">
        <p class="nomskill"> C / C# : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkC"> </div>
        </div>
    </div>  
    <div class="ligneskill">
        <p class="nomskill"> Arduino : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkArduino"> </div>
        </div>
    </div>  
    <div class="ligneskill">
        <p class="nomskill"> Python : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkPython"> </div>
        </div>
    </div>  

    <p class="titreskill"> Réseaux : </p>

    <div class="ligneskill">
        <p class="nomskill"> CISCO : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkCisco"> </div>
        </div>
    </div>  
    <div class="ligneskill">
        <p class="nomskill"> HP : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkHP"> </div>
        </div>
    </div>  
    <div class="ligneskill">
        <p class="nomskill"> VirtualBox : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkVirtu"> </div>
        </div>
    </div>  

    <p class="titreskill"> Base de données : </p>

    <div class="ligneskill">
        <p class="nomskill"> SQL : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkSQL"> </div>
        </div>
    </div>  

    <p class="titreskill"> Developement WEB : </p>

    <div class="ligneskill">
        <p class="nomskill"> HTML/CSS : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkHTML"> </div>
        </div>
    </div>  
    <div class="ligneskill">
        <p class="nomskill"> Javascript : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkJS"> </div>
        </div>
    </div>  
    <div class="ligneskill">
        <p class="nomskill"> PHP : </p>
        <div class="jauge">
            <div class="jaugeskill" id="SkPHP"> </div>
        </div>
    </div>  














</div>

</body>
 
<script src="2skills.js"></script>

</html>
<?php

require_once(__DIR__.'/../src/fonctions_PHP/connexion_BDD.php');

$statement = $connection->prepare('SELECT * FROM PERSO');
$statement->execute();

$allResults = $statement->fetchAll(\PDO::FETCH_ASSOC);

// print_r($allResults[0]['NOM']);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title>Site CV Theo Gaschard</title>
        <link rel="stylesheet" href="css/nom.css">
        <link rel="stylesheet" href="css/fonction.css">

    </head>

<body>
    
<header id="hd">
    <a href="pages/1about.php"  class="boutonheader centre" id="ab">ABOUT</a> 
    <a href="pages/2skills.php"  class="boutonheader centre" id="sk">SKILLS</a>
    <a href="pages/3education.php"  class="boutonheader centre" id="ed">EDUCATION</a>
    <a href="index.php"  class="boutonheader centre" id="nom">NOM</a>
    <a href="pages/4portfolio.php"  class="boutonheader centre" id="po">PORTFOLIO</a>
    <a href="pages/5experience.php" class="boutonheader centre" id="ex">EXPERIENCE</a>
    <a href="pages/6contact.php" class="boutonheader centre" id="co">CONTACT</a>
</header>

<!--  Dans le cas ou seul le index est public
   
Chemin de
../src/pages/1about.php

-->

<div id="tete">
    <div id="lpp">
        <div id="pp">
            
        </div>
    </div>
    <div id="Nom">
        <h1>Théo GASCHARD <!--<?= $allResults[0]['Prenom'].$allResults[0]['Nom']?>--></h1>     
    </div>
    <div id="métier">
        <h3><?=$allResults[0]['Poste']?></h3>
    </div>
</div>
   

</body>
   
<script src="CV.js"></script>

</html>
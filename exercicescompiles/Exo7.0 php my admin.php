    <?php
    include("fonctions.php"); 
    $message = "Hello world !";
    ?>


<html>
<head>

    <title>Inclusion de fichiers PHP</title>

</head>

<body> 

    <?php 
    writeMessage($message); 
    ?>

<br>

    <?php 
    writeMessage("Bonjour tout le monde !"); 
    ?>


<!-- 
FICHIER index.php

<?php
/*
include("entete.php");
<body>
 page de test
</body>
include("pieddepage.php");
*/
?>


FICHIER ENTETE.PHP
<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="utf-8">
   <title>Inclusion de fichiers PHP</title>
   <link rel="stylesheet" href="css/style.css">
</head>

FICHIER FOOTER.PHP

<script src="js/scripts.js"></script>
</body>
</html>


 -->
<script src="js/scripts.js"></script>

</body>
</html>


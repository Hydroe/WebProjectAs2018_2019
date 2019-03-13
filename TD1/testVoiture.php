<!DOCTYPE html>
<html>
    <head>
        <title> Insérer le titrer ici </title>
    </head>
   
    <body>
    	<?php
        require_once("Voiture.php");
        $voiture1 = new Voiture ("Renault","rouge","45145441" );
        $voiture1->afficher();
        ?>
    </body>
</html>


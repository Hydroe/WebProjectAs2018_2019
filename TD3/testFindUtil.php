<!DOCTYPE html>
<html>
    <head>
        <title> Insérer le titrer ici </title>
    </head>
   
    <body>
    	<?php
            require_once('Trajet.php');
            require_once('Utilisateur.php');
           	$tab =Trajet::findPassagers(1);

            foreach ($tab as  $user) {
                
                 $user->afficher();
            }
           
        
        ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title> Insérer le titrer ici </title>
    </head>
   
    <body>
    	<?php

    	if(empty($_POST) ){
			echo "il y a aucun voiture";
		}

		else{
		$voiture2 = new Voiture ($_POST['immatriculation'],$_POST['couleur'],$_POST['marque']);
        echo $voiture2->afficher();
    	}/*echo $_POST['immatriculation'];

    	echo $_POST['couleur'];
    	
    	echo $_POST['marque'];
		*/

    	 
        
        ?>
    </body>
</html>

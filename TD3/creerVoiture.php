<!DOCTYPE html>
<html>
    <head>
        <title> Insérer le titrer ici </title>
    </head>
   
    <body>
    	<?php

        require_once('Voiture.php');
        require_once('Model.php');

    	if(empty($_POST) ){
			echo "il y a aucun voiture";
		}

		else{
		$voiture2 = new Voiture ($_POST['marque'],$_POST['couleur'],$_POST['immatriculation']);
      
        $voiture2->save();
        $voiture2->afficher();
    }

    	


        /*echo $_POST['immatriculation'];

    	echo $_POST['couleur'];
    	
    	echo $_POST['marque'];
		*/

    	 
        
        ?>
    </body>
</html>

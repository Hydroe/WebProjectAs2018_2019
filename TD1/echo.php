<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        Voici le résultat du script PHP : 
        <?php
        
           
	  /* $marque="Renault";
	   $couleur= "(couleur bleu)";
	   $immatriculation="46811654";
	   echo "voiture $immatriculation de marque $marque $couleur<br>";
	   $prenom="Helmut";
	   echo "Bonjour $prenom,<br> ça farte ?";
	   echo " <br>";
	   $texte = "hello" . 'World !';
	   echo $texte;*/

	   $voiture1 = array (
	   'marque' => 'renault',
	'couleur'    => 'jaune',
	'immatriculation' => '5775787');

	$voiture2 = array (
	   'marque' => 'mini',
	'couleur'    => 'rouge',
	'immatriculation' => '5464684887');

//	foreach( $voiture as $cle => $valeur){
//	echo"$cle $valeur  ";	}

	echo "<br>";
	//var_dump($marque);
	echo "Liste des voitures <ul>";
	$voitures = array($voiture1, $voiture2 );

	if(empty($voitures) ){
			echo "il y a aucun voiture";
		}
	foreach( $voitures as $voiture){

		
	
		echo "voiture {$voiture["immatriculation"]} de marque {$voiture["marque"]} 
		{$voiture["couleur"]}  <br>";

		
	}

	

	


        ?>
    </body>
</html>

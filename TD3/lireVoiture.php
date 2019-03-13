<?php
require_once('Model.php');
require_once ('Conf.php');
require_once ('Voiture.php');


$voiture2 = new Voiture ('peugeot' , 'bleu',  '6545132');
$voiture2->save();
      

$SQL_request = 'SELECT * FROM voiture';

$rep= Model::$pdo->query($SQL_request);
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);

$test = Voiture::getVoitureByImmat('465468'); 
var_dump($test);

$test->afficher();

/*foreach($test as $cell =>$voiture ){
	$voiture->afficher();//var_dump($cell) ;
} */

//$tab_voit->afficher();
$tab_all = Voiture::getAllVoitures();  

?>
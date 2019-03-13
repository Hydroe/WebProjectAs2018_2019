<?php
require_once('Model.php');
require_once ('Conf.php');
require_once ('Voiture.php');

$SQL_request = 'SELECT * FROM voiture';

$rep= Model::$pdo->query($SQL_request);
$tab_obj = $rep->fetchAll(PDO::FETCH_OBJ);


foreach($tab_obj as $cell ){
	var_dump($cell) ;
} 

//$tab_voit::afficher();
$tab_all = Voiture::getAllVoitures();  

?>
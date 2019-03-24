<?php
require_once ('../model/ModelVoiture.php'); // chargement du modèle

class ControllerVoiture {
    public static function readAll() {
        
        $tab_v = ModelVoiture::getAllVoitures();     //appel au modèle pour gerer la BD
       
        require ('../view/voiture/list.php');  //"redirige" vers la vue

    }

    public static function read(){


        $v = ModelVoiture::getVoitureByImmat($_GET['immat']);      
        require  ('../view/voiture/detail.php');
    }

    public static function create(){

     	require  ('../view/voiture/create.php');
    }

    public static function created() {

    	if(empty($_POST) ){
			echo "il y a aucun voiture";
		}

		else{
		$voiture2=new ModelVoiture ($_POST['marque'],$_POST['couleur'],$_POST['immatriculation']);
      
        $voiture2->save();

        ControllerVoiture::readAll();
   	 }
    }
}
?>

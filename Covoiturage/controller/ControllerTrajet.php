<?php
require_once ('../model/ModelTrajet.php'); // chargement du modèle

class ControllerTrajet {
    public static function readAll() {
        
        $tab_v = ModelTrajet::getAllTrajets();     //appel au modèle pour gerer la BD
       
        require ('../view/trajet/list.php');  //"redirige" vers la vue

    }

    public static function read(){


        $t = ModelTrajet::findPassagers($_GET['id']);  
        $dep = ModelTrajet::get($_GET['depart']);
        $arr = ModelTrajet::get($_GET['arrivee']);
        $dat = ModelTrajet::get($_GET['date']); 
        $nbpla = ModelTrajet::get($_GET['nbplaces']);
        $prix = ModelTrajet::get($_GET['prix']);
        // conducteur log pas mis ;

        require  ('../view/trajet/detail.php');
    }

    public static function create(){

     	require  ('../view/trajet/create.php');
    }

    public static function created() {

    	if(empty($_POST) ){
			echo "il y a aucun trajet";
		}

		else{
		$trajet1=new ModelTrajet($_POST['id'],$_POST['depart'],$_POST['arrivee'], 
            $_POST['date'],$_POST['nbplaces'],$_POST['prix'],$_POST['conducteur_login']);
      
        $trajet1->save();

        ControllerTrajet::readAll();
   	 }
    }
}
?>

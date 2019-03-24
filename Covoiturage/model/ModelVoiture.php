<?php
require_once('Model.php');
class ModelVoiture {

	private $marque;
	private $couleur;
	private $immatriculation;

  // un getter      
	public function getMarque() {
		return $this->marque;  
	}
	public function getCouleur() {
		return $this->couleur;  
	}
	public function getImmatriculation() {
		return $this->immatriculation;  
	}

  // un setter 
	public function setCouleur($Couleur2) {
		$this->couleur = $couleur2;
	}
	public function setImmatriculation($immatriculation2) {

		if(strlen ( $immatriculation2 ) < 9){
			$this->immatriculation = $immatriculation2;
		}

	}
	public function setMarque($marque2) {
		$this->marque = $marque2;
	}

  // un constructeur
  /*public function __construct($m, $c, $i)  {
   
   $this->marque = $m;
   $this->couleur = $c;
   $this->immatriculation = $i;
 } */

 public function __construct($m = NULL, $c = NULL, $i = NULL) {
 	if (!is_null($m) && !is_null($c) && !is_null($i)) {
    // Si aucun de $m, $c et $i sont nuls,
    // c'est forcement qu'on les a fournis
    // donc on retombe sur le constructeur à 3 arguments
 		$this->marque = $m;
 		$this->couleur = $c;
 		$this->immatriculation = $i;
 	}
 }
  /*
  public __construct($data){

   $this->marque = $data[0];
   $this->couleur = $data[1];
   $this->immatriculation = $data[2];
 } */

 public static function getAllVoitures(){

 	$SQL_request = 'SELECT * FROM voiture';
 	$rep= Model::$pdo->query($SQL_request);

 	$rep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
 	$tab_voit = $rep->fetchAll();
 	return $tab_voit;

 }

  // une methode d'affichage.
 /*public function afficher() {

 	echo " voiture $this->immatriculation de marque $this->marque $this->couleur";
    // À compléter dans le prochain exercice
 } */

 public static function getVoitureByImmat($immat) {
 	$sql = "SELECT * from voiture WHERE immatriculation=:nom_tag";
    // Préparation de la requête
 	$req_prep = Model::$pdo->prepare($sql);

 	$values = array(
 		"nom_tag" => $immat,
        //nomdutag => valeur, ...
 		);
    // On donne les valeurs et on exécute la requête   
 	$req_prep->execute($values);

    // On récupère les résultats comme précédemment
 	$req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelVoiture');
 	$tab_voit = $req_prep->fetchAll();
    // Attention, si il n'y a pas de résultats, on renvoie false
 	if (empty($tab_voit))
 		return false;
 	return $tab_voit[0];
 }

 public function save(){

 	$sql = "INSERT INTO voiture (immatriculation, marque, couleur)  
 	VALUES (:immatriculation, :marque, :couleur)";

 	$req_prep = Model::$pdo->prepare($sql);

 	$values = array(
 		"immatriculation" => $this->immatriculation,
 		"marque"=> $this->marque,
 		"couleur"=> $this->couleur);
   
 	$resultat = $req_prep->execute($values);
	//var_dump($resultat);
	//$tab_voit = $req_prep->fetchAll();
  

 }


}


?>


<?php

require_once('Model.php');
class Trajet{

private $id;
private $depart;
private $arrivee;
private $date;
private $nbplaces;
private $prix;
private $conducteur_login; 

/*public __construct($data){

   $this->id = $data[0];
   $this->depart = $data[1];
   $this->arrivee = $data[2];
   $this->date = $data[3];
   $this->nbplaces = $data[4];
   $this->prix= $data[5];
   $this->conducteur_login = $data[6];

  } */
public static function findPassagers($id){

    $sql = "SELECT login, nom, prenom 
            FROM utilisateur 
            INNER JOIN passager ON utilisateur.login = passager.utilisateur_login 
            WHERE passager.trajet_id = :trajet_id";

  $req_prep = Model::$pdo->prepare($sql);

  $values = array(
    "trajet_id" => $id ); 
  $req_prep->execute($values);

  $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
  $tab_user = $req_prep->fetchAll();
  
  return $tab_user;
}

public function get($nom_attribut){
	return $this->$nom_attribut;  
  
}
  public function set($nom_attribut,$val){
      return $this->$nom_attribut=$val;

 }

 public function __construct($id = NULL, $depart = NULL,$arrivee = NULL,$date = NULL,
                              $nbplaces=NULL,$prix= NULL, $conducteur_login = NULL) {

   if (!is_null($id) && !is_null($depart) && !is_null($arrivee) &&
       !is_null($date) && !is_null($nbplaces) && !is_null($prix) && !is_null($conducteur_login)) {

    $this->id = $id;
    $this->depart = $depart;
    $this->arrivee = $arrivee;
    $this->date = $date;
    $this->nbplaces = $nbplaces;
    $this->prix = $prix;
    $this->conducteur_login = $conducteur_login;
    }
  }
  public static function getAllTrajets(){

    $SQL_request = 'SELECT * FROM trajet';
    $rep= Model::$pdo->query($SQL_request);
    
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Trajet');
    $tab_voit = $rep->fetchAll();
    var_dump($rep);
    return $rep;

  }
}
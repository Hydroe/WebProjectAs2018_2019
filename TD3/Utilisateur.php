<?php
require_once('Utilisateur.php');

class Utilisateur{
   
  private $login;
  private $nom;
  private $prenom;

  /*public function __construct($login, $nom, $prenom)  {
   $this->login = $login;
   $this->nom = $nom;
   $this->prenom = $prenom;
  } */

  public function getlogin() {
       return $this->login;  
  }
  public function getnom() {
       return $this->nom;  
  }
  public function getprenom() {
       return $this->prenom;  
  }
     
  // un setter 
  public function setlogin($login2) {
        $this->login = $login2;
  }
   public function setnom($nom2) {

        $this->nom = $nom2;
        
       
  }
   public function setprenom($prenom2) {
        $this->prenom = $prenom2;
  }

  public function afficher() {

   echo " $this->login"; 


    
  }

  public function __construct($login = NULL, $nom = NULL, $prenom = NULL) {
   if (!is_null($login) && !is_null($nom) && !is_null($prenom)) {
    
    $this->login = $login;
    $this->nom = $nom;
    $this->prenom = $prenom;
    }
  }
  public static function getAllUtilisateur(){

    $SQL_request = 'SELECT * FROM utilisateur';
    $rep= Model::$pdo->query($SQL_request);
    
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Utilisateur');
    $tab_voit = $rep->fetchAll();
    var_dump($rep);
    return $rep;

  }
}
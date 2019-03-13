<?php
class Voiture {
   
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
  public function getimmatriculation() {
       return $this->marque;  
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
    
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    $tab_voit = $rep->fetchAll();
    var_dump($rep);
    return $rep;

  }
           
  // une methode d'affichage.
  public function afficher() {

    echo " voiture $this->immatriculation de marque $this->marque $this->couleur";


    // À compléter dans le prochain exercice
  }

  function getVoitureByImmat($immat) {
    $sql = "SELECT * from voiture WHERE immatriculation='$immat'"; 
    $rep = Model::$pdo->query($sql);
    $rep->setFetchMode(PDO::FETCH_CLASS, 'Voiture');
    return $rep->fetch();
}

}
?>




<?php

require_once( 'Voiture.php');
session_start();

$tableau = array("foo" => "bar", "bar" => "foo");
$voiture4 = new Voiture ('Renault','bleu','456531');
      

$_SESSION['login'] = "rlebreton";
$_SESSION['Voiture'] = $voiture4 ; 
$_SESSION ['tableau'] = $tableau ;  

echo $_SESSION['login'];

foreach ( $_SESSION['tableau'] as $key => $value) {

echo "$value </br>";
}

$_SESSION['Voiture']->afficher(); 

unset($_SESSION['login']);
unset($_SESSION['tableau']);
unset($_SESSION['Voiture']);

session_unset();    
session_destroy(); 


?>
<?php
require_once 'ControllerVoiture.php';
require_once 'ControllerTrajet.php' ; 

$action = $_GET['action'];
$controller = $_GET['controller']; // ou vais je 

$controller::$action();

?>
s
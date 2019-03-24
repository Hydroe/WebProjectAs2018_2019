<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Detail de la voiture</title>
        <?php require_once "../view/general/inclusions.php"; ?>
    </head>
    <body>
        <?php
       
            require "../view/general/navigation.php";

            echo '<p> Voiture d\'immatriculation ' . $v->getImmatriculation() .
                 ' de marque ' . $v->getMarque() . ', couleur: ' . $v->getCouleur().'</p>';
                        //465468
        ?>
    </body>
</html>

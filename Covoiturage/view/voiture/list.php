<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>

    <?php require_once ('../view/general/inclusions.php'); ?>

    </head>

    <body>

        <?php
        require "../view/general/navigation.php";

        foreach ($tab_v as $v){
            echo '<p> Voiture d\'immatriculation ' . 
            '<a href="routeur.php?action=read&immat='.$v->getImmatriculation().'"> '.$v->getImmatriculation(). '</a> </p>';
        }

        ?>
    </body>
</html>

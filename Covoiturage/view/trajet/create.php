<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
        <?php require_once "../view/general/inclusions.php"; ?>
    </head>
   
    <body>
      <?php require "../view/general/navigation.php"; ?>

      <form method="post" action="routeur.php?action=created">
  <fieldset>
    <legend>Mon formulaire :</legend>
    <p>
            
      <label for="immat_id">Immatriculation</label> :
      <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
    </p>
      <p>
      <label for="couleur_id">Couleur</label> :
      <input type="text" placeholder="Ex :rouge" name="couleur" id="couleur_id" required/>
    </p>
      <p>
      <label for="marq_id">Marque</label> :
      <input type="text" placeholder="Ex :Renault" name="marque" id="marq_id" required/>
    </p>
    <p>
      <input type="submit" value="Envoyer" />

     


         </p>
  </fieldset> 
</form>  
         
        <?php
        

  
  


        ?>
    </body>
</html>

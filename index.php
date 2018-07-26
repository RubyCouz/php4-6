<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
<?php
function sentence($lastname, $firstname, $age) //déclaration fonciton + paramètre
{
  $sentence = 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans'; //définition variable sentence + concaténation
  return $sentence;
}
$sentence = sentence('Cousin Ruby', 'Cédric', 34); //indication des paramètres utilisés
echo $sentence; //affichage de la fonction
 ?>
    </p>
  </body>
</html>

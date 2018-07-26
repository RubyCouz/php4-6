<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <p>
<?php
function sentence($lastname, $firstname, $age)
{
  $sentence = 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans';
  return $sentence;
}
$sentence = sentence('Cousin Ruby', 'Cédric', 34);
echo $sentence;
 ?>
    </p>
  </body>
</html>

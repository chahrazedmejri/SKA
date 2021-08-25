Par défaut, le nombre de chiffres affichés après la virgule est fixé à 12.
Comme le montre le résultat suivant:
<?php
echo 1/3;
?>

Avec ini_set, cette configuration, comme de nombreuses autres, peut être modifiée.
<?php
ini_set("precision", 2);
?>

Elle est maintenant, fixée à 2. Et voici le nouveau résultat:
<?php
echo 1/3;
?>

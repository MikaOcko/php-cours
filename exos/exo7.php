<!-- 
## Exercice 7 : Table de multiplication

Déclare une variable `$nombre = 3;`.
Affiche sa table de multiplication de 1 à 10 (3x1=3, ..., 3x10=30).

💡 **Fonctions utiles** : boucle `for`, multiplication `*`, `echo`
-->
<?php
    $nombre=3;
    $resultat=0;

    for ($i=1; $i <= 10; $i++) { 
      echo($nombre*$i." | ");
    }
?>
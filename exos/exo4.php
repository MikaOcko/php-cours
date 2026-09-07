<!-- 
## Exercice 4 : Pair ou impair

Déclare une variable `$nombre = 8;`.
Affiche si ce nombre est pair ou impair.
Utilise l'opérateur modulo `%` pour savoir s’il reste un reste à la division par 2.

💡 **Fonctions utiles** : `%`, `if`, `echo`
-->
<?php
    $nombre=8;

    if($nombre%2 == 0){
        echo("Pair");
    } else {
        echo("Impair");
    };

?>
<!-- 
## Exercice 14 : Recherche dans un tableau

Déclare un tableau `$nombres = [10, 42, 5, 8, 42, 19];` et une variable `$recherche = 42;`.
Affiche la ou les positions de ce nombre dans le tableau ou indique qu'il n'est pas présent.

💡 **Fonctions utiles** : `in_array()`, `array_keys()`, `array_search()`
-->
<?php
    $nombres = [10, 42, 5, 8, 42, 19];
    $recherche = 42;

    if(in_array($recherche, $nombres)){
        // array_search() ne retourne que la première occurence de $recherche
        $positions = array_keys($nombres, $recherche);
        // var_dump($positions);
        echo "Le nombre ".$recherche." est présent aux positions : " . implode(', ', $positions);
    } else {
        echo "Le nombre ".$recherche." n'est pas présent.";
    }
?>
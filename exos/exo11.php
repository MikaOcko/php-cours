<!-- 
## Exercice 11 : Factorielle

Déclare une variable `$n = 5;` (un entier positif). Calcule et affiche la factorielle de `$n` (ex: 5! = 120).

💡 La factorielle se calcule en multipliant tous les entiers de 1 à n.

💡 **Fonctions utiles** : boucle `for`, opérateur `*`, variable d'accumulation `$result`
-->
<?php
    $n=5;
    $result=1;

    for ($i=1; $i <= $n ; $i++) { 
        $result = $result*$i;
    }

    echo("La factorielle de ".$n." est ".$result);
?>
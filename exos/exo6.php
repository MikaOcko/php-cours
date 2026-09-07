<!-- 
## Exercice 6 : Boucle `while` et somme

Déclare une variable `$n = 5;`. Calcule la somme des entiers de 1 à `$n`.
Exemple : si `$n = 5`, alors affiche `15` (1+2+3+4+5).

💡 **Fonctions utiles** : boucle `while`, variable d’accumulation, `echo`
-->
<?php
    $somme=0;
    $n=5;
    while ($i <= $n) {
        $somme=$somme + $i;
        $i++;
    };
    echo($somme);
?>
<!-- 
Déclare une variable `$mot = 'radar';`. Vérifie si ce mot est un palindrome (se lit dans les deux sens).
Affiche un message selon le résultat.

💡 **Fonctions utiles** : `strtolower()`, `explode()`, comparaison avec `==`
-->
<?php
    $mot = strtolower("radar");
    $reverseMot = strrev($mot);

    if($mot == $reverseMot){
        echo("Palindrome");
    } else {
        echo("Pas palindrome");
    };
?>
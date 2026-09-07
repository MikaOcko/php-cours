<!-- 
## Exercice 2 : Variables et opérations

Déclare deux variables `$a = 7;` et `$b = 3;`. Calcule et affiche :
- La somme
- La différence
- Le produit
- Le quotient

💡 **Fonctions utiles** : `echo`, opérateurs `+`, `-`, `*`, `/` 
-->

<?php
    $a = 7;
    $b = 3;

    $somme = $a + $b;
    $difference =  $a - $b;
    $produit = $a * $b;
    $quotient = $a / $b;


    echo("Somme: ".$somme. " | "."Différence: ".$difference." | "."Produit: ".$produit." | "."Quotient: ".$quotient);
?>
<!-- 
## Exercice 18 : Jeu de dés (simulation)

Simule deux dés avec `$de1 = rand(1, 6);` et `$de2 = rand(1, 6);`.
Affiche les deux résultats et leur somme.
Si la somme vaut 7 ou 11, affiche "Gagné !", sinon "Perdu".

💡 **Fonctions utiles** : `rand()`, `echo`, `if`

-->
<?php
    $de1=rand(1,6);
    $de2=rand(1,6);

    $somme=$de1+$de2;

    echo "Dés 1: ".$de1;
    echo "Dés 2: ".$de2;
    echo "Somme: ".$somme;

    if($somme === 7 || $somme === 11){
        echo "Gagné !";
    } else {
        echo "Perdu";
    };

?>
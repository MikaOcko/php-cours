<!-- 
### Exercice 8 : Trouver le plus grand

Déclare trois variables : `$a = 14;`, `$b = 22;`, `$c = 6;`.
Affiche le plus grand des trois.

💡 **Fonctions utiles** : `if`, `elseif`, `else`.
-->
<?php
    $a=14;
    $b=22;
    $c=6;
    $max=0;

    if($a>$b && $a>$c){
        $max=$a;
    } else if($b>$a && $b>$c){
        $max=$b;
    } else {
        $max=$c;
    };
    echo("Le plus grand nombre est ".$max);
?>
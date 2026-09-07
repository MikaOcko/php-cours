<!-- 
## Exercice 17 : Deviner une lettre dans un mot

Déclare une chaîne `$mot = 'ordinateur';` et une lettre `$lettre = 'r';`.
Affiche les positions où la lettre apparaît dans le mot ou un message si elle est absente.

💡 **Fonctions utiles** : `strlen()`, `substr()`, boucle `for`, `strtolower()`
-->
<?php
    $mot = strtolower("ordinateur");
    $lettre = strtolower("r");
    $found=false;

    for ($i=0; $i < strlen($mot) ; $i++) { 
        $item = substr($mot, $i, 1);

        if($item === $lettre){
            echo "La lettre ".$lettre." est à la position :".$i;
            $found = true;
        }
    }

    if(!$found){
        echo "La lettre ".$lettre." n'est pas dans le mot.";
    }

?>
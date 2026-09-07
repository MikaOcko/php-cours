<!-- 
## Exercice 17 : Deviner une lettre dans un mot

Déclare une chaîne `$mot = 'ordinateur';` et une lettre `$lettre = 'r';`.
Affiche les positions où la lettre apparaît dans le mot ou un message si elle est absente.

💡 **Fonctions utiles** : `strlen()`, `substr()`, boucle `for`, `strtolower()`
-->
<?php
    $mot = strtolower("ordinateur");
    $lettre = "r";

    echo strlen($mot);
?>
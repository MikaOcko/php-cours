<!-- 
## Exercice 3 : Conditions simples

Déclare une variable `$age = 17;`. Ensuite, affiche :
- "Tu es mineur" si l'âge est strictement inférieur à 18
- "Tu es majeur" sinon

💡 **Fonctions utiles** : `if`, `else`, `echo` 
-->
<?php
    $age=17;

    if($age < 18){
            echo("Tu es mineur");
        } else {
            echo("Tu es majeur");
    };
?>
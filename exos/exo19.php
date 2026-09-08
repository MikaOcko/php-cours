<!-- 
## Exercice 19 : Calculs successifs avec tableau d’opérations

Déclare deux nombres `$a = 12;` et `$b = 4;` et un tableau `$operations` contenant plusieurs opérations, par exemple :
```php
$operations = ['+', '-', '*', '/'];
```

Écris un script qui parcourt le tableau `$operations` et effectue le calcul correspondant à chaque opération entre `$a` et `$b`.  
Affiche à chaque fois l’opération et le résultat, par exemple :
```
12 + 4 = 16  
12 - 4 = 8  
12 * 4 = 48  
12 / 4 = 3
```

---

💡 **Concepts utiles** :
- Boucle `foreach`
- `switch` ou `if` pour gérer les opérations
- Opérateurs arithmétiques `+`, `-`, `*`, `/`
- Attention à la division par zéro (ici `$b` est non nul, mais c’est un bon point à mentionner)

-->
<?php
    $a = 12;
    $b = 0;
    $operations = ["+", "-", "*", "/"];

    foreach ($operations as $operateur) {
        switch($operateur){
            case '+' :
                $somme = $a + $b;
                echo "Somme de ".$a.$operateur.$b." est ".$somme.".";
                break;
            case '-' :
                $somme = $a - $b;
                echo "Somme de ".$a.$operateur.$b." est ".$somme.".";
                break;
            case '*' :
                $somme = $a * $b;
                echo "Somme de ".$a.$operateur.$b." est ".$somme.".";
                break;
            case '/' :
                if($b !== 0){
                    $somme = $a / $b;
                    echo "Somme de ".$a.$operateur.$b." est ".$somme.".";
                } else {
                    echo "Il n'est pas possible de diviser par 0.";
                }
                break;
        };
    }

?>
<!-- 
## Exercice 12 : Compter les multiples d’un nombre

Déclare deux variables dans ton code :
```php
$limite = 50;
$multipleDe = 7;
```

Écris un script qui **compte combien de nombres entre 1 et `$limite`** sont des **multiples** de `$multipleDe`.  
Un multiple, c’est un nombre divisible sans reste.

👉 Exemple avec les valeurs ci-dessus :
- Les multiples de 7 entre 1 et 50 sont : 7, 14, 21, 28, 35, 42, 49
- Il y en a **7**

🎯 Ton script doit afficher :
```
Il y a 7 multiples de 7 entre 1 et 50.
```

---

💡 **Concepts utiles** :
- Une boucle `for` de 1 à `$limite`
- L’opérateur modulo `%` pour tester si un nombre est divisible
- Une variable compteur `$total` pour compter les cas où le modulo vaut `0`
-->
<?php
    // Combien de fois il y a $multiple de 1 à 50


    $limite = 50;
    $multipleDe = 7;
    $total=0;

    for ($i=1; $i < $limite; $i++) { 
        if($i%$multipleDe == 0){
            $total++;
        }
    }
    echo($total." fois");
?>
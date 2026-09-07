<!-- 
## Exercice 13 : Doubler les éléments d’un tableau

Déclare le tableau suivant :
```php
$nombres = [1, 3, 5, 7, 9];
```

Crée un **nouveau tableau** appelé `$doubles` qui contient les **valeurs doublées** de chaque nombre du tableau `$nombres`.

👉 Exemple :  
Le tableau `$doubles` doit contenir `[2, 6, 10, 14, 18]`

📤 Affiche le résultat avec :
```php
print_r($doubles);
```

---

💡 **Concepts utiles** :
- Boucle `foreach` ou `for`
- Création d’un tableau vide : `$doubles = [];`
- Ajouter un élément dans un tableau : `$doubles[] = $valeur * 2;`
-->
<?php
    $nombres = [1, 3, 5, 7, 9];
    $doubles=[];

    foreach($nombres as $valeur){
        // $doubles[] = $valeur *2;
        array_push($doubles, $valeur*2);
    };
    // var_dump($doubles);
    print_r($doubles);
?>
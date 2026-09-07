<!-- 
## Exercice 15 : Trouver le plus petit nombre dans un tableau

Déclare un tableau `$valeurs` contenant les nombres suivants :
```php
$valeurs = [8, 3, 5, 1, 9];
```

Écris un script qui **trouve et affiche le plus petit nombre** dans ce tableau, sans utiliser de fonctions PHP comme `min()`.

---

💡 **Concepts utiles** :
- Boucle `foreach` ou `for` pour parcourir les éléments du tableau
- Variable pour stocker temporairement la plus petite valeur trouvée
- Comparaison avec chaque élément pour mettre à jour cette variable

---

🎯 Exemple de résultat attendu :
```
Le plus petit nombre est : 1
-->
<?php
    $valeurs = [8, 3, 5, 1, 9];
    $min=$valeurs[0];
    foreach($valeurs as $number){
        if($number < $min){
            $min = $number;
        };
    };

    echo( "Le plus petit nombre est : ". $min);
?>
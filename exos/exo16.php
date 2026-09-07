<!-- 
## Exercice 16 : Jeu du nombre mystère automatisé avec tirages aléatoires

Déclare un tableau `$mysteres` contenant plusieurs nombres mystères, par exemple :
```php
$mysteres = [38, 72, 15];
```

Pour chaque nombre mystère dans `$mysteres`, écris un script qui simule des propositions aléatoires entre 1 et 100 (avec `rand(1, 100)`) jusqu’à trouver la bonne valeur.

Pour chaque nombre mystère, compte et affiche le nombre d’essais nécessaires pour deviner correctement.

---

💡 **Concepts utiles** :
- Boucle `foreach` pour parcourir les nombres mystères
- Boucle `while` pour répéter les essais aléatoires
- Fonction `rand(1, 100)` pour générer un nombre aléatoire
- Compteur d’essais
- Conditions `if` pour vérifier la proposition

---

🎯 Exemple de résultat attendu (les nombres d’essais varient à chaque exécution) :
```
Nombre mystère 38 trouvé en 12 essais  
Nombre mystère 72 trouvé en 8 essais  
Nombre mystère 15 trouvé en 25 essais  
```
-->
<?php
    $mysteres = [38, 72, 15];
    
    foreach($mysteres as $number){
        $counter=0;
        $found=false;
        
        while(!$found){
            $randomNumber = rand(1,100);
            $counter++;

            if($randomNumber === $number){
                $found=true;
            }
        }

        echo "Nombre mystère ".$number." trouvé en ".$counter." essais.";
    }
?>
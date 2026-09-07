<!-- 
## Exercice 9 : Compter les voyelles

Déclare une variable `$phrase = 'Bonjour tout le monde';`.
Compte et affiche le nombre de voyelles (a, e, i, o, u, y).

💡 **Fonctions utiles** : `strtolower()`, `str_split()`, `in_array()`, boucle `foreach`
-->
<?php
    $phrase = strtolower("Bonjour tout le monde");
    $vowels = ["a", "e", "i", "o", "u", "y"];
    $count = 0;
    
    // Décomposition de la phrase
    $splitPhrase = str_split($phrase);
    // Vérification si chaque lettre est une voyelle
    foreach ($splitPhrase as $letters) {
        if(in_array($letters, $vowels)){
            $count++;
        }
    }

    echo("Il y a ".$count." voyelles.");
?>
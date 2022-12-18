<?php

// Exercice 1 : Plus petite valeur (15pts) ok

/*/
 * Écrire l'algorithme qui permet d'obtenir la plus petite valeur d'un tableau
    * Les valeurs négatives sont possibles
    * Utiliser un tableau numéroté
 * Écrire l'algorithme qui permet d'obtenir la plus grande valeur d'un tableau
/*/

/* --------------------------------------------------------------------------------------- */

// On déclare le tableau des notes
$listNotes = [10,19,-11,14,14.5,10,13,16,15,6,-5,-22];

// Fonction qui recherche le plus petit nombre
function plusPetit($listNotes) {
    // On initialise la valeur la plus basse, à l'index 0 du tableau
    $basseValeur = $listNotes[0];
    for( $i = 0 ; $i < count($listNotes) ; $i++ ) {
        // Si la valeur la plus basse est supérieure à la valeur itérée
        // Cette valeur devient la plus basse valeur
        if ($basseValeur > $listNotes[$i]) {
            $basseValeur = $listNotes[$i];
        }
    }
    echo "<br> La valeur la plus basse de la liste est $basseValeur. <br>";
}

// Fonction qui recherche le plus grand nombre
function plusGrand($listNotes) {
    // On initialise la valeur la plus haute à l'index 0 du tableau
    $hauteValeur = $listNotes[0];
    // On parcours la liste de notes
    for ( $i = 0 ; $i < count($listNotes) ; $i++ ) {
        // Si la valeur la plus haute est inférieure à la valeur itéréé
        // Cette valeur devient la plus haute valeur
        if ($hauteValeur < $listNotes[$i]) {
            $hauteValeur = $listNotes[$i];
        }
    }
    echo "<br>La valeur la plus haute de la liste est $hauteValeur.";
}

echo "Les valeurs de la liste <br>";
var_dump($listNotes);
echo "<br>";
plusPetit($listNotes);
plusGrand($listNotes);

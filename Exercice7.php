<?php
// Exercice 7 : Tri de notes

/*/
 * Écrire l'algorithme qui permet de trier une liste de notes par ordre croissant
     * Les notes négatives sont possibles
     * Ne pas utiliser les fonctions de tri
     * Utiliser un tableau numéroté
/*/

/* --------------------------------------------------------------------------------------- */

// On déclare une variable dans laquelle on va stocker un tableau de valeurs
$notes = [13,-5,17,-14,69,-10];

// On crée une fonction qui va trier les valeurs de la variable dans l'ordre croissant
function triNotes($notes) {
    // On fait deux boucles :
    // Quand on sera sur $notes[1] (pour $notes[$i]
    //
    for( $i = 0 ; $i < count($notes) ; $i++) {
        for ( $j = 0 ; $j < count($notes); $j++) {
            if ($notes[$j] > $notes[$i]) {
                $temp = $notes[$i];
                $notes[$i] = $notes[$j];
                $notes[$j] = $temp;
            }
        }
    }
    echo "<br> La liste de notes triées : ";
    var_dump( $notes);
}

echo "La liste de notes non triée : ";
var_dump($notes);
echo "<br>";
triNotes($notes);

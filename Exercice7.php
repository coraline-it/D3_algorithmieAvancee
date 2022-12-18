<?php
// Exercice 7 : Tri de notes (5pts)

/*/
 * Écrire l'algorithme qui permet de trier une liste de notes par ordre croissant
     * Les notes négatives sont possibles
     * Ne pas utiliser les fonctions de tri
     * Utiliser un tableau numéroté
/*/

/* --------------------------------------------------------------------------------------- */


// On déclare un tableau de notes
$notes = [13,-5,17,-14,69,-10];

// On déclare une fonction qui prend en paramètre un tableau de notes
function triNotes($notes) {
    // On utilise une boucle "for" pour parcourir chaque élément du tableau
    for( $i = 0 ; $i < count($notes) ; $i++) {
        // On utilise une autre boucle "for" pour parcourir à nouveau chaque élément du tableau
        for ( $j = 0 ; $j < count($notes); $j++) {
            // Si l'élément actuel est plus grand que l'élément suivant, on échange leur place
            if ($notes[$j] > $notes[$i]) {
                $temp = $notes[$i];
                $notes[$i] = $notes[$j];
                $notes[$j] = $temp;
            }
        }
    }
    // On affiche le tableau de notes triées
    echo "<br> La liste de notes triées : ";
    var_dump( $notes);
}

// On affiche le tableau de notes non triées
echo "La liste de notes non triée : ";
var_dump($notes);
echo "<br>";
// On appelle la fonction de tri des notes
triNotes($notes);

<?php
// Exercice 7 : Tri de notes

/*/
 * Écrire l'algorithme qui permet de trier une liste de notes par odre croissant
     * Les notes négatives sont possibles
     * Ne pas utiliser les fonctions de tri
     * Utiliser un tableau numéroté
/*/


/*function notesTriees($listeNotes,$listeTriee) {
// On test la nullité du tableau
    echo "Début de fonction, ";
    if ($listeNotes == 0) {
        return "Le tableau des notes est vide";
    } elseif ($listeNotes >= 1) {
       echo "On rentre dans nos conditions, ";
        $basseNote = $listeNotes[0];
        for ($i = 0; $i < sizeof($listeNotes); $i++) {
            echo $basseNote;
            if($listeNotes[$i] > $basseNote) {
                echo " plus petit que";
            } else {

            }
        }
    }
    return $listeTriee;
}

notesTriees($listeNotes,$listeTriee);
*/
/*             for ($j = 0; $i < $listeNotes; $i++) {
                if ($listeNotes[$i] < $triNotes) {
                    $listeTriee = $listeNotes[$j];
                    $listeNotes[$j] = $triNotes;
                }
            }

*/
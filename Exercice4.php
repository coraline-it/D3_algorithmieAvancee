<?php
// Exercice 4 : Jeu du pendu

/*/
 * Créer un algorithme pour faire deviner un mot
     * Le mot à deviner est stocké dans le code et stocké dans le tableau, lettre par lettre
     * Afficher un nombre de traits correspondant au nombre de lettres
     * Le joueur saisit une lettre et valide
        * Soit la lettre existe, dans ce cas, tous les trais à la bonne position sont remplacés par la lettre trouvée
        * Soit cela décompte le nombre de tentatives
     * Le joueur a 10 tentatives
/*/

/* --------------------------------------------------------------------------------------- */
?>

<!-- On crée le formulaire qui va permettre de récupérer le texte -->
<p>Veuillez renseigner un message que vous voulez crypter pour tester la fonction.</p>
<form action="Exercice4.php" method="post">
   <input name="caractr" aria-label="caractr">
   <input type="submit" name="bouton" value="Ok">
</form>

<?php

$leTexte = "Raikette baby fluffy puppy";
$arrLeTexte = str_split($leTexte);
$tentatives = 10;
$lettresTrouvées = count($leTexte);
$tentUtil = "";

if(isset($_POST['caractr'])) {
    $tentUtil = $_POST['msg'];
}

// Fonction pour afficher le nombre de traits correspondants au nombre de caractères





<?php
// Exercice 3 : Recherche lettre (15pts)

/*/
 * Demander la saisie d'un mot
 * Stocker le mot dans un tableau lettre par lettre
 * Demander la saisie d'une lettre
 * Retourner le nombre de fois que cette lettre apparaît dans le mot
/*/

/* --------------------------------------------------------------------------------------- */
?>
  <!-- On crée le formulaire qui va permettre de récupérer le texte -->
  <p>Veuillez renseigner un mot</p>
  <form action="Exercice3.php" method="post">
    <input name="mot" aria-label="mot">
    <p>Veuillez renseigner la lettre pour laquelle vous voulez trouver le nombre d'occurence</p>
    <input name="lettre" aria-label="lettre">
    <input type="submit" name="bouton" value="Ok">
  </form>

<?php
// On déclare toutes les variables qui vont être utilisées ici
$mot = "";
$lettre = "";
$arrMot = [];

// On récupère les entrées sur le form par l'utilisateur pour le mot et la lettre qu'on stock dans une valeur
if(isset($_POST['mot']) && isset($_POST['lettre'])) {
    $mot = $_POST['mot'];
    // On utilise la fonction PHP str_split qui convertit une chaîne de caractères en tableau
    // la caîne de caractère est maintenant dans un tableau caractère par caractère
    $arrMot = str_split($_POST['mot']);
    $lettre = $_POST['lettre'];
    //$nbLettre = substr_count($mot,$lettre); //pour le compte d'une chaîne de caractères. (Autre manière, en utilisant une fonction php)
}
// On créé une fonction qui va compter le nombre d'une lettre choisie par l'utilisateur
// dans un mot renseigné par ce dernier puis afficher le mot et le nombre de fois que la lettre apparaît
function nbLettreMot($lettre,$arrMot) {
    // On initialise un compteur à 0
    $cptLettre = 0;
    // On parcours donc le tableau qui contient la chaîne de caractère lettre par lettre, rentrée par l'utilisateur
    // si la lettre itérée correspond à la lettre choisie, le compteur augmente de 1
    for($i = 0 ; $i < count($arrMot) ; $i++) {
        if ($arrMot[$i] === $lettre) {
            $cptLettre ++;
        }
    }
    return $cptLettre;
}

$nbLettre = nbLettreMot($lettre,$arrMot);
echo "Dans le mot : ".$mot." <br> La lettre : ' ".$lettre." ' apparait ".$nbLettre." fois.";

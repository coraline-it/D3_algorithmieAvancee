<?php
// Exercice 3 : Recherche lettre

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
$nbLettre = "";

if(isset($_POST['mot']) && isset($_POST['lettre'])) {
    $mot = $_POST['mot'];
    $arrMot = str_split($_POST['mot']);
    $lettre = $_POST['lettre'];
    // Autre manière (sans créer de fonction), en utilisant la fonction PHP substr_count() qui cherche un caractère dans une chaîne de caractères.
    //$nbLettre = substr_count($mot,$lettre); //pour le compte d'une chaîne de caractères.
}

function nbLettreMot($lettre,$arrMot) {
  $cptLettre = 0;
  for($i = 0 ; $i < count($arrMot) ; $i++) {
      if ($arrMot[$i] == $lettre) {
      $cptLettre ++;
    }
  }
    return $cptLettre;
}

$nbLettre = nbLettreMot($lettre,$arrMot);
echo "Dans le mot : ".$mot." <br> La lettre : ' ".$lettre." ' apparait ".$nbLettre." fois.";

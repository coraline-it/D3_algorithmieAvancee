<p style="color: blue; font-weight: bold"> à finir</p>

<?php
// Exercice 4 : Jeu du pendu (15pts)

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

$leTexte = "Raikette";
$arrLeTexte = str_split($leTexte);
$tentatives = 10;
$entree = "";

if(isset($_POST['caractr'])) {
    $entree = $_POST['caractr'];
}

// On affiche un trait à chaque caractère
foreach ($arrLeTexte as $trait) {
  echo "_ ";
}

/// On va créer une fonction qui permet de comparer la lettre renseignée par l'utilisateur
///
function isExist($arrLeTexte,$entree,$trait) {
  for ($i = 0 ; $i < count($arrLeTexte) ; $i++) {
    if ($arrLeTexte[$i] === $entree) {
      echo $entree;
    }
  }
}

// Fonction qui va permettre de mettre à jour le nombre de chances
// de l'utilisateur selon
function update_chance($mot, $lettre, $chance)
{
    foreach ($mot as $key => $value)
    {
        if ($key == $lettre)
            return $chance;
    }
    return ($chance - 1);
}

// Fonction pour afficher le nombre de traits correspondants au nombre de caractères


echo "<br> <br>Il vous reste".$tentatives." tentatives.";






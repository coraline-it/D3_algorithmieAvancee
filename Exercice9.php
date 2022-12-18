<?php
// Exercice 9 : Jeu de dés (5pts)

/*/
 * Créer un algorithme qui permet de lancer 5 dés
     * Permettre au joueur de cliquer sur "Lancer les dés"
     * Afficher le résultat des dés, par exemple (2,1,4,3,2)
     * Utiliser la fonction random
     * Si le joueur a fait 5 chiffres identiques : Afficher Yam's
/*/

/* --------------------------------------------------------------------------------------- */
?>
<!-- Affiche un message invitant l'utilisateur à lancer les dés -->
  <p>Lancez les dés pour tenter de faire un Yam's</p>
  <form method="post">
    <input type="submit" value="Lancer les dés" name="lancerDes">
  </form>

<?php
// Vérifie si le formulaire a été soumis
if(array_key_exists("lancerDes",$_POST)) {
    // Si oui, appelle la fonction lancerDes()
    lancerDes();
}

// Fonction qui génère un nombre aléatoire compris entre 1 et 6
function desAleatoires()
{
    $lesDes = [];
    $min = 1;
    $max = 6;
    // Test de compréhension du try catch
    try {
        // Génère un nombre aléatoire avec random_int entre le min et le max
        $lesDes = random_int($min, $max);
        return $lesDes;
    } catch (Exception $e) {
        echo 'Exception : ', $e->getMessage(), "\n";
    }
    return $lesDes;
}


// Fonction qui lance un dé et vérifie si c'est un Yam's
function lancerDes()
{
    // Obtient le résultat du lancer de dé
    $leTirage[] = desAleatoires();
    // Affiche le numéro obtenu
    echo "Le dé a retourné ce numéro : ".implode(", ",$leTirage);

    // Initialise la variable $desIdentiques à true
    $desIdentiques = true;
    // Vérifie si tous les éléments de $leTirage sont identiques
    foreach ($leTirage as $tirage) {
        if ($tirage != $leTirage[0]) {
            // Si un élément est différent, met $desIdentiques à false
            $desIdentiques = false;
            break;
        }
    }

    // Affiche un message différent selon la valeur de $desIdentiques
    if ($desIdentiques) {
        echo "<br> <br> 🌈 Vous avez fait Yam's ! 🥳";
    } else {
        echo "<br> <br> Vous n'avez pas fait Yam's ... 🙄 Retentez votre chance !";
    }
}






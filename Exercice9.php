<?php
// Exercice 9 : Jeu de dés

/*/
 * Créer un algorithme qui permet de lancer 5 dés
     * Permettre au joueur de cliquer sur "Lancer les dés"
     * Afficher le résultat des dés, par exemple (2,1,4,3,2)
     * Utiliser la fonction random
     * Si le joueur a fait 5 chiffres identiques : Afficher Yam's
/*/

/* --------------------------------------------------------------------------------------- */
?>
<p>Lancez les dés pour tenter de faire un Yam's</p>
<form method="post">
    <input type="submit" value="Lancer les dés" name="lancerDes">
</form>

<?php
if(array_key_exists("lancerDes",$_POST)) {
    lancerDes();
}

function desAleatoires()
{
    $lesDes = [];
    $min = 1;
    $max = 2;
    try {
        $lesDes = random_int($min, $max);
        return $lesDes;
    } catch (Exception $e) {
        echo 'Exception : ', $e->getMessage(), "\n";
    }
    return $lesDes;
}

function lancerDes()
{
    $leTirage = [];
    for ( $i = 0 ; $i < 5 ; $i++) {
        $leTirage[] = desAleatoires();
    }
    echo "Les dés ont retourné ces numéros : ".implode(", ",$leTirage);
    $var = "";
    $var2 = "<br> <br> Vous n'avez pas fait Yam's ... 🙄 Retentez votre chance !";
    for ( $j = 0 ; $j < count($leTirage)-1 ; $j++) {
        if($leTirage[$j] == $leTirage[$j+1] && $leTirage[$j+1] == $leTirage[$j+2] && $leTirage[$j+2] == $leTirage[$j+3] && $leTirage[$j+3] == $leTirage[$j+4] && $leTirage[$j+4] == $leTirage[$j+5]) {
            $var = "🌈 Vous avez fait Yam's ! 🥳";
        }
        echo $var;
    }
    echo $var2;
}





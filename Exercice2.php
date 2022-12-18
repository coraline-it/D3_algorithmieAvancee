<?php
// Exercice 2 : Chiffrement CAESAR (15pts) ok

/*/
 * Chiffrement avec le code Caesar
    * Demander de saisir un texte
    * Stocker le texte dans un tableau, lettre par lettre
    * Appliquer le chiffrement par le code Caesar, en appliquant un décalage de +2
    * Afficher le texte chiffré
    * Déchiffrer le texte
    * Afficher le texte déchiffré
/*/

/* --------------------------------------------------------------------------------------- */
?>
  <!-- On crée le formulaire qui va permettre de récupérer le texte -->
  <p>Veuillez renseigner un message que vous voulez crypter pour tester la fonction.</p>
  <form action="Exercice2.php" method="post">
    <input name="msg" aria-label="msg">
    <input type="submit" name="bouton" value="crypter">
  </form>

<?php
// On déclare toutes les variables qui vont être utilisées ici, j'ai décidé de déclarer l'alphabet lettre par lettre
// Et l'alphabet avec le décalage +2 en commençant par 'c'
$alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$decalage = ["c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","a","b"];
$msgCrypte = "";
$msgDecrypte = "";
$msg = "";

// On récupère dans un form la châine de caractère rentrée par l'utilisateur
if(isset($_POST['msg'])) {
    $msg = $_POST['msg'];
    echo "Message à crypter: ".$msg."<br>";
}

// Je crée une fonction qui va permettre de chiffrer et déchiffrer le msg de l'utilisateur
// On itère dans $msg et dans $alphabet
// par le même index,
function crypter($msg,$alphabet,$decalage,$msgCrypte) {
    for( $i = 0 ; $i < strlen($msg) ; $i++ ) {
        for( $j = 0 ; $j < count($alphabet) ; $j++ ) {
            // On veut trouver chacune des lettres du message dans le tableau $alphabet
            // Et la correspondance de chacune de ces lettres dans le tableau $décalage
            if($msg[$i] === $alphabet[$j]) {
                $msgCrypte[$i] = $decalage[$j];
                break;
            }
        }
    }
    return $msgCrypte;
}

// Test de la fonction
$msgCrypte = crypter($msg,$alphabet,$decalage,$msgCrypte);
$msgDecrypte = crypter($msgCrypte,$decalage,$alphabet,$msg);
echo "Message crypté: ".$msgCrypte;
echo "<br>";
echo "Message décrypté: ".$msgDecrypte;

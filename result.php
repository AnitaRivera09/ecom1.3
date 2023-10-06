<?php
require_once("functions.php");

if ($_POST){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    if (empty($name) && empty($prenom)){
        echo "</br> Nom au Prenom vide";
    } else {
     echo "</br> Mon nom est : " . $nom;
     echo "</br>";
     echo "</br> Mon prenom est : " . $prenom;
}
$nomLengthIsValid = nomLengthIsValid($_POST['nom']);
echo "</br>";
var_dump($nomLengthIsValid);
if (!$nomLengthIsValid['isValid']){

}

$prenomLengthIsValid = prenomLengthIsValid($_POST['prenom']);
echo "</br>";
var_dump($prenomLengthIsValid);
if (!$prenomLengthIsValid['isValid']){

}

echo "</br>";
$saltedName = addSalt($_POST['nom']);
var_dump($saltedName);

$encodeName = encodeName($saltedName);
echo "</br>";
echo $encodeName;
}

?>
<a href="./index.php">retour</a>

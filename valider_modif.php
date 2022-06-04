<?php
include  "connexion.php";

$p=$_POST['prenom'];
$n=$_POST['nom'];
$e=$_POST['email'];


$req='UPDATE `etudiants` SET `nom`="'.$n.'",`prenom`="'.$p.'",`email`="'.$e.'" 

WHERE id="'.$_GET['user'].'"';

$resultat = $mysqli->query($req) or die ($mysqli->error());

echo "<h1>modification faite avec succès</h1>";
?>
<br><center><a href="afficher.php"><input type="button" value="page d'aceuil"  ></a></center>
<br></body></html>
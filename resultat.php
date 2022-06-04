<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

<?php

include  "connexion.php";


$n=$_POST['nom'];
$p=$_POST['prenom'];
$e=$_POST['email'];





$r = "INSERT INTO etudiants (nom,prenom,email) VALUES ('$n','$p','$e')";


$resultat = $mysqli->query($r);
echo "<h1>Insertion faite avec succès</h1><br><br>";
?>
<a href="index.html"><input type="button" value="Retour CV"  ></a>
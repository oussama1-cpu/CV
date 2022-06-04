


<?php
include "connexion1.php";

$p=$_POST['login'];
$n=$_POST['pass'];


$r = "INSERT INTO admin(login,pass) VALUES ('$n','$p')";

$resultat = $mysqli->query($r) or die ($mysqli->error());

echo "Inscription faite avec succès<br><br>";

?>
<a href ="login.html">Page d'acceuil</a>
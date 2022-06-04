<?php
include "connexion1.php";

$p=$_POST['login'];
$n=$_POST['pass'];


$r = "INSERT INTO admin (login,pass) VALUES ('$p','$n')";

$resultat = $mysqli->query($r) or die ($mysqli->error());

echo "<br><br>";

?>
<h1>Inscription faite avec succès </h1>
<a href ="login.html"><input type="button" value="retour"  ></a>
<a href ="http://localhost/phpmyadmin/db_structure.php?db=test_&table=&server=1&target=&token=4ecd8e490d0469c6f1396347fd1d9b04#PMAURL-8:sql.php?db=cvdb&table=admin&server=1&target=&token=4ecd8e490d0469c6f1396347fd1d9b04"><input type="button" value="Basse de donner"  ></a>
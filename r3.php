

<?php
include "connexion1.php";

$p=$_POST['login'];


$r = "SELECT * FROM admin WHERE login='$p'";

$resultat = $mysqli->query($r) or die ($mysqli->error());
if($ligne = $resultat->fetch_assoc())
    echo "Votre mot de passe est: ".$ligne['pass'];
  
  else
    echo "compte inexistant,vous devez vous inscrire <a href='inscrit.html'><input type='button' value='sincrire' ></a><br><br>";

?>
<a href ="login.html"><input type="button" value="page d'aceuil"  ></a>
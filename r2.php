<?php
include "connexion1.php";

$p=$_POST['login'];
$n=$_POST['pass'];


$r = "SELECT * FROM admin WHERE login='$p' and pass='$n'";

$resultat = $mysqli->query($r) or die ($mysqli->error());
if($ligne = $resultat->fetch_assoc()){
  echo'bienvenu';
  
  header('Location:afficher.php');
    exit();

}
    
  
else{
  echo "<h1>Login ou le mot de passe est incorrect.</h1><br><br>";
 header('Location:login.html');
    exit();
}
  

?>




<?php
//connexion à la base des données

$mysqli = new mysqli("localhost", "root", "", "cvdb");
//				    nom serveur,nom utilisateur,password,nom de la BD

 if ($mysqli->connect_error) { 
  // echo "erreur";

die($mysqli->connect_error);


}
//else echo "ok";

?>
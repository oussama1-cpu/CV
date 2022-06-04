
<?php
include  "connexion.php";

$requete = "SELECT * FROM etudiants WHERE id=".$_GET['identifiant'];
$resultat = $mysqli->query($requete) or die ($mysqli->error());
$ligne = $resultat->fetch_assoc();
?>

<!DOCTYPE html>
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="stylelog.css">
	
	<title></title>	</head><body>
	
<form action="valider_modif.php?user=<?php echo $ligne["id"];?>" method="POST">

<table align="center">
<h1 align="center">modification</h1>
<tr><td>Entrez votre prénom: </td>
<td><input type="text" name="prenom" value="<?php echo $ligne["prenom"];?>"/></td></tr>
<tr><td>Entrez votre nom: 	 </td>
<td><input type="text" name="nom" value="<?php echo $ligne["nom"];?>"/></td></tr>
<tr><td>Entrez votre email:  </td>
<td><input type="email" name="email" value="<?php echo $ligne["email"];?>" /></td></tr>
			 
								 
<tr><td><input type="submit" value="Annuler" name="Annuler" /></td>
<td><input type="submit" value="Valider" name="Valider" /></td></tr>
</table></form><br><br><center><a href="afficher.php"><input type="button" value="RETOUR"  ></a></center></body></html>
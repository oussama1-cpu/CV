<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="fo.css">
	<title></title>	</head><body>
<?php include  "connexion.php";

$requete = "DELETE FROM etudiants WHERE id=".$_GET['identifiant'];

$resultat = $mysqli->query($requete) or die ($mysqli->error());


?>
<br><center>
<h1>suppression faite avec succes</h1>
<a href="afficher.php"><input type="button" value="RETOUR"  ></a>
</center>
<br>
</body></html>
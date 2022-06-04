<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="mi.css">
	<title></title>	</head><body>
<?php include  "connexion.php";

$requete = "SELECT * FROM etudiants WHERE id=".$_GET['identifiant'];
$resultat = $mysqli->query($requete) or die ($mysqli->error());

echo "<br><br><table align='center' border :1px solid orange ; padding:15px; >
<h1 align='center' font-family :arial;> Detail</h1>
<tr>
	<td><font color='red'>id</font></td>
	<td><font color='red'>nom</font></td>
	<td><font color='red'>prenom</font></td>
	<td><font color='red'>email</font></td>
</tr>";

$ligne = $resultat->fetch_assoc();

	echo '<tr><td>'. $ligne["id"] .'</td>';
	echo '<td>'. $ligne["nom"] .'</td><td>'. $ligne["prenom"] .'</td>
	<td>'. $ligne["email"] .'</td>
	</tr>';

echo "</table>";
?>
<br><center><a href="afficher.php"><input type="button" value="RETOUR"  ></a></center>
<br></body></html>
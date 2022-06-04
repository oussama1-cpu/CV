
<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="mi.css">
	<title></title>	</head><body>
	
<?php include  "connexion.php";

$requete = "SELECT * FROM etudiants";
$resultat = $mysqli->query($requete) or die ($mysqli->error());

echo "<div><br><br><table align='center' >
<h1 align='center' font-family :arial;> liste de utilisateur</h1>
<br><br><table align='center'  border :1px solid orange ; padding:15px;>
<tr>
	<td><font color='red'>id</font></td>
	<td><font color='red'>nom</font></td>
	<td><font color='red' text-align:center; >detail</font></td>
	<td><font color='red' text-align:center; >modification</font></td>
	<td><font color='red' text-align:center; >supprimer</font></td>
	<td></td><td></td>
	<td></td>
</tr></div>";

while($ligne = $resultat->fetch_assoc())
{	
	echo '<tr><td>'. $ligne["id"] .'</td>';
	echo '<td>'. $ligne["nom"] .'</td>';
	
	echo '<td><a href=d.php?identifiant='.$ligne["id"].'><input type="button" value="detail"  ></a></td>
		<td><a href=mod.php?identifiant='.$ligne["id"].'><input type="button" value="modifier" background="red" ></a></td>
		<td><a href=s.php?identifiant='.$ligne["id"].'><input type="button" value="supprimer" background="red" ></a></td>
		
	</tr>';
}
echo "</table>";
?>
<br><center><a href="index.html" ><input type="button" value="CV" background-color:#0AD; font-weight:blod; ></a></center>
<br></body></html>
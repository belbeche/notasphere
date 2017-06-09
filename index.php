<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Notaire DIJON(21)</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<head>
		<h1 class="titre">Notasphere => immoCOM</h1>
	</head>
	<nav>
		<ul class="nav">
			<li class="sous_menu">L'étude</li>
				<a href="l'etude.php">Les mission du notaire</a>
				<a href="missions.php">Le Notaire</a>
			<li class="sous_menu">Les missions</li>
				<a href="missions.1.php">Le Notaire et la Famille</a>
				<a href="missions.2.php">Le Notaire et l'immobilier</a>
				<a href="missions.3.php">Le Notaire et le Patrimoine</a>
				<a href="missions.4.php">Le Notaire et les entreprises</a>
				<a href="missions.5.php">Liens utiles</a>
			<li class="sous_menu">Annonce immobilière</li>
				<a href="location.php">Location</a>
				<a href="vente.php">Vente</a>
			<li class="sous_menu">Contact</li>
				<a href="contact.php"></a>
		</ul>
	</nav>

<?php 
/*immoCOM*/
$immo = 'VENTE - APPARTEMENT - MAISON/VIAGER';
?>
<div class="annonce">
	<aside>
		<form action="" method="POST">
			<input type="text" name="vente" placeholder="vente">
			<input type="text" name="appartement" placeholder="appartement">
			<input type="text" name="maison" placeholder="maison">
		</form>
	</aside>
</div>

<div class="recherche">
	<form action="" method="POST">
		<input type="search" name="recherche">
		<input type="submit" value="Je valide mon choix">
	</form>
</div>

<?php
$choix = ['Vente','Appartement','Maison/viager'];
$choix_util = '';
echo $immo;
var_dump($choix);

if ($choix == $choix_util) {
	echo $choix_util;
}

?>

</body>
</html>
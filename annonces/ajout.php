<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ajout d'une annonce</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<script src="../js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/nav.css">
        <!--[if lt IE 9]>
	    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
	</head>
<body>

<!-- PLACEMENT MENU  -->

<div class="container-fluide">
	<div class="masthead">
		<h1 class="text-muted">Notasphère</h1>
		<div class="alert alert-alert" role="alert">
	    	<center> <strong>Annonces : IMMO </strong>. </center>
		</div>
		<div class="container-fluid">
			<head>
				<h1 class="titre">Office notarial - 21</h1>
				<h3 class="sous_titre">DUBOSSON Florian</h3>
				<hr>
			</head>
		</div>
		<nav>
		  <ul class="nav nav-justified">
		    <li class="active"><a href="../index.php">L'étude</a></li>
		    <li><a href="../mission.php">Les missions</a></li>
		    <li><a href="../annonce.php">Annonce immobilière</a></li>
		    <li><a href="../contact.php">Contact</a></li>
		  </ul>
		</nav>
	</div>
</div>

<!-- Page des annonces -->
<div class="container">
	<div class="page-header">
		<h1>Ajout d'une annonce</h1>
	</div>
	<form action="ajout_sql.php" method="post">
		<table>
			<tr>
				<td>Titre</td>
				<td><input type="text" name="titre" class="form-control"/></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><textarea type="text" name="description" class="form-control"></textarea></td>
			</tr>
			<tr>
				<td>Prix</td>
				<td><input type="text" name="prix" class="form-control"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Sauvegarder" class="btn btn-danger"/> - <a href="listes.php">Revenir sur l'annonce</a></td>
			</tr>
		</table>
	</form>
</div> <!-- Fin container -->

<!-- Ici les annonces  --> 



<!-- Fin de page --> 
<?php include ('../footer.php'); ?>

<!-- Importations des scripts  -->

<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
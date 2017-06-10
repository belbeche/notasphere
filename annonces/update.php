<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mise à jours d'une annonce</title>
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
	    	<center> <strong>Reservé à l'administrateur du Site : Que voulez vous faire ? </strong>. </center>
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

<!-- Affichages des annonces  -->
<div class="container">
	<div class="page-header">
		<h1>Mise à jour de l'annonce</h1>
	</div>

	<?php include ('update.sql.php'); ?>

</div> <!-- Fin container -->

 



<!-- Fin de page --> 
<?php include ('../footer.php'); ?>

<!-- Importations des scripts  -->

<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
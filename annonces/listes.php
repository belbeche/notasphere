<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Listes des annonces disponibles - 21 </title>
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
		<h1 class="text-muted" src="img/logo.png">Notasphère</h1>
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
		<ol class="breadcrumb">
			<li><a href="../index.php">L'étude</a></li>
			<li><a href="../mission.php">Les missions</a></li>
			<li><a href="../contact.php">Contact</a></li>
		</ol>
	</div>
</div>

<div class="container-fluide">
	<div class="jumbotron">
		<h1>Trouvez votre bien immobilier</h1>
		<p>VENTE - APPARTEMENT - MAISSON/VIAGER</p>
		<hr>
		<p class="text-muted"> ICI : Formulaire de recherche</p>
	</div>
</div>

<!--<nav>
<ul class="nav nav-justified">
<li class="active"><a href="../index.php">L'étude</a></li>
<li><a href="../mission.php">Les missions</a></li>
<li><a href="../annonce.php">Annonce immobilière</a></li>
<li><a href="../contact.php">Contact</a></li>
</ul>
</nav>-->

<!-- Affichages des annonces  -->
<div class="container">
	<div class="page-header">
		<h1>Visiter - Découvrir</h1>
	</div>
	<!-- Ici les annonces  -->

	<?php include ('listes.sql.php');?>
</div> <!-- Fin container -->

 

<!-- Debut Footer -->

<?php include ('../footer.php'); ?>

<!-- Fin de page --> 

<script type="text/javascript">

function supp_annonce(id) {
	var reponse = confirm('Êtes-vous sure de vouloir supprimer l\'annonce  ?'); 
	
	if(reponse){
		// si l'utilisateur a cliquer sur OK
		// on passe l'id au fichier sup.php pour exec la requete
		window.location = 'sup.php?id=' + id;
	}
	
}
</script>

<!-- Importations des scripts  -->

<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
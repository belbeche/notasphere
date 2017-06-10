<?php 

$id= isset($_GET['id']) ? $_GET['id'] : die('Erreur : ID annonce introuvable');

// Connexion BDD 

include ('db.php'); 

// Lecture de l'annonce en cours 

try {
	// on prepare la requete SQL

	$query = "SELECT id, titre,description,prix  FROM annonce WHERE id = ? LIMIT 0,1"; 
	$stmt = $Connexion->prepare($query); 

	// on marque notre marque 
	$stmt->bindParam(1, $id); 

	// exceution de la requete 

	$stmt->execute();

	// on stocke les informations récupére dans un tableau ASSOC

	$ligne = $stmt->fetch(PDO::FETCH_ASSOC);

	// Valeur pour la mise en forme de l'annonce 

		$titre = $ligne['titre'];
		$description = $ligne['description'];
		$prix = $ligne['prix'];
}

// On affiche une erreur 
catch (PDOException $exception) {
	die('Erreur: ' .$exception->getMessage());
}
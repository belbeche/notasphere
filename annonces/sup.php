<?php 

// Connexion BDD 

include ('db.php');

try {

	// récuperation de l'ID sinon erreur

	$id = isset($_GET['id']) ? $_GET['id'] : die('Erreur : ID Annonce introuvable');

	// Requete

	$query = "DELETE FROM annonce WHERE id = ?";
	$stmt = $connexion->prepare($query);
	$stmt->bindParam(1, $id);

	// On redirige l'agent sur les listes des annonces 

	if ($stmt->execute()) {
		header('Location: listes.php?action=supprime');
	}else {
		die('impossible de supprimer l\'annonce.');
	}
}
// Affichage des erreurs 

catch(PDOException $exception) {
	die('Erreur: ' .$exception->getMessage());
}
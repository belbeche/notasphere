<?php 

$id= isset($_GET['id']) ? $_GET['id'] : die('Erreur : ID annonce introuvable');

// Connexion BDD 

include ('db.php'); 

// Lecture de l'annonce en cours 

try {
	// on prepare la requete SQL

	$query = "SELECT id, titre,description,prix  FROM annonce WHERE id = ? LIMIT 0,1"; 
	$stmt = $connexion->prepare($query); 

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

?>

<?php

/*
* Récuperations parametre courant 
* Connexion BDD
*/

include ('db.php');

$id = isset($_GET['id']) ? $_GET['id'] : die('Erreur: ID Annonce Introuvable');

// On vérifie si le formulaire à été valider 

if($_POST){

	try{

		// On écris la il vaut mieux les étiqueter au lieu de les marquer 

		$query = "UPDATE annonce 
					SET titre=:titre, description=:description, prix=:prix
					WHERE id = :id";

		// préparation de la requete prepare 

		$stmt = $connexion->prepare($query);

		// Valeur envoyer 

		$titre = htmlspecialchars(strip_tags($_POST['titre']));
		$description = htmlspecialchars(strip_tags($_POST['description']));
		$prix = htmlspecialchars(strip_tags($_POST['prix']));


		//  Associations de parametres à un point d'interrogation  

		$stmt->bindParam(':titre', $titre);
		$stmt->bindParam(':description', $description);
		$stmt->bindParam(':prix', $prix);
		$stmt->bindParam(':id', $id);

		//Executions de la requete 

		if ($stmt->execute()){
			echo "<div class='alert alert-success'>enregistrement effectué avec succès.</div> ";
		}else{
			echo "<div class='alert alert-danger'>impossible de mettre à jour l'annonce, Veuillez réessayer.</div>";
		}
	}
	// Affichage erreurs 
	catch(PDOException $exception){
		die('Erreur:' . $exception->getMessage());
	}
}
?>
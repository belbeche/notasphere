<?php 
require ('ajout.php');
if ($_POST) {
	// On se connecte à notre BDD
	include ('db.php');
	try {
			// On insert la request 

			$query = "INSERT INTO annonce SET titre=:titre, description=:description, prix=:prix, ajoute=:ajoute";

			// Preparation de la request 

			$stmt = $connexion->prepare($query);

			// Envoi des données - supprime les octets nuls

			$titre=htmlspecialchars(strip_tags($_POST['titre']));
			$description=htmlspecialchars(strip_tags($_POST['description']));
			$prix=htmlspecialchars(strip_tags($_POST['prix']));

			// Lecture des parametre 

			$stmt->bindParam(':titre', $titre);
			$stmt->bindParam(':description', $description);
			$stmt->bindParam(':prix', $prix); 

			// On indique quand l'annonce à été ajouté 

			$ajoute=date('Y-m-d H:i:s');
			$stmt->bindParam(':ajoute', $ajoute);

			// Exécutions de la request 

			if ($stmt->execute()) {
				echo "<div class='alert alert-success'>L'annonce as bien été ajoutée.</div>";
			}else{
				echo "<div class='alert alert-danger'>Impossible d'ajouter l'annonce. </div>";
			}
		}
		// Affichage des erreurs 

		catch (PDOException $exception) {
		die('Erreur:' .$exception->getMessage());
	}
}
?>
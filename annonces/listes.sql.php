<?php 

// On se connecte à notre BDD
	include ('db.php');

// On selectionne toutes les données 

$query = "SELECT id, titre, description, prix FROM annonce ORDER BY id DESC";
$stmt = $connexion->prepare($query);
$stmt->execute();


// On récupere le nombre de ligne retourné 

$numero = $stmt->rowCount();

// On  récupere les enregistrements 

echo "<a href='ajout.php' class='btn btn-primary m-b-1em'>Ajouté une annonce</a>"; 

// Vérifications si c'est plus que 0 alors 

if ($numero>0) {
	echo "<table class='table table-hover table-responsive table-bordered'>"; // Début de la table 

	// Creations du titre de la table 

	echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>Titre</th>";
		echo "<th>Description</th>";
		echo "<th>Prix</th>";
		echo "<th>Ajoute</th>";
	echo "</tr>";

	while ($ligne = $stmt->fetch(PDO::FETCH_ASSOC)) {
		// On extrait les lignes au lieu de $ligne['']
		// on récup que les variables $annonce

		extract($ligne); 

		// Creation de la nouvelle ligne dans la table par id 

		echo "<tr>";
			echo "<td>{$id}</td>";
			echo "<td>{$titre}</td>";
			echo "<td>{$description}</td>";
			echo "<td>{$prix}</td>";
			echo "<td>";
				// Lecture d'une annonce 
                    echo "<a href='lire_une.php?id={$id}' class='btn btn-info m-r-1em'>Voir</a>";
                     
                    // Modifications d'une annonce 
                    echo "<a href='update.php?id={$id}' class='btn btn-primary m-r-1em'>Modifier</a>";
 
                    // Suppression d'une annonce
                    echo "<a href='#' onclick='delete_user({$id});'  class='btn btn-danger'>Supprime</a>";
			echo "</td>";
		echo "</tr>";
	}
	// Fin de la table 
	echo "</table>";
}
// Erreur : Pas de resultat 
else{
	echo "<div class='alert alert-danger'>Aucun résultat.</div>";
}
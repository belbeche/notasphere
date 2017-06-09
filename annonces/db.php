<?php 

// Connexion local

$host = "localhost";
$base = "annonces";
$user = 'root';
$mdp = '';

try {
	$connexion = new PDO("mysql:host={$host};dbname={$base}", $user , $mdp);
	echo 'Connexion OK';
}
// Affichage des erreurs 
catch(PDOException $exception) {
	echo "Erreurs:" .$exception->getMessage();
} 
?>



<!-- 



// Connexion serveur 

$host = "db685717598.db.1and1.com";
$base = "db685717598";
$user = 'dbo685717598';
$mdp = 'dubosson123';

try {
	$connexion = new PDO("mysql:host={$host};dbname={$base}", $user , $mdp);
}
// Affichage des erreurs 
catch(PDOException $exception) {
	echo "Erreurs:" .$exception->getMessage();
}



--> 

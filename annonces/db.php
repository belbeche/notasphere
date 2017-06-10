<?php 

// Connexion local

$host = "localhost";
$base = "annonces";
$user = 'root';
$mdp = '';

try {
	$connexion = new PDO("mysql:host={$host};dbname={$base}", $user , $mdp);
	
}
// Affichage des erreurs 
catch(PDOException $exception) {
	echo "Erreurs:" .$exception->getMessage();
} 
?>



<!-- 



// Connexion serveur 

$host = "db685731401.db.1and1.com";
$base = "db685731401";
$user = 'dbo685731401';
$mdp = 'dubosson123';

try {
	$connexion = new PDO("mysql:host={$host};dbname={$base}", $user , $mdp);
}
// Affichage des erreurs 
catch(PDOException $exception) {
	echo "Erreurs:" .$exception->getMessage();
}



--> 

<?php
// Paramètres de connexion à la base de données
$host = 'localhost'; //"localhost"; // Adresse du serveur de base de données
$port = "5432"; // Port de la base de données (par défaut : 5432)
$dbname = "photoReine"; // Nom de la base de données
$user = "admin"; // Nom d'utilisateur de la base de données
$password = "password123"; // Mot de passe de la base de données

// Connexion à la base de données
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Vérification de la connexion
if (!$conn) {
  echo "Erreur : Connexion à la base de données a échoué.\n";
  exit;
}
?>
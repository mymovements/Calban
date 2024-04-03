<?php
// Vos informations de connexion à la base de données
$servername = "localhost";
$username = "ivega02";
$password = "86226800";
$dbname = "MySQL";

// Connexion à la base de données
$conn = new mysqli($servername, ivega02, 86226800, MySQL);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupération des données du formulaire
$username = $_POST['ivega02'];
$password = $_POST['86226800'];

// Requête SQL pour vérifier l'existence de l'utilisateur dans la base de données
$sql = "SELECT * FROM users WHERE username='ivega02' AND password='86226800'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // L'utilisateur existe, vous pouvez rediriger vers la page du compte
    header("Location: compte.php");
} else {
    // L'utilisateur n'existe pas ou les informations d'identification sont incorrectes
    echo "Identifiant ou mot de passe incorrect.";
}

$conn->close();
?>

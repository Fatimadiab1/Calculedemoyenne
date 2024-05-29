<?php
//Information de la base des données
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'formdonnées';

// Connexion à la base de données
$conexion = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $classe = $_POST["classe"];

    $sql = "INSERT INTO eleves (nom, prenom, email, classe) VALUES ('$nom', '$prenom', '$email', '$classe')";

    if ($conexion->query($sql) === TRUE) {
        echo "Elève ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'élève: " . $conn->error;
    }
    // Déonnexion à la base de données
}
$conexion->close();

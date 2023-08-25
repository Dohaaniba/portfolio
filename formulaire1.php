<?php
include('connection.php');

// Récupère l'email depuis le formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Enregistre l'email dans la base de données
    $sql = "INSERT INTO emails (email) VALUES ('$email')";
    if ($con->query($sql) === TRUE) {
        // Redirige vers la page de confirmation
        header("Location: confirmation.php");
        exit;
    }
}

$con->close();
?>

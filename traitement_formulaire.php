<?php

include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $projectType = $_POST["projectType"];
    $projectDescription = $_POST["projectDescription"];
    $budget = $_POST["budget"];
    $deadline = $_POST["deadline"];
    $comments = $_POST["comments"];

   
    $sql = "INSERT INTO formulaire_data (name, email, project_type, project_description, budget, deadline, comments) VALUES ('$name', '$email', '$projectType', '$projectDescription', '$budget', '$deadline', '$comments')";

    if ($con->query($sql) === TRUE) {
        header("Location: succes.html");
        exit;
    } else {
        echo "Erreur lors de l'ajout des données : " . $con->error;
    }
}

// Fermez la connexion à la base de données
$con->close();
?>

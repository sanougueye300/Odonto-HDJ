<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dallaldiam";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Préparer et exécuter la requête de suppression
    $sql = "DELETE FROM utilisateurs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        // Redirection après la suppression
        header("Location: listecompte1.php");
        exit();
    } else {
        echo "Erreur lors de la suppression : " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

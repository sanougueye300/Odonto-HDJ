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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $id = $_POST['id'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_DEFAULT) : null;

    // Préparer la requête SQL
    $sql = "UPDATE utilisateurs SET prenom = ?, nom = ?, telephone = ?, email = ?, role = ?";
    if ($password !== null) {
        $sql .= ", password = ?";
    }
    if (!empty($_FILES['photo']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["photo"]["name"]);
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            $photo = $_FILES["photo"]["name"];
            $sql .= ", photo = ?";
        }
    }
    $sql .= " WHERE id = ?";

    // Préparer et lier les paramètres
    $stmt = $conn->prepare($sql);
    if ($password !== null && !empty($photo)) {
        $stmt->bind_param("sssssssi", $prenom, $nom, $telephone, $email, $role, $password, $photo, $id);
    } elseif ($password !== null) {
        $stmt->bind_param("ssssssi", $prenom, $nom, $telephone, $email, $role, $password, $id);
    } elseif (!empty($photo)) {
        $stmt->bind_param("ssssssi", $prenom, $nom, $telephone, $email, $role, $photo, $id);
    } else {
        $stmt->bind_param("sssssi", $prenom, $nom, $telephone, $email, $role, $id);
    }

    // Exécuter la requête
    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Erreur : " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<?php
include 'config.php'; // Assurez-vous que le chemin est correct

// Vérifiez si le champ 'service' est défini et n'est pas vide
if (isset($_POST['service']) && $_POST['service'] !== '') {
    try {
        // Préparation de la requête SQL
        $stmt = $conn->prepare("INSERT INTO patients (service, prenom, nom, sexe, age, telephone, adresse, identifiant, profession, dentiste_traitant, mode_paiement, diagnostic, plan_traitement)
                               VALUES (:service, :prenom, :nom, :sexe, :age, :telephone, :adresse, :identifiant, :profession, :dentiste_traitant, :mode_paiement, :diagnostic, :plan_traitement)");

        // Transformation des traitements en JSON
        $plan_traitement = isset($_POST['treatment']) ? $_POST['treatment'] : [];
        $plan_traitement_json = json_encode($plan_traitement);

        // Liaison des paramètres
        $stmt->bindParam(':service', $_POST['service']);
        $stmt->bindParam(':prenom', $_POST['prenom']);
        $stmt->bindParam(':nom', $_POST['nom']);
        $stmt->bindParam(':sexe', $_POST['sexe']);
        $stmt->bindParam(':age', $_POST['age']);
        $stmt->bindParam(':telephone', $_POST['telephone']);
        $stmt->bindParam(':adresse', $_POST['adresse']);
        $stmt->bindParam(':identifiant', $_POST['identifiant']);
        $stmt->bindParam(':profession', $_POST['profession']);
        $stmt->bindParam(':dentiste_traitant', $_POST['dentiste_traitant']);
        $stmt->bindParam(':mode_paiement', $_POST['mode_paiement']);
        $stmt->bindParam(':diagnostic', $_POST['diagnostic']);
        $stmt->bindParam(':plan_traitement', $plan_traitement_json);

        // Exécution de la requête
        $stmt->execute();

        echo "Enregistrement réussi.";
    } catch (PDOException $e) {
        echo "Erreur d'insertion : " . $e->getMessage();
    }
} else {
    echo "Erreur : le champ 'service' est requis.";
}
?>

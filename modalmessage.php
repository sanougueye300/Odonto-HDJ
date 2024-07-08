<?php
$servername = "localhost";
$username = "root"; // Changez ceci si votre utilisateur MySQL a un autre nom d'utilisateur
$password = ""; // Changez ceci si votre utilisateur MySQL a un mot de passe
$dbname = "dallaldiam";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fonction pour récupérer tous les utilisateurs
function getAllUsers($conn) {
    $sql = "SELECT prenom, nom, telephone, email, role, login, photo FROM utilisateurs";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}

// Récupérer tous les utilisateurs
$users = getAllUsers($conn);

// Fermer la connexion
$conn->close();
?>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" text-align: center><MARQUEE>service de Messagerie</MARQUEE></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Profil</th>
                <th scope="col">Nom</th>
                <th scope="col">Messages</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user): ?>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="uploads/<?php echo htmlspecialchars($user['photo']); ?>" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                  </div>
                </th>
                <td>
                  <a href="#">
                    <p class="mb-0 mt-4"><?php echo htmlspecialchars($user['prenom']) . ' ' . htmlspecialchars($user['nom']); ?></p>
                  </a>
                </td>
                <td>
                  <button class="btn btn-md rounded-circle bg-light border mt-4 " data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="fa-solid fa-comments text-warning"></i>
                  </button>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</div>

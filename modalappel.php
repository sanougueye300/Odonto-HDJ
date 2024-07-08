<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dallaldiam";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête pour récupérer les utilisateurs
$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);

// Vérifier si des résultats ont été retournés
$utilisateurs = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $utilisateurs[] = $row;
    }
}

$conn->close();
?>

<!<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" text-align: center><MARQUEE>service d'Appel</MARQUEE></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Profil</th>
                <th scope="col">Nom</th>
                <th scope="col">Appel</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($utilisateurs as $utilisateur): ?>
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="uploads/<?php echo $utilisateur['photo']; ?>" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                  </div>
                </th>
                <td>
                  <a href="#"> <p class="mb-0 mt-4"><?php echo $utilisateur['prenom'] . ' ' . $utilisateur['nom']; ?></p></a>
                </td>
                <td>
                  <button class="btn btn-md rounded-circle bg-light border mt-4">
                    <i class="fa-solid fa-phone text-warning"></i>
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

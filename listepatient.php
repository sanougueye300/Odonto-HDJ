<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Admin Systeme</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
        .table-custom th,
        .table-custom td {
            color: #000; /* Couleur noire pour le texte */
        }
    </style>
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Liberte 5, Dakar, Senegal</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">djibrilsanougueye@esp.sn</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Politique de confidentialité</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Conditions d’utilisation</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2"></small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.php" class="navbar-brand"><h1 class="text-primary display-6"><i class="fa-solid fa-tooth"></i>AdminSystem</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="index.php" class="nav-item nav-link active"><i class="fa-solid fa-house-chimney-medical"></i> Acceuil</a>
                            <a href="shop.php" class="nav-item nav-link"> <i class="fa-solid fa-hand-holding-medical"></i> Nos Services</a>
                            <a href="shop-detail.php" class="nav-item nav-link"> <i class="fa-solid fa-hand-holding-heart"></i> Nos Prduits</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-md" aria-hidden="true"></i> Mon Profil</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="cart.php" class="dropdown-item active">Patients</a>
                                    <a href="chackout.php" class="dropdown-item"><i class="fa-solid fa-gears"></i> Parametre</a>
                                    <a href="testimonial.php" class="dropdown-item"><i class="fa-solid fa-envelope-open-text"></i> Messages</a>
                                    <a href="404.php" class="dropdown-item"><i class="fa-solid fa-power-off"></i> Deconnection</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            <a href="#" class="position-relative me-4 my-auto">
                             <i class="fa fa-bell fa-2x" data-bs-toggle="modal" data-bs-target="#exampleModal6"></i>
                                <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                            </a>
                            <a href="#" class="my-auto me-4">
                                <i class="fa-solid fa-comments fa-2x " data-bs-toggle="modal" data-bs-target="#exampleModal"></i>

                            </a>

                                <a href="#" class="my-auto">
                                <i class="fa fa-phone fa-2x " data-bs-toggle="modal" data-bs-target="#exampleModal5"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->



        <!-- Modal message -->


        <?php
        include_once "modalmessage.php";
        ?>


        <?php
        include_once "modalappel.php";
        ?>




        <?php
        include_once "modalnotification.php";
        ?>

        <!-- Modal Search Start -->
        <div class="modal fade" id#="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->


        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6"><MARQUEE>Liste des Patients</MARQUEE></h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="secretariat.php">Secretariat</a></li>
                <li class="breadcrumb-item active text-white">Patients</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Cart Page Start -->
       <!-- Cart Page Start -->
<!-- Cart Page Start -->
<!-- Cart Page Start -->
<!-- Cart Page Start -->
<?php
// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Connexion à la base de données
$db = new mysqli("localhost", "root", "", "dallaldiam");

// Vérifier la connexion
if ($db->connect_error) {
    die("Erreur de connexion à la base de données: " . $db->connect_error);
}

// Fonction pour vérifier si un identifiant existe déjà dans la base de données
function identifiantExists($identifiant) {
    global $db;
    $stmt = $db->prepare("SELECT COUNT(*) FROM patients WHERE identifiant = ?");
    $stmt->bind_param("s", $identifiant);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    return $count > 0;
}

// Fonction pour ajouter un patient à la base de données
function addPatient($service, $prenom, $nom, $sexe, $age, $telephone, $adresse, $identifiant, $profession, $dentiste_traitant, $mode_paiement, $diagnostic, $plan_traitement) {
    global $db;

    if (identifiantExists($identifiant)) {
        echo "Erreur: Un patient avec cet identifiant existe déjà.";
        return;
    }

    // Préparer la requête SQL
    $stmt = $db->prepare("INSERT INTO patients (service, prenom, nom, sexe, age, telephone, adresse, identifiant, profession, dentiste_traitant, mode_paiement, diagnostic, plan_traitement)
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Vérifier la préparation de la requête
    if ($stmt === false) {
        die("Erreur lors de la préparation de la requête: " . $db->error);
    }

    // Lier les paramètres
    $stmt->bind_param("ssssissssssss", $service, $prenom, $nom, $sexe, $age, $telephone, $adresse, $identifiant, $profession, $dentiste_traitant, $mode_paiement, $diagnostic, $plan_traitement);

    // Exécuter la requête et vérifier les erreurs
    if ($stmt->execute()) {
        echo "Patient ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout du patient: " . $stmt->error;
    }

    // Fermer la requête
    $stmt->close();
}

// Fonction pour récupérer tous les patients
function getAllPatients() {
    global $db;
    $result = $db->query("SELECT * FROM patients");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Récupération des données du formulaire (Assurez-vous que ces variables sont définies)
$service = isset($_POST['service']) ? $_POST['service'] : '';
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$sexe = isset($_POST['sexe']) ? $_POST['sexe'] : '';
$age = isset($_POST['age']) ? intval($_POST['age']) : 0; // Assurez-vous que l'âge est un entier
$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
$adresse = isset($_POST['adresse']) ? $_POST['adresse'] : '';
$identifiant = isset($_POST['identifiant']) ? $_POST['identifiant'] : '';
$profession = isset($_POST['profession']) ? $_POST['profession'] : '';
$dentiste_traitant = isset($_POST['dentiste_traitant']) ? $_POST['dentiste_traitant'] : '';
$mode_paiement = isset($_POST['mode_paiement']) ? $_POST['mode_paiement'] : '';
$diagnostic = isset($_POST['diagnostic']) ? $_POST['diagnostic'] : '';

// Récupération du tableau dynamique et conversion en JSON
$plan_traitement_array = isset($_POST['plan_traitement']) ? $_POST['plan_traitement'] : []; // Assurez-vous que cette variable contient un tableau
$plan_traitement_json = json_encode($plan_traitement_array);

// Ajouter le patient à la base de données
addPatient($service, $prenom, $nom, $sexe, $age, $telephone, $adresse, $identifiant, $profession, $dentiste_traitant, $mode_paiement, $diagnostic, $plan_traitement_json);

// Récupérer tous les patients
$patients = getAllPatients();
?>

<!-- Afficher les patients dans le tableau -->
<div class="container-fluid py-5">
    <div class="row justify-content-center mb-3">
        <div class="col-auto">
            <span class="badge bg-secondary">Nombre total de patients</span>
            <span class="badge bg-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Total: <?php echo count($patients); ?>"><?php echo count($patients); ?></span>
        </div>
    </div>
    
    <div class="text-center"> <!-- Ajout de la classe text-center -->
        <table class="table table-custom">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach ($patients as $patient): ?>
                <tr>
                    <th scope="row"><?php echo $patient['identifiant']; ?></th>
                    <td><?php echo $patient['nom']; ?></td>
                    <td><?php echo $patient['prenom']; ?></td>
                    <td><?php echo $patient['telephone']; ?></td>
                    <td>
                        <a href="modifier_patient.php?id=<?php echo $patient['identifiant']; ?>" class='btn btn-sm rounded-lg bg-primary border mt-1'>
                            <i class="fa-solid fa-pen-to-square text-white"></i>  
                        </a>
                        <button class='btn btn-sm rounded-lg bg-warning border mt-1'>
                            <i class="fa-regular fa-folder-open fa-spin text-white"></i>
                        </button>
                        <button class='btn btn-sm rounded-lg bg-danger border mt-1' data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $patient['identifiant']; ?>">
                            <i class="fa-solid fa-trash text-white"></i>
                        </button>
                    </td>
                </tr>

                <!-- Modal for delete confirmation -->
                <div class="modal fade" id="deleteModal<?php echo $patient['identifiant']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $patient['identifiant']; ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel<?php echo $patient['identifiant']; ?>">Confirmer la suppression</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Êtes-vous sûr de vouloir supprimer le dossier de cet patient ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <form method="POST" action="supprimer_patient.php">
                                    <input type="hidden" name="identifiant" value="<?php echo $patient['identifiant']; ?>">
                                    <button type="submit" class="btn btn-danger">Confirmer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


        <!-- Pagination -->
        <div class="col-12">
            <div class="pagination d-flex justify-content-center mt-5">
                <a href="#" class="rounded">&laquo;</a>
                <a href="#" class="active rounded">1</a>
                <a href="#" class="rounded">2</a>
                <a href="#" class="rounded">3</a>
                <a href="#" class="rounded">&raquo;</a>
            </div>
        </div>
    </div>
</div>
<!-- Cart Page End -->
<style>
        /* Styles généraux pour le tableau */
        .table-custom th, .table-custom td {
            vertical-align: middle;
        }

        /* Styles responsive */
        @media (max-width: 768px) {
            .table-custom th, .table-custom td {
                font-size: 12px;
            }
            .table-custom .btn {
                font-size: 10px;
                padding: 2px 5px;
            }
            .badge {
                font-size: 12px;
            }
        }

        @media (max-width: 576px) {
            .table-custom th, .table-custom td {
                font-size: 10px;
            }
            .table-custom .btn {
                font-size: 8px;
                padding: 1px 3px;
            }
            .badge {
                font-size: 10px;
            }
        }
    </style>
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0"> <strong>AdminOdonto</strong></h1>
                                <p class="text-secondary mb-0"><i class="fa-solid fa-tooth"></i></p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    


                     <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">pourquoi on n'est aimé!</h4>
                            <a class="btn-link" href="#">Dynamisme </a>
                            <a class="btn-link" href="#">Compation</a>
                            <a class="btn-link" href="#">soutient</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Le Service</h4>
                            <a class="btn-link" href="#">Apropos de nous </a>
                            <a class="btn-link" href="##">Contactez nous</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Compte</h4>
                            <a class="btn-link" href="#">Mon Compte</a>
                            <a class="btn-link" href="#">Liste Souhait</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: Guediaway</p>
                            <p>Email: ServiceOdonto@dallaldiam.sn</p>
                            <p>Phone: +33 834 88 88</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>AdminOdonto</a>, Tous droits réservés.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                       Conçu par <a class="border-bottom" href="#">Djibril Sanou Gueye</a> Distribué par <a class="border-bottom" href="#">Issa Kane</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>
</html>

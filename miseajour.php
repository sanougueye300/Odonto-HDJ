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
        include_once "modalnotification.php";
        ?>



        <?php
        include_once "modalappel.php";
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
            <h1 class="text-center text-white display-6">Ajouter un Patient</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="secretariat.php">Secretariat</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Patient</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Cart Page Start -->
             <!-- Single Page Header start -->


















 <div class="container-fluid py-5">
    <div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-12 col-lg-8">
            <div class="card card-custom">
                
                <!-- Hospital Logo and Information with Dashed Border -->
           <div class="container py-4">
    <div class="card shadow">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-md-2 text-center">
                    <img src="img/arriereplan.png" alt="Logo de l'hôpital" class="hospital-logo img-fluid">
                </div>
                <div class="col-md-10 text-center">
                    <h4 class="text-darkblue mb-3"><strong>CENTRE HOSPITALIER NATIONAL</strong></h4>
                    <h4 class="text-warning mb-0"><strong>DALAL JAM</strong></h4>
                    <p class="text-dark mb-1">Ancien Parcours de golf Guediawaye</p>
                    <p class="text-dark mb-1">golf-sud - BP :19001 Guediawaye - Dakar</p>
                    <p class="text-dark mb-1">Tél : +221 33 837 56 57 - Fax : 33 837 56 58</p>
                    <p class="text-dark mb-0">Division de la Santé Bucco Dentaire</p>
                </div>
            </div>
        </div>
    </div>
</div>




                <div class="card-header-custom">
                    <h1><i class="fas fa-user-plus header-icon"></i> DOSSIER DU PATIENT</h1>
                </div>

                <form action="#">
                    <div class="row g-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Service<sup class="required">*</sup></strong></label>
                                <select class="form-control form-control-custom" name="service">
                                    <option value="Orthodontie">Orthodontie</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Prénom<sup class="required">*</sup></strong></label>
                                <input type="text" class="form-control form-control-custom" placeholder="Entrez le prénom">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Nom<sup class="required">*</sup></strong></label>
                                <input type="text" class="form-control form-control-custom" placeholder="Entrez le nom">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Sexe<sup class="required">*</sup></strong></label>
                                <div class="d-flex align-items-center">
                                    <div class="form-check me-5">
                                        <input class="form-check-input" type="radio" id="homme" name="sexe" value="homme">
                                        <label class="form-check-label" for="homme">Homme</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" id="femme" name="sexe" value="femme">
                                        <label class="form-check-label" for="femme">Femme</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Âge<sup class="required">*</sup></strong></label>
                                <input type="number" class="form-control form-control-custom" placeholder="Entrez l'âge">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Téléphone<sup class="required">*</sup></strong></label>
                                <input type="tel" class="form-control form-control-custom" placeholder="Numéro de téléphone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Adresse<sup class="required">*</sup></strong></label>
                                <input type="text" class="form-control form-control-custom" placeholder="Entrez l'adresse">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Identifiant<sup class="required">*</sup></strong></label>
                                <input type="text" class="form-control form-control-custom" placeholder="Entrez l'identifiant">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Profession<sup class="required">*</sup></strong></label>
                                <input type="text" class="form-control form-control-custom" placeholder="Entrez la profession">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Dentiste traitant<sup class="required">*</sup></strong></label>
                                <select class="form-control form-control-custom">
                                    <option selected disabled>Choisissez un dentiste</option>
                                    <option value="Dr. John Doe">Dr. John Doe</option>
                                    <option value="Dr. Jane Smith">Dr. Jane Smith</option>
                                    <option value="Dr. Albert Brown">Dr. Albert Brown</option>
                                    <option value="Dr. Emily White">Dr. Emily White</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Mode De Paiement<sup class="required">*</sup></strong></label>
                                <select class="form-control form-control-custom" name="mode_paiement">
                                    <option selected disabled>Choisissez un mode de paiement</option>
                                    <option value="Carte de crédit">Carte de crédit</option>
                                    <option value="Espèces">Espèces</option>
                                    <option value="Chèque">Chèque</option>
                                    <option value="Virement bancaire">Virement bancaire</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label form-label-custom"><strong>Diagnostic<sup class="required">*</sup></strong></label>
                                <input type="text" class="form-control form-control-custom" placeholder="Entrez le diagnostic">
                            </div>
                        </div>



                            <div class="col-md-12">








    <div class="container">
    <div class="form-group my-3">
        <label class="form-label form-label-custom"><strong>Plan de Traitement<sup class="required">*</sup></strong></label>
    </div>
    <div class="row">
        <div class="col-md-5 offset-md-1">
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment1" name="treatment" value="CONSULTATION">
                    <label class="form-check-label" for="treatment1">CONSULTATION</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment2" name="treatment" value="CONSULTATION URGENTE">
                    <label class="form-check-label" for="treatment2">CONSULTATION URGENTE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment3" name="treatment" value="OBSTURATION AU COMPOSITE">
                    <label class="form-check-label" for="treatment3">OBSTURATION AU COMPOSITE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment4" name="treatment" value="OBSCURATION AU VERRE IONOMERE">
                    <label class="form-check-label" for="treatment4">OBSCURATION AU VERRE IONOMERE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment5" name="treatment" value="EXTRACTION SIMPLE">
                    <label class="form-check-label" for="treatment5">EXTRACTION SIMPLE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment6" name="treatment" value="EXTRACTION DENT DE SAGESSE">
                    <label class="form-check-label" for="treatment6">EXTRACTION DENT DE SAGESSE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment7" name="treatment" value="CURETAGE">
                    <label class="form-check-label" for="treatment7">CURETAGE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment8" name="treatment" value="FREINECTOMIE">
                    <label class="form-check-label" for="treatment8">FREINECTOMIE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment9" name="treatment" value="PULPECTOMIE">
                    <label class="form-check-label" for="treatment9">PULPECTOMIE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment10" name="treatment" value="FREINECTOMIE-RESECTION CAPUCHON MUQUEUX">
                    <label class="form-check-label" for="treatment10">FREINECTOMIE-RESECTION CAPUCHON MUQUEUX</label>
                </div>
            </div>
        </div>
        <div class="col-md-5 offset-md-1">
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment11" name="treatment" value="RADIOGRAPHIE PANORAMIQUE">
                    <label class="form-check-label" for="treatment11">RADIOGRAPHIE PANORAMIQUE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment12" name="treatment" value="APPLICATION DE FLUOR EN SESAME">
                    <label class="form-check-label" for="treatment12">APPLICATION DE FLUOR EN SESAME</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment13" name="treatment" value="SURFACAGE RADICULAIRE">
                    <label class="form-check-label" for="treatment13">SURFACAGE RADICULAIRE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment14" name="treatment" value="LAMBEAU D'ASSAINISSEMENT">
                    <label class="form-check-label" for="treatment14">LAMBEAU D'ASSAINISSEMENT</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment15" name="treatment" value="BIOPSIE GINGIVALE">
                    <label class="form-check-label" for="treatment15">BIOPSIE GINGIVALE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment16" name="treatment" value="RADIO RETROALVEOLAIRE">
                    <label class="form-check-label" for="treatment16">RADIO RETROALVEOLAIRE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment17" name="treatment" value="RADIO OCCLUSALE">
                    <label class="form-check-label" for="treatment17">RADIO OCCLUSALE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment18" name="treatment" value="EXTRACTION SIMPLE">
                    <label class="form-check-label" for="treatment18">EXTRACTION SIMPLE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment19" name="treatment" value="EXTRACTION DENT ENCLAVEE OU INCLUSE">
                    <label class="form-check-label" for="treatment19">EXTRACTION DENT ENCLAVEE OU INCLUSE</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="treatment20" name="treatment" value="CELLULITE (TOUTE LES LOCALISATIONS)">
                    <label class="form-check-label" for="treatment20">CELLULITE (TOUTE LES LOCALISATIONS)</label>
                </div>
            </div>
        </div>
    </div>
   <div class="table-container table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Nom Dentiste</th>
                <th>Traitement</th>
                <th>Clôture</th>
            </tr>
        </thead>
        <tbody id="treatment-table-body">
            <!-- Rows will be added here dynamically -->
        </tbody>
    </table>
</div>

<style >.table-container {
    margin-top: 20px;
    overflow-x: auto;
}

.table-bordered {
    width: 100%;
    border-collapse: collapse;
}

.table thead th {
    background-color: #ffc107;
    color: white;
    text-align: center;
}

.table tbody td {
    text-align: center;
    vertical-align: middle;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.form-control {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
}

@media (max-width: 768px) {
    .table thead {
        display: none;
    }

    .table tbody tr {
        display: block;
        margin-bottom: 15px;
    }

    .table tbody td {
        display: block;
        text-align: right;
        font-size: 13px;
        border-top: 1px solid #dee2e6;
        position: relative;
        padding-left: 50%;
    }

    .table tbody td::before {
        content: attr(data-label);
        position: absolute;
        left: 10px;
        width: calc(50% - 20px);
        text-align: left;
        font-weight: bold;
        white-space: nowrap;
    }
}
</style>
</div>

<script>
 document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('input[name="treatment"]');
    const tableBody = document.getElementById('treatment-table-body');
    const dentistOptions = ['Dr. Smith', 'Dr. Johnson', 'Dr. Williams', 'Dr. Brown', 'Dr. Jones']; // Add your dentist names here

    // Load saved data from Local Storage
    loadTableData();
    loadCheckboxState();

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                addTableRow(this.id, this.value);
                saveCheckboxState();
                saveTableData();
            } else {
                removeTableRow(this.id);
                saveCheckboxState();
                saveTableData();
            }
        });
    });

    function addTableRow(id, value) {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td data-label="Date"><input type="date" class="form-control" /></td>
            <td data-label="Nom Dentiste">
                <select class="form-control">
                    ${dentistOptions.map(option => `<option value="${option}">${option}</option>`).join('')}
                </select>
            </td>
            <td data-label="Traitement">${value}</td>
            <td data-label="Clôture"><input type="text" class="form-control" /></td>
        `;
        row.setAttribute('data-treatment', id);
        tableBody.appendChild(row);
    }

    function removeTableRow(id) {
        const row = tableBody.querySelector(`tr[data-treatment="${id}"]`);
        if (row) {
            tableBody.removeChild(row);
        }
    }

    function saveCheckboxState() {
        const checkboxState = Array.from(checkboxes).map(checkbox => ({
            id: checkbox.id,
            checked: checkbox.checked
        }));
        localStorage.setItem('checkboxState', JSON.stringify(checkboxState));
    }

    function loadCheckboxState() {
        const checkboxState = JSON.parse(localStorage.getItem('checkboxState'));
        if (checkboxState) {
            checkboxState.forEach(state => {
                const checkbox = document.getElementById(state.id);
                if (checkbox) {
                    checkbox.checked = state.checked;
                }
            });
        }
    }

    function saveTableData() {
        const tableData = Array.from(tableBody.rows).map(row => ({
            id: row.getAttribute('data-treatment'),
            date: row.cells[0].querySelector('input').value,
            dentist: row.cells[1].querySelector('select').value,
            treatment: row.cells[2].textContent,
            closure: row.cells[3].querySelector('input').value
        }));
        localStorage.setItem('tableData', JSON.stringify(tableData));
    }

    function loadTableData() {
        const tableData = JSON.parse(localStorage.getItem('tableData'));
        if (tableData) {
            tableData.forEach(data => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td data-label="Date"><input type="date" class="form-control" value="${data.date}" /></td>
                    <td data-label="Nom Dentiste">
                        <select class="form-control">
                            ${dentistOptions.map(option => `<option value="${option}" ${option === data.dentist ? 'selected' : ''}>${option}</option>`).join('')}
                        </select>
                    </td>
                    <td data-label="Traitement">${data.treatment}</td>
                    <td data-label="Clôture"><input type="text" class="form-control" value="${data.closure}" /></td>
                `;
                row.setAttribute('data-treatment', data.id);
                tableBody.appendChild(row);
            });
        }
    }
});

</script>





</div>

                    </div>
                    <div class="text-center pt-4">
                        <button type="button" class="btn btn-custom">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Checkout Page End -->
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .card-custom {
        border: none;
        border-radius: 15px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        padding: 40px;
        background-color: white;
    }

    .form-label-custom {
        font-weight: 700;
        color: #495057;
        margin-bottom: 8px;
    }

    .form-control-custom {
        border-radius: 10px;
        border: 1px solid #ced4da;
        padding: 15px;
        font-size: 16px;
        background-color: #f8f9fa;
    }

    .form-control-custom:focus {
        border-color: #ffc107;
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
    }

    .btn-custom {
        background-color: #ffc107;
        color: #fff;
        border: none;
        border-radius: 10px;
        padding: 15px 25px;
        font-size: 18px;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    .btn-custom:hover {
        background-color: #e0a800;
    }

    .header-icon {
        font-size: 3rem;
        color: #ffc107;
    }

    .card-header-custom {
        border-bottom: none;
        text-align: center;
        margin-bottom: 20px;
    }

    .card-header-custom h1 {
        font-size: 1.5rem;
        color: #343a40;
        font-weight: 700;
        color: black;
    }

    .required {
        color: red;
    }

    .form-check-input:checked {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .form-check-input:focus {
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
    }

    .form-check-label {
        margin-bottom: 0;
    }

    .form-check {
        padding-left: 0;
    }

    .hospital-logo {
        max-width: 100px;
        max-height: 100px;
    }

    .hospital-info {
        text-align: right;
        color: #343a40;
    }

    .hospital-info h2 {
        font-size: 1.75rem;
        margin: 0;
        color: black;
    }

    .hospital-info p {
        margin: 0;
        color: black;
    }

    .hospital-info-container {
        border: 2px dashed #343a40;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }



    
        .table-container {
            margin-top: 20px;
        }
    

</style>

















        <!-- Cart Page End -->


       

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

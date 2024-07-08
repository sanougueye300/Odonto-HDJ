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
                                    <a href="cart.php" class="dropdown-item active">Reunion</a>
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
            <h1 class="text-center text-white display-6">Reunion</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="index.php">Acceuil</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Reunion</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Cart Page Start -->
        <div class="container-fluid py-5">
            











<style>
        .features {
            background: #f8f9fa;
            padding: 5rem 0;
        }
        .features-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .features-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        .features-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            margin-bottom: 1.5rem;
        }
        .features-icon.bg-primary {
            background-color: #007bff !important;
        }
        .features-icon.bg-success {
            background-color: #28a745 !important;
        }
        .features-icon.bg-warning {
            background-color: #ffc107 !important;
        }
        .features-icon.bg-danger {
            background-color: #dc3545 !important;
        }
        .features-content h5 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 1rem;
        }
        .features-content p {
            font-size: 1rem;
            color: #6c757d;
            margin: 0;
        }





        #videos {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        video {
            width: 300px;
            height: auto;
            margin: 0 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .buttons {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .fa {
            margin-right: 5px;
        }

        .option {
            margin-bottom: 20px;
        }

        .option label {
            display: block;
            margin-bottom: 5px;
        }

        .option input[type="checkbox"] {
            margin-right: 5px;
        }
    </style>
    <!-- Features Section Start -->








<div class="container">
        <h1>Online Meeting</h1>
        <div class="option">
            <label for="audio">Audio</label>
            <input type="checkbox" id="audio" checked>
            <label for="video">Video</label>
            <input type="checkbox" id="video" checked>
        </div>
        <div id="videos"></div>
        <div class="buttons">
            <button id="startButton"><i class="fas fa-video"></i> Start Meeting</button>
            <button id="stopButton"><i class="fas fa-stop"></i> Quitter la reuinion</button>
        </div>
        
    </div>








   <div class="container-fluid features py-5">
    <div class="container py-5">
        <div class="row g-4">
            
            <div class="col-md-6 col-lg-3">
                <div class="features-item text-center rounded bg-light shadow-sm p-4">
                    <div class="features-icon btn-square rounded-circle bg-success mb-4 mx-auto">
                        <i class="fa-solid fa-video fa-3x text-white"></i>
                    </div>
                    <div class="features-content">
                        <h5 class="mb-3">Nouvelle Reunion</h5>
                        <p class="mb-0">Toujours prêts à vous assister en toutes circonstances.</p>
                        <a href="#" class="btn btn-success mt-3">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="features-item text-center rounded bg-light shadow-sm p-4">
                    <div class="features-icon btn-square rounded-circle bg-warning mb-4 mx-auto">
                        <i class="fa-solid fa-calendar-days fa-3x text-white"></i>
                    </div>
                    <div class="features-content">
                        <h5 class="mb-3">Planification</h5>
                        <p class="mb-0">Travail en équipe pour des soins optimaux.</p>
                        <a href="#" class="btn btn-warning mt-3">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="features-item text-center rounded bg-light shadow-sm p-4">
                    <div class="features-icon btn-square rounded-circle bg-primary mb-4 mx-auto">
                        <i class="fa-solid fa-users fa-3x text-white"></i>
                    </div>
                    <div class="features-content">
                        <h5 class="mb-3">Creation ID</h5>
                        <p class="mb-0">Un amour sincère et inconditionnel pour nos patients.</p>
                        <a href="#" class="btn btn-primary mt-3">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="features-item text-center rounded bg-light shadow-sm p-4">
                    <div class="features-icon btn-square rounded-circle bg-danger mb-4 mx-auto">
                        <i class="fa-solid fa-user-shield fa-3x text-white"></i>
                    </div>
                    <div class="features-content">
                        <h5 class="mb-3">Saisir un ID</h5>
                        <p class="mb-0">Protection de la confidentialité des données.</p>
                        <a href="#" class="btn btn-danger mt-3">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>















            
        </div>
        <!-- Cart Page End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Admin Systeme</h1>
                                <p class="text-secondary mb-0">products</p>
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
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Why People Like us!</h4>
                            <p class="mb-4">typesetting, remaining essentially unchanged. It was 
                                popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                            <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Shop Info</h4>
                            <a class="btn-link" href="">About Us</a>
                            <a class="btn-link" href="">Contact Us</a>
                            <a class="btn-link" href="">Privacy Policy</a>
                        
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Compte</h4>
                            <a class="btn-link" href="">Mon Compte</a>
                            <a class="btn-link" href="">Shop details</a>
                            <a class="btn-link" href="">Shopping Cart</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: djibrilsanougueye@esp.sn</p>
                            <p>Phone: +221 77 599 49 42</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
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
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Admin Systeme</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.2.0/socket.io.js"></script>
    <script>
        const startButton = document.getElementById('startButton');
        const stopButton = document.getElementById('stopButton');
        const videosContainer = document.getElementById('videos');
        const audioCheckbox = document.getElementById('audio');
        const videoCheckbox = document.getElementById('video');
        const withIdButton = document.getElementById('withIdButton');
        const instantButton = document.getElementById('instantButton');
        const newButton = document.getElementById('newButton');
        let localStream;
        let socket;

        startButton.addEventListener('click', startMeeting);
        stopButton.addEventListener('click', stopMeeting);
        withIdButton.addEventListener('click', joinWithId);
        instantButton.addEventListener('click', instantMeeting);
        newButton.addEventListener('click', newMeeting);

        function startMeeting() {
            const constraints = {
                video: videoCheckbox.checked,
                audio: audioCheckbox.checked
            };
            navigator.mediaDevices.getUserMedia(constraints)
                .then(stream => {
                    localStream = stream;
                    const video = document.createElement('video');
                    video.srcObject = stream;
                    video.autoplay = true;
                    videosContainer.appendChild(video);
                    socket = io();
                    socket.emit('join', { room: 'meeting' });
                    socket.on('offer', handleOffer);
                    socket.on('answer', handleAnswer);
                })
                .catch(error => {
                    console.error('Error accessing media devices:', error);
                });
        }

        function stopMeeting() {
            localStream.getTracks().forEach(track => track.stop());
            videosContainer.innerHTML = '';
            if (socket) {
                socket.disconnect();
            }
        }

        function handleOffer(offer) {
            // Handle offer from another participant
        }

        function handleAnswer(answer) {
            // Handle answer from another participant
        }

        function joinWithId() {
            // Logic for joining with ID
        }

        function instantMeeting() {
            // Logic for instant meeting
        }

        function newMeeting() {
            // Logic for creating a new meeting
        }
    </script>


    </body>


</html>

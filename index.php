<!DOCTYPE html>
<?php


session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_COOKIE['Cookiefaitmaison'])) {
      $Cookiefaitmaison = intval($_COOKIE['Cookiefaitmaison']);
    }
  }
if (isset($_SESSION['role'])):
  $_SESSION['role'];
  
endif;




?>
<html lang="fr">

<head>
    <!-- Adaptation aux différents écrans-->
    <meta charset="UTF-8">
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Les différents CDN du framework Bootstrap -->

    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CDN JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <style>
    .body {
        font-family: "Gill Sans", sans-serif;
        color: white;
        background-color: #092945;


    }

    .footer {
        font-family: "Gill Sans", sans-serif;


    }

    .cookie-bar {

        z-index: 100;
    }

    .topofpage {}

    .footer-container {
        color: white;
        background-color: #092945;
    }

    .btn:active {
        background-color: #4285F4;
    }

    .modal {
        max-height: 70vh;
    }

    .modal-backdrop {
        visibility: hidden;
    }

    .btn:hover {
        background-color: #4285F4;
    }

    .btn:focus {
        background-color: #4285F4;

    }

    .labels {

        color: white;

    }

    .form-control-plaintext {
        text-align: center;
        color: white;

    }

    .logo {
        margin-right: 1vw;
        margin-left: 1vw;
    }

    .nav-item {

        margin-left: 1vh;
    }

    .navbar {

        background-color: #092945;
    }


    .dropstart {

        display: none;

    }

    .container {

        background-color: #092945;
        opacity: 95%;
        min-height: 100vh;


    }

    .container-fluid {

        padding: 0;
    }

    .form-container {
        margin-left: 3vw;
        margin-right: 3vw;
        width: auto;
        background-color: white;
        padding: 1vw;

    }

    .indicateur {
        display: flex;
        justify-content: center;

    }

    .range {
        display: flex;
        justify-content: center;
        width: 100%;

    }

    .flex-container {
        flex: 1;
        display: flex;
        flex-wrap: wrap;


    }

    .tab-pane {

        background-image: url('/garagevparrot.png');


        min-height: 100vh;


        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .flex-item {
        padding: 1vh;
        margin-top: 1vh;
        width: 33vh;
        position: relative;
    }

    .card {
        height: 100%;
    }

    .card-img-top {
        height: 20vh;
        object-fit: cover
    }

    .carousel {
        height: 70vh;
    }

    .carousel-item {
        object-fit: fill;
        height: 70vh;
    }

    .voiture {
        height: 100%;

    }

    .modal {
        top: 20vh;
        position: center;
        max-height: 70vh;

    }

    .sidebar {
        display: none;



    }

    .dropdown-menu {
        display: none;


    }


    @media screen and (max-width: 480px) {

      .desktop {
            display: none;

        }


        .sidebar {
            display: flex;
            margin-left: 20vw;


        }

    

        #myTab {
            flex-wrap: nowrap;
        }

        .dropstart {
            display: block;
            transform: translateX(50%);
            margin-right: 1vw;
        }

        .dropdown-menu {
            display: block;
            position: relative;
            background-color: #092945;


        }

        .mobile {
            text-justify: center;
            justify-content: center;

        }

        .dropdown-toggle {

            margin-left: 5vw;
            margin-right: 5vw;
        }

        .carousel {
            height: 100%;

        }

        .carousel-item {
            object-fit: fill;
            height: 100%;
        }

        .flex-item {
            padding: 1vh;
            width: 90vw;
            position: relative;
        }
    }

    #cookieConsent {
        display: block;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        padding: 10px;
        background-color: #092945;
        color: white;
        z-index: 100;
    }

    #cookieConsent button {
        background-color: #0d6efd;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
    }

    body.accept-cookies #cookieConsent {
        display: none;
    }

    @media screen and (max-width: 320px) {
        .dropstart {
            display: block;
            transform: translateX(10%);
            margin-right: 1vw;
        }

        .dropdown-menu {
            display: block;
            position: relative;
            background-color: #092945;



        }
    }

    .offcanvas-body {
        background-color: #092945;
        width: auto;
    }

    .offcanvas {
        background-color: #092945;
        width: auto;
    }
    </style>
</head>

<body>




    <div class="container-fluid">

        <div id="cookieConsent">
            Ce site web utilise les cookies pour ameliorer votre experience utilisateur.
            <button onclick="hideCookieConsent()">J'ai compris!</button>
        </div>


        <!--<div class="navbar sticky-bottom justify-content-center cookie-bar">
    <div class="alert alert-dismissible text-center cookiealert show" role="alert">
    
    <div class="cookiealert-container ">
        <b>Do you like cookies?</b> 🍪 We use cookies to ensure you get the best experience on our website. <a href="" target="_blank">Learn more</a>

        <button type="button" class="btn btn-primary btn-sm acceptcookies" aria-label="Close">
            I agree
        </button>
    </div>
</div>
</div> -->

        <!-- Navbar et navigation -->
        <div class="navbar sticky-top justify-content-center align-content-sm-end">
            <ul class="nav nav-pills " id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <img class="logo" width="140" height="60" src="Icon1.png">
                </li>
                <li class="nav-item" role="presentation">



                    <button class="btn btn-primary nav-pills sidebar" role="tablist" type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                        aria-controls="offcanvasScrolling">Menu</button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">

                        <div class="offcanvas-body">




                            <!--
                    <div class="btn-group dropstart">
                        <button class="btn btn-primary dropdown-toggle nav-item" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Menu
                        </button>
-->
                            <ul class="nav nav-pills dropdown-menu" role="tablist">







                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active btn btn-secondary text-light mobile " href="#top"
                                        id="home-tab" data-bs-toggle="pill" data-bs-target="#home" type="button"
                                        role="tab" aria-selected="true">Accueil</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link btn btn-secondary text-light mobile " href="#top"
                                        id="menu2-tab" data-bs-toggle="pill" data-bs-target="#menu2" type="button"
                                        role="tab" aria-selected="false">Nos voitures</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link btn btn-secondary text-light mobile " href="#top"
                                        id="menu3-tab" data-bs-toggle="pill" data-bs-target="#menu3" type="button"
                                        role="tab" aria-selected="false">Services</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link btn btn-secondary text-light mobile  " href="#top"
                                        id="menu6-tab" data-bs-toggle="pill" data-bs-target="#menu6" type="button"
                                        role="tab" aria-selected="false">Contact</button>
                                </li>
                                <!-- Espace réservé aux non visiteurs -->
                                <?php

              if (isset($_SESSION['role'])) {


                


                  ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link btn btn-secondary text-light mobile  " href="#top"
                                        id="menu7-tab" data-bs-toggle="pill" data-bs-target="#menu7" type="button"
                                        role="tab" aria-selected="false">Avis</button>
                                </li>
                                <!-- Espace réservé admin: Création de compte employé -->

                                <?php

                  if ($_SESSION['role'] === 'admin') {


                    ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link btn btn-secondary text-light mobile  " href="#top"
                                        id="menu4-tab" data-bs-toggle="pill" data-bs-target="#menu4" type="button"
                                        role="tab" aria-selected="false">Créer compte employé</button>
                                </li>

                                <?php
                  }

                  ?>


                                <li class="nav-item " role="presentation">
                                    <!-- Bouton se Déconnecter-->
                                    <form method="POST" action="logout.php">
                                        <button class="btn btn-danger text-light mobile" href="#top" type="submit">Se
                                            Déconnecter</button>
                                    </form>
                                </li>
                                <?php
                
              } else {
                ?>
                                <li class="nav-item " role="presentation">
                                    <button class="nav-link btn btn btn-secondary text-light mobile " href="#top"
                                        id="menu5-tab" data-bs-toggle="pill" data-bs-target="#menu5" type="button"
                                        role="tab" aria-selected="false">Se
                                        connecter</button>
                                </li>
                                <?php
              }
              ?>









                            </ul>
                        </div><!--  Espace réservé aux non visiteurs -->
                </li>




                <li class="nav-item" role="presentation">
                    <button class="nav-link active btn btn-secondary text-light desktop" href="#top" id="home-tab"
                        data-bs-toggle="pill" data-bs-target="#home" type="button" role="tab"
                        aria-selected="true">Accueil</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-secondary text-light desktop " href="#top" id="menu2-tab"
                        data-bs-toggle="pill" data-bs-target="#menu2" type="button" role="tab" aria-selected="false">Nos
                        voitures</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-secondary text-light desktop" href="#top" id="menu3-tab"
                        data-bs-toggle="pill" data-bs-target="#menu3" type="button" role="tab"
                        aria-selected="false">Services</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-secondary text-light desktop " href="#top" id="menu6-tab"
                        data-bs-toggle="pill" data-bs-target="#menu6" type="button" role="tab"
                        aria-selected="false">Contact</button>
                </li>
                <!-- Espace réservé aux non visiteurs -->
                <?php

    if (isset($_SESSION['role'])) {


      


        ?>

                <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-secondary text-light desktop " href="#top" id="menu7-tab"
                        data-bs-toggle="pill" data-bs-target="#menu7" type="button" role="tab"
                        aria-selected="false">Avis</button>
                </li>
                <!-- Espace réservé admin: Création de compte employé -->

                <?php

        if ($_SESSION['role'] === 'admin') {


          ?>
                <li class="nav-item" role="presentation">
                    <button class="nav-link btn btn-secondary text-light  desktop" href="#top" id="menu4-tab"
                        data-bs-toggle="pill" data-bs-target="#menu4" type="button" role="tab"
                        aria-selected="false">Créer
                        compte employé</button>
                </li>

                <?php
        }

        ?>


                <li class="nav-item " role="presentation">
                    <!-- Bouton se Déconnecter-->
                    <form method="POST" action="logout.php">
                        <button class="btn btn-danger text-light desktop" href="#top" type="submit">Se
                            Déconnecter</button>
                    </form>
                </li>
                <?php
      
    } else {
      ?>
                <li class="nav-item " role="presentation">
                    <button class="nav-link btn btn btn-secondary text-light desktop" href="#top" id="menu5-tab"
                        data-bs-toggle="pill" data-bs-target="#menu5" type="button" role="tab" aria-selected="false">Se
                        connecter</button>
                </li>
                <?php
    }
    ?>



            </ul>
        </div>

        <div class="tab-content">

            <?php
  if (isset($_SESSION['error'])):
  $_SESSION['error'];
  if ($_SESSION['error']==1){
    ?>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php
  }endif;
  ?>
            <div class="topofpage" id="top">

            </div>



            <div id="home" class="tab-pane fade show active" role="tabpanel">
                <div class="container">




                    <!--Carousel -->
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://images.pexels.com/photos/5229597/pexels-photo-5229597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Forfait vacance</h5>
                                    <p>Description: Voyager l'esprit tranquille avec notre forfait vacance</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/4022545/pexels-photo-4022545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Forfait Freins</h5>
                                    <p>Changement tout type de frein et vidange du circuit avec une huile de qualité.

                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="https://images.pexels.com/photos/244553/pexels-photo-244553.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Forfait Pneus</h5>
                                    <p>Changement de pneus avec équilibrage et parallélisme.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                    <div class="container">


                        <div class="flex-container justify-content-center" id="flexContainer">
                            <!-- creation de nouveaux services-->

                            <?php
            if (isset($_SESSION['role'])):
              if ($_SESSION['role'] === 'admin') {


                ?>
                            <form method="POST" autocomplete="on" action="services.php">
                                <div class="navbar sticky-top justify-content-center bg-danger">
                                    <input class="form-control" type="text" name="type" placeholder="Type de service"
                                        required>
                                    <input class="form-control" type="number" name="time" placeholder="temps requis"
                                        required>
                                    <input class="form-control" type="text" name="text" placeholder="Description"
                                        required>
                                    <input class="form-control" type="number" name="price" placeholder="Prix" required>
                                    <input class="form-control" type="url" name="imageurl" placeholder="URL de l'image"
                                        required>

                                    <div class="d-grid ">
                                        <button type="submit" class="btn btn-danger m-0">Valider le service</button>
                                    </div>
                                </div>
                            </form>
                            <?php
              }
            endif;
            require_once "connection_bd.php";


            // Affichage des services
            $sql = "SELECT * FROM services";
            $result = mysqli_query($conn, $sql);



            foreach ($result as $row) {

              $service = new Service($row['imageurl'], $row['type'], $row['time'], $row['text'], $row['price']);

              $service->display();

            }

            ?>

                        </div>




                    </div>

                    <!-- Boite pour faire un avis-->
                    <div class="d-flex flex-column form-container">
                        <div class="flex-fill">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Évaluer nous</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" autocomplete="on" action="avis.php">
                                        <div class="flex-fill">
                                            <label for="name" class="form-label">Nom et prénom:</label>
                                            <input type="text" class="form-control" name="name"
                                                placeholder="Nom et prénom" required>
                                        </div>
                                        <div class="flex-fill">
                                            <label for="comment" class="form-label">Commentaire:</label>
                                            <textarea class="form-control" name="text" rows="3"
                                                placeholder="Votre commentaire" required></textarea>
                                        </div>
                                        <div class="flex-fill">
                                            <label for="rating" class="form-label">Note:</label>
                                            <select class="form-select" name="rating">
                                                <option value="5">5 </option>
                                                <option value="4">4 </option>
                                                <option value="3">3 </option>
                                                <option value="2">2 </option>
                                                <option value="1">1 </option>
                                            </select>
                                        </div>
                                        <div class="d-grid ">
                                            <button type="submit" class="btn btn-secondary">Valider</button>
                                        </div>
                                    </form>


                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- Affichage des avis -->
                    <div class="flex-container justify-content-center" id="flexContainer">

                        <?php

          require_once "connection_bd.php";


          // Affichage des avis
          $sql = "SELECT * FROM avis";
          $result = mysqli_query($conn, $sql);



          foreach ($result as $row) {
            if ($row['valid'] == 1) {
              ?>
                        <div class="flex-item">
                            <?php
                if (isset($_SESSION['role'])) {
                  //controle d'acces au bouton pour afficher ou non un avis
            
                  ?>
                            <form method="POST" autocomplete="on" action="validationavis.php">
                                <input name="id" value="<?php echo $row['id']; ?>" type="hidden">
                                <input name="valid" value="0" type="hidden">
                                <button class="btn btn-secondary" type="submit"></button>

                            </form>

                            <?php
                }
                ?>

                            <div class="card">
                                <div class="card border-primary">

                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <?php echo $row['name']; ?>
                                        </h4>
                                        <p class="card-text">
                                            <?php echo $row['text']; ?>
                                        </p>
                                        <p class="card-footer">
                                            <?php echo "Note: " . $row['rating'] . " Étoiles"; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php
            }
          }

          ?>
                    </div>




                </div>
            </div>

            <div id="menu2" class="tab-pane fade" role="tabpanel">
                <div class="container">

                    <!-- Acces pour les non-visiteurs pour ajouter une voiture -->
                    <?php
        if (isset($_SESSION['role'])) {


          ?>
                    <form method="POST" autocomplete="on" action="voiture.php">
                        <div class="navbar sticky-top justify-content-center bg-danger">
                            <input class="form-control" type="text" name="model" placeholder="Marque/Modèle" required>
                            <input class="form-control" type="number" name="date" placeholder="Année" required>
                            <input class="form-control" type="number" name="distance" placeholder="Kilometrage"
                                required>
                            <input class="form-control" type="number" name="price" placeholder="Prix" required>
                            <input class="form-control" type="url" name="imageurl" placeholder="Url de l'image"
                                required>
                            <div class="d-grid ">
                                <button type="submit" class="btn btn-danger m-0">Valider le service</button>
                            </div>
                        </div>

                    </form>
                    <?php
        }
        ?>



                    <!-- Filtres de voitures -->
                    <form>

                        <div class="d-flex flex-wrap bg-white">
                            <div class="flex-fill p-3">
                                <label for="rangeannee" class="form-label">Année minimum:</label>

                                <div class="range-container">
                                    <div class="indicateur" id="range-annee">1980</div>
                                    <input class="range" type="range" id="rangeannee" min="1980" max="2050" step="1"
                                        value="1980" oninput="updateValueIndicator(this, 'range-annee')">

                                </div>
                            </div>
                            <div class="flex-fill p-3">
                                <label for="rangekilometrage" class="form-label">Kilométrage maximum:</label>

                                <div class="range-container">
                                    <div class="indicateur" id="range-kilometrage">400000</div>
                                    <input class="range" type="range" id="rangekilometrage" min="0" max="400000"
                                        step="10000" value="400000"
                                        oninput="updateValueIndicator(this, 'range-kilometrage')">

                                </div>
                            </div>
                            <div class="flex-fill p-3">
                                <label for="rangedeprix" class="form-label">Budget maximum:</label>

                                <div class="range-container">

                                    <div class="indicateur" id="range-deprix">300000</div>
                                    <input class="range" type="range" id="rangedeprix" min="0" max="300000" step="1000"
                                        value="300000" oninput="updateValueIndicator(this, 'range-deprix')">


                                </div>
                            </div>
                        </div>

                        <div class="d-grid">
                            <button type="button" class="btnfiltre btn btn-secondary m-0"
                                onclick="filtrevoitures()">Appliquer le
                                filtre</button>
                        </div>
                    </form>

                    <!-- Création des annonces de voitures-->

                    <div class="d-flex flex-column">
                        <div class="flex-fill">
                            <div class="flex-container justify-content-center" id="flexContainer">
                                <?php
              require_once "connection_bd.php";
              $sql = "SELECT * FROM cars";
              $result = mysqli_query($conn, $sql);


              if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $model = $_POST['model'];
                $date = $_POST['date'];
                $distance = $_POST['distance'];
                $price = $_POST['price'];
                $imageurl = $_POST['imageurl'];



                // Insertion dans la base des données 
                $sql = "INSERT INTO cars (model, date, distance, price, imageurl) VALUES ('$model', '$date', '$distance', '$price', '$imageurl')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                  // succes
                  echo "Item added successfully!";
                } else {
                  // echec
                  echo "Error adding item: " . mysqli_error($conn);
                }
              }
              // Affichage des voitures
              



              $sql = "SELECT * FROM cars";
              $result = mysqli_query($conn, $sql);

              foreach ($result as $row) {
                $carmodel = $row['model'];
                ?>


                                <div class="voiture flex-item" data-prix='<?= $row['price'] ?>'
                                    data-kilometrage=' <?= $row['distance'] ?>' data-annee='<?= $row['date'] ?>'>
                                    <div class="card h=100">
                                        <div class="card border-primary">
                                            <img class="card-img-top" src="<?php $showimage = $row['imageurl'];
                      echo $showimage; ?>" alt="Card image">
                                            <div class="card-body">
                                                <h4 class="card-title">
                                                    <?php echo $carmodel; ?>
                                                </h4>
                                                <p class="card-subtitle">
                                                    <?php echo "Année: " . $row['date']; ?>
                                                </p>
                                                <p class="card-text">
                                                    <?php echo "Kilometrage: " . $row['distance'] . "km"; ?>
                                                </p>




                                                <p class="card-footer">
                                                    <?php echo "Prix: " . $row['price'] . "€"; ?>
                                                </p>
                                                <div class="d-grid ">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                                        Contacter
                                                    </button>
                                                </div>
                                                <div class="modal top fade" id="exampleModal3" tabindex="-1"
                                                    aria-labelledby="exampleModal3Label" aria-hidden="true"
                                                    data-mdb-backdrop="false" data-mdb-keyboard="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5 mt-5" id="exampleModal">Nous
                                                                    Contacter Pour cet article
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">


                                                                <!-- "modal" permettant directement de contacter le service -->
                                                                <form method="POST" autocomplete="on"
                                                                    action="messages.php">
                                                                    <div class="d-flex flex-column">
                                                                        <div class="mb-1 mt-1">
                                                                            <label for="model">Sujet:</label>
                                                                            <input type="text"
                                                                                value='<?php echo $carmodel; ?>'
                                                                                name="model" required>
                                                                        </div>
                                                                        <div class="mb-1 mt-1">
                                                                            <label for="text">Nom et prénom:</label>
                                                                            <input type="text" class="form-control"
                                                                                placeholder="Nom et prénom:" name="name"
                                                                                required>
                                                                        </div>
                                                                        <div class="mb-1 mt-1">
                                                                            <label for="email">Adresse E-mail:</label>
                                                                            <input type="email" class="form-control"
                                                                                placeholder="Adresse E-mail"
                                                                                name="email" required>
                                                                        </div>
                                                                        <div class="mb-1 mt-1">
                                                                            <label for="number">Numero de
                                                                                telephone:</label>
                                                                            <input type="number" class="form-control"
                                                                                placeholder="Numero de telephone:"
                                                                                data-mdb-input-mask="9999999999"
                                                                                name="number" required>
                                                                        </div>
                                                                        <div class="mb-1 mt-1">
                                                                            <label for="text"
                                                                                class="form-label">Commentaire:</label>

                                                                            <textarea class="form-control" name="text"
                                                                                rows="3" placeholder="Votre message"
                                                                                required></textarea>
                                                                        </div>
                                                                    </div>
                                                                </form>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Fermer</button>
                                                                <button type="submit" class="btn btn-secondary">Envoyer
                                                                    votre message</button>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <?php
              }

              ?>


                            </div>
                        </div>
                    </div>
                </div>



            </div>

            <div id="menu3" class="tab-pane fade" role="tabpanel">
                <div class="container">
                    <script>
                    scrollToTop();
                    </script>
                    <div class="d-flex justify-content-center">
                        <div class="flex-container justify-content-center" id="flexContainer">
                            <!-- creation de nouveaux services-->

                            <?php

            if (isset($_SESSION['role'])):


              if ($_SESSION['role'] === 'admin') {


                ?>
                            <form method="POST" autocomplete="on" action="services.php">
                                <div class="navbar sticky-top justify-content-center bg-danger">
                                    <input class="form-control" type="text" name="type" placeholder="Type de service"
                                        required>
                                    <input class="form-control" type="number" name="time" placeholder="temps requis"
                                        required>
                                    <input class="form-control" type="text" name="text" placeholder="Description"
                                        required>
                                    <input class="form-control" type="number" name="price" placeholder="Prix" required>
                                    <input class="form-control" type="url" name="imageurl" placeholder="URL de l'image"
                                        required>

                                    <div class="d-grid ">
                                        <button type="submit" class="btn btn-danger m-0">Valider le service</button>
                                    </div>
                                </div>
                            </form>
                            <?php

              }

            endif;

            require_once "connection_bd.php";


            // Affichage des services
            $sql = "SELECT * FROM services";
            $result = mysqli_query($conn, $sql);




            // Utilisation de la POO Pour afficher les services
            class Service
            {
              public $imageurl;
              public $type;
              public $time;
              public $text;
              public $price;

              public function __construct($imageurl, $type, $time, $text, $price)
              {
                $this->imageurl = $imageurl;
                $this->type = $type;
                $this->time = $time;
                $this->text = $text;
                $this->price = $price;
              }

              public function display()
              {
                echo '
                        <div class="flex-item">
                          <div class="card">
                            <div class="card border-primary">
                              <img class="card-img-top" src="' . $this->imageurl . '" alt="Card image">
                              <div class="card-body">
                                <h4 class="card-title">Service: ' . $this->type . '</h4>
                                <p class="card-subtitle">Temps requis: ' . $this->time . 'mn</p>
                                <p class="card-text">Description: ' . $this->text . '</p>
                                <p class="card-footer">Prix: ' . $this->price . '€</p>
                              </div>
                            </div>
                          </div>
                        </div>';
              }
            }

            foreach ($result as $row) {

              $service = new Service($row['imageurl'], $row['type'], $row['time'], $row['text'], $row['price']);

              $service->display();
            }
            ?>



                        </div>
                    </div>
                </div>

            </div>




            <div id="menu4" class="tab-pane fade" role="tabpanel">
                <?php
      if (isset($_SESSION['role'])):
        if ($_SESSION['role'] === 'admin') {


          ?>
                <div class="container">
                    <!-- Menu création de compte employé-->
                    <div class="d-flex justify-content-center">
                        <form method="POST" autocomplete="on" action="comptes.php">
                            <div class="mb-3 mt-3">
                                <label class="labels" for="newemail" class="form-label">Adresse E-mail:</label>
                                <input type="email" class="form-control" id="newemail" placeholder="Adresse E-mail"
                                    name="email" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="labels" for="newpassword" class="form-label">Mot de passe:</label>
                                <input type="password" class="form-control" id="newpassword" placeholder="Mot de passe"
                                    name="password" required>
                            </div>
                            <button type="submit" class="btn btn-secondary">Créer un compe employé</button>
                        </form>
                    </div>
                </div>
                <?php
        }
      endif;

      ?>
            </div>





            <div id="menu5" class="tab-pane fade" role="tabpanel">
                <div class="container">
                    <!-- Menu connection-->
                    <div class="d-flex justify-content-center">
                        <form method="POST" autocomplete="on" action="login.php">
                            <div class="mb-3 mt-3">
                                <label class="labels" for="email">Adresse E-mail:</label>
                                <input type="email" class="form-control" id="email" placeholder="Adresse E-mail"
                                    name="email" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label class="labels" for="password">Mot de passe:</label>
                                <input type="password" class="form-control" id="password" placeholder="Mot de passe"
                                    name="password" required>
                            </div>
                            <div class="d-grid ">
                                <button type="submit" class="seconnecter btn btn-secondary">Se connecter</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div id="menu6" class="tab-pane fade" role="tabpanel">
                <div class="container">
                    <?php
        if (isset($_SESSION['role'])) {


          ?>



                    <div class="d-flex justify-content-center">
                        <div class="flex-container justify-content-center" id="flexContainer">
                            <!-- Affichage des messages reçus uniquement pour les non-visiteurs-->


                            <?php

              require_once "connection_bd.php";



              $sql = "SELECT * FROM messages";
              $result = mysqli_query($conn, $sql);



              foreach ($result as $row) {
                ?>
                            <div class="flex-item">

                                <div class="card">
                                    <div class="card border-primary">
                                        <div class="card-header">
                                            <?php echo "Sujet: " . $row['title']; ?>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <?php echo "Client: ".$row['name']; ?>
                                            </h4>
                                            <p class="card-subtitle">
                                                <?php echo "Adresse Email: " . $row['email']; ?>
                                            </p>
                                            <p class="card-text">
                                                <?php echo "Numero de téléphone: " . $row['number']; ?>
                                            </p>
                                            <p class="card-footer">
                                                <?php echo "Message: " . $row['text']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
              }

              ?>

                        </div>
                    </div>



                    <?php

        } else {
          ?>
                    <!-- Création des messages pour les visiteurs -->
                    <div class="d-flex flex-column form-container">
                        <form method="POST" autocomplete="on" action="messages.php">
                            <div class="mb-1 mt-1">
                                <div class="d-grid ">
                                    <button type="button" class="btn btn-success">Appeller nous: 9999999999</button>
                                </div>
                            </div>
                            <div class="flex-fill mb-1 mt-1">
                                <label for="title">Sujet:</label>
                                <input type="text" class="form-control" placeholder="Sujet:" name="title" required>
                            </div>
                            <div class="flex-fill mb-1 mt-1">
                                <label for="text">Nom et prénom:</label>
                                <input type="text" class="form-control" placeholder="Nom et prénom:" name="name"
                                    required>
                            </div>
                            <div class="flex-fill mb-1 mt-1">
                                <label for="email">Adresse E-mail:</label>
                                <input type="email" class="form-control" placeholder="Adresse E-mail" name="email"
                                    required>
                            </div>
                            <div class="flex-fill mb-1 mt-1">
                                <label for="number">Numero de telephone:</label>
                                <input type="number" class="form-control" placeholder="Numero de telephone:"
                                    data-mdb-input-mask="9999999999" name="number" required>
                            </div>
                            <div class="flex-fill mb-1 mt-1">
                                <label for="text" class="form-label">Commentaire:</label>

                                <textarea class="form-control" name="text" rows="3"
                                    placeholder="Votre message"></textarea>
                            </div>
                            <div class="d-grid ">
                                <button type="submit" class="btn btn-secondary">Envoyer votre message</button>
                            </div>

                        </form>

                    </div>


                    <?php
        }
        ?>

                </div>


            </div>
            <div id="menu7" class="tab-pane fade" role="tabpanel">
                <?php
      if (isset($_SESSION['role'])):
        


          ?>


                <div class="container">

                    <div class="d-flex justify-content-center">
                        <div class="flex-container justify-content-center" id="flexContainer">



                            <?php

                require_once "connection_bd.php";


                // Affichage des avis
                $sql = "SELECT * FROM avis";
                $result = mysqli_query($conn, $sql);



                foreach ($result as $row) {
                  if ($row['valid'] == 0) {
                    ?>
                            <div class="flex-item">

                                <form method="POST" autocomplete="on" action="validationavis.php">

                                    <input name="id" value="<?php echo $row['id']; ?>" type="hidden">
                                    <input name="valid" value="1" type="hidden">
                                    <button class="btn btn-secondary" type="submit"></button>

                                </form>
                                <div class="card">
                                    <div class="card border-primary">

                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <?php echo $row['name']; ?>
                                            </h4>
                                            <p class="card-text">
                                                <?php echo $row['text']; ?>
                                            </p>
                                            <p class="card-footer">
                                                <?php echo "Note: " . $row['rating'] . " Étoiles"; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php
                  }
                }
                ?>

                        </div>
                    </div>
                </div>











            </div>
            <?php
        
      endif;
      ?>


        </div>
    </div>



    </div>




    <footer>

        <div class="container-fluid footer-container">
            <!-- Modification des horaires d'ouverture par l'administrateur -->

            <?php

      if (isset($_SESSION['role'])):
        if ($_SESSION['role'] === 'admin') {


          ?>



            <form method="POST" autocomplete="on" action="horaires.php">

                <div class="navbar sticky-top justify-content-center bg-danger">



                    <div class="mt-2">
                        <label for="ouverture">Ouverture:</label>
                    </div>
                    <input class="form-control" type="time" name="ouverture" required>
                    <div class="mt-2">
                        <label for="fermeture">Fermeture:</label>
                    </div>
                    <input class="form-control" type="time" name="fermeture" required>

                    <div class="d-grid ">
                        <button type="submit" class="btn btn-danger">Valider les horaires</button>
                    </div>
                </div>
            </form>

            <?php
        }
      endif;


      require_once "connection_bd.php";


      // Affichage des horaires
      $sql = "SELECT * FROM horaires";
      $result = mysqli_query($conn, $sql);


      foreach ($result as $row) {

        ?>

            <div class="Horaires-container">
                <div class="d-flex justify-content-center">



                    <input type="text"
                        value="<?php echo "Du lundi au vendredi, de " . $row['ouverture'] . " à " . $row['fermeture']; ?>"
                        class="form-control-plaintext" name="ouverture" readonly>



                </div>
            </div>
            <?php
      }
      ?>

            <ul class="nav justify-content-center border-bottom pb-3 mb-3 mt-3">

            </ul>
            <p class="text-center">© 2023 Garage V Parrot, Omar MAGHREBI</p>

        </div>
    </footer>

    <script>
    // Function pour mettre à jour l'indicateur des filtres
    function updateValueIndicator(input, indicatorId) {
        var indicator = document.getElementById(indicatorId);
        if (indicator) {
            indicator.textContent = input.value;
        } else {
            console.error('Indicateur non trouvé');
        }
    }

    // Function pour filtrer les voiture
    function filtrevoitures() {
        function updateValueIndicator(value) {
            const gamme = document.getElementById('gamme');
            gamme.textContent = value;
        }
        var rangeAnnee = parseInt(document.getElementById('rangeannee').value);
        var rangeKilometrage = parseInt(document.getElementById('rangekilometrage').value);
        var rangeDeprix = parseInt(document.getElementById('rangedeprix').value);

        var voitureItems = document.getElementsByClassName('voiture');

        // Itération des voitures
        for (var i = 0; i < voitureItems.length; i++) {
            var voiture = voitureItems[i];
            var voitureAnnee = parseInt(voiture.getAttribute('data-annee'));
            var voitureKilometrage = parseInt(voiture.getAttribute('data-kilometrage'));
            var voiturePrix = parseInt(voiture.getAttribute('data-prix'));

            // comparaison des données des voitures avec les filtres appliqués
            if (voitureAnnee >= rangeAnnee && voitureKilometrage <= rangeKilometrage && voiturePrix <= rangeDeprix) {
                // Affichage des voitures filtrès
                voiture.style.display = 'flex';
                voiture.style = 'position: relative; height: 100%; ';


            } else {
                // Cacher le reste des voitures
                voiture.style = 'padding:; visibility:collapse; position:absolute;';

            }
        }
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    window.onload = function() {
        if (getCookie('Cookiefaitmaison') !== null) {
            document.getElementById('cookieConsent').style.display = 'none';
        }
    };

    //fonction pour cacher la bannière à cookies de manière définitive une fois accepté et d'ajuster la durée des cookies
    function hideCookieConsent() {
        document.getElementById('cookieConsent').style.display = 'none';
        let cookieValue = parseInt(getCookie('Cookiefaitmaison')) || 0;
        document.cookie = 'Cookiefaitmaison=' + (++cookieValue) + '; expires=' + new Date(Date.now() + 30 * 24 * 60 * 60 *
            1000).toUTCString() + '; path=/; secure; samesite=Lax'; // protection Samesite contre le CSRF
    }

    //fonction pour rechercher si la cookie existe déja
    function getCookie(name) {
        const cookies = document.cookie.split(';');
        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i].trim();
            if (cookie.startsWith(name + '=')) {
                return cookie.substring(name.length + 1);
            }
        }
        return null;
    }
    </script>
</body>

</html>
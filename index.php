<!DOCTYPE html>
<?php
session_start();
$_SESSION['role'];

?>
<html lang="fr">

<head>
  <!-- Adaptation aux différents écrans-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Les différents CDN du framework Bootstrap -->

  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <!-- CDN CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- CDN JavaScript-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  
  
  <style>
.body {
font-family: "Gill Sans", sans-serif;
}
.footer {
font-family: "Gill Sans", sans-serif;
}
    .btn:active {
      background-color: red
    }
    .modal{
      max-height: 70vh;
    }
    .modal-backdrop {
      visibility: hidden;
    }

    .btn:hover {
      background-color: #d9777f
    }

    .btn:focus {
      background-color: #d9777f
    }

    .form-control-plaintext{

color: white;
}
    .Horaires-container{

color: white;
}


    .container{

      background-color: silver;
      opacity: 95%;
      min-height: 120vh;
    }

    .range-container {
      flex: 1;
      display: flex;
      padding: 10px;
      flex-wrap: wrap;
      flex: 0 1 31%;
    }

    .flex-container {
      flex: 1;
      display: flex;
      flex-wrap: wrap;

    }

    .flex-item {
      flex: 0 0 31%;
      padding: 10px;
      min-width: 20vh;
      max-width: 50vh;
      max-width: 50vh;
    }

   
  </style>
</head>

<body>

  <div class="bg-image image position-sticky" style="background-image: url('/garagevparrot.png');
            height: 140hv ">

    <div class="container-fluid">
      <!-- Navbar et navigation -->
      <div class="navbar sticky-top justify-content-center bg-secondary">
        <ul class="nav nav-pills justify-content-center bg-secondary " id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            
          <img  width="140" height="60" src="Icon1.png">
          
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link active btn btn-secondary text-light " id="home-tab" data-bs-toggle="pill"
              data-bs-target="#home" type="button" role="tab" aria-selected="true">Accueil</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-secondary text-light  " id="menu2-tab" data-bs-toggle="pill"
              data-bs-target="#menu2" type="button" role="tab" aria-selected="false">Nos voitures</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-secondary text-light  " id="menu3-tab" data-bs-toggle="pill"
              data-bs-target="#menu3" type="button" role="tab" aria-selected="false">Services</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-secondary text-light  " id="menu6-tab" data-bs-toggle="pill"
              data-bs-target="#menu6" type="button" role="tab" aria-selected="false">Contact</button>
          </li>
          <!-- Espace réservé aux non visiteurs -->
          <?php
          if ($_SESSION['role'] === 'admin' or $_SESSION['role'] === 'employe') {
    
            
    ?>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-secondary text-light  " id="menu7-tab" data-bs-toggle="pill"
              data-bs-target="#menu7" type="button" role="tab" aria-selected="false">Avis</button>
          </li>
          <!-- Espace réservé admin: Création de compte employé -->
          <?php
          }

          if ($_SESSION['role'] === 'admin') {
    
            
    ?>
          <li class="nav-item" role="presentation">
            <button class="nav-link btn btn-secondary text-light  " id="menu4-tab" data-bs-toggle="pill"
              data-bs-target="#menu4" type="button" role="tab" aria-selected="false">Créer compte employé</button>
          </li>

  <?php
}
?>

          <?php
          if ($_SESSION['role'] === 'admin' or $_SESSION['role'] === 'employe') {
    
            
    ?>
          <li class="nav-item " role="presentation">
          <form method="POST" action="logout.php">
            <!-- Bouton se Déconnecter-->
  <button class="btn btn-danger text-light" type="submit">Se Déconnecter</button>
  </form>
  </li>
  <?php
}else {
?>
          <li class="nav-item " role="presentation">
            <button class="nav-link btn btn btn-secondary text-light " id="menu5-tab" data-bs-toggle="pill"
              data-bs-target="#menu5" type="button" role="tab" aria-selected="false">Se connecter</button>
          </li>
          <?php
}
?>        



        </ul>
      </div>

      <div class="tab-content">


        <div id="home" class="tab-pane fade show active" role="tabpanel">
          <div class="container">
            
          
          
          <!--Carousel -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.pexels.com/photos/5229597/pexels-photo-5229597.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Forfait vacance</h5>
        <p>Description: Voyager l'esprit tranquile avec notre forfait vacance</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/4022545/pexels-photo-4022545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Forfait Freins</h5>
        <p>Changement tout type de frein avec vidange du circuit avec une huile de qualité.

</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/244553/pexels-photo-244553.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Forfait Pneus</h5>
        <p>Changement de pneus avec équilibrage et parallélisme.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


            <div class="container">

            <div class="d-flex justify-content-center">
              <div class="flex-container justify-content-center" id="flexContainer">
                <!-- creation de nouveaux services-->

                <?php
          if ($_SESSION['role'] === 'admin') {
    
            
    ?>
                <form method="POST" action="services.php">
                <div class="navbar sticky-top justify-content-center bg-danger">
                  <input class="form-control" type="text" name="type" placeholder="Type de service" required >
                  <input class="form-control" type="number" name="time" placeholder="temps requis" required>
                  <input class="form-control" type="text" name="text" placeholder="Description" required>
                  <input class="form-control" type="number" name="price" placeholder="Prix" required>
                  <input class="form-control" type="url" name="imageurl" placeholder="URL de l'image" required>
                  
                  <div class="d-grid ">
                <button type="submit" class="btn btn-danger m-0">Valider le service</button>
              </div>
                  </div>
                </form>
                <?php
                }
                require_once "connection_bd.php";
                
                
                // Affichage des services
                $sql = "SELECT * FROM services";
                $result = mysqli_query($conn, $sql);

            
               
                foreach ($result as $row) {
                  ?>
                  <div class="flex-item">

                    <div class="card">
                      <div class="card border-danger">
                        <img class="card-img-top" src="<?php $showimage = $row['imageurl'];
                        echo $showimage; ?>" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">
                            <?php echo "Service: ". $row['type']; ?>
                          </h4>
                          <p class="card-subtitle">
                            <?php echo "Temps requis: ". $row['time']. "mn"; ?>
                          </p>
                          <p class="card-text">
                            <?php echo "Description: ". $row['text']; ?>
                          </p>
                          <p class="card-footer">
                            <?php echo "Prix: ". $row['price']. "€"; ?>
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


  
</div>

<!-- Boite pour faire un avis-->
<div class="d-flex flex-column">
    <div class="flex-fill">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Évaluer nous</h5>
        </div>
        <div class="card-body">
          <form method="POST" action="avis.php">
            <div class="flex-fill">
              <label for="name" class="form-label">Nom et prénom:</label>
              <input type="text" class="form-control" name="name" placeholder="Nom et prénom"  required>
            </div>
            <div class="flex-fill">
              <label for="comment" class="form-label">Commentaire:</label>
              <textarea class="form-control" name="text" rows="3" placeholder="Votre commentaire"></textarea>
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
          if ($_SESSION['role'] === 'admin' or $_SESSION['role'] === 'employe') {
    //controle d'acces au bouton pour afficher ou non un avis
            
    ?>
                <form method="POST" action="validationavis.php" >
                <input name="id" value="<?php echo $row['id']; ?>" type="hidden" >
                <input name="valid" value="0" type="hidden">
<button class="btn btn-secondary" type="submit"></button>

                </form>

                <?php
                }
                ?>

                  <div class="card">
                    <div class="card border-danger">
                    
                      <div class="card-body">
                        <h4 class="card-title">
                          <?php echo  $row['name']; ?>
                        </h4>
                        <p class="card-text">
                          <?php echo  $row['text']; ?>
                        </p>
                        <p class="card-footer">
                          <?php echo "Note: ". $row['rating']." Étoiles" ; ?>
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
          if ($_SESSION['role'] === 'admin' or $_SESSION['role'] === 'employe') {
    
            
    ?>
                  <form method="POST" action="voiture.php">
                  <div class="navbar sticky-top justify-content-center bg-danger">
                    <input class="form-control" type="text" name="model" placeholder="Marque/Modèle"  required>
                    <input class="form-control" type="number" name="date" placeholder="Année" required>
                    <input class="form-control" type="number" name="distance" placeholder="Kilometrage" required>
                    <input class="form-control" type="number" name="price" placeholder="Prix" required>
                    <input class="form-control" type="url" name="imageurl" placeholder="Url de l'image" required>
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
  
    <div class="d-flex flex-wrap">
      <div class="p-2 flex-fill mb-3 mt-3">
        <label for="rangeannee" class="form-label">Année minimum:</label>
        <div class="range-container">
          <div class="indicateur" id="range-annee">1980</div>
          <input type="range" id="rangeannee" min="1980" max="2050" step="1" value="1980" oninput="updateValueIndicator(this, 'range-annee')">
        </div>
      </div>
      <div class="p-2 flex-fill mb-3 mt-3">
        <label for="rangekilometrage" class="form-label">Kilométrage maximum:</label>
        <div class="range-container">
          <div class="indicateur" id="range-kilometrage">400000</div>
          <input type="range" id="rangekilometrage" min="0" max="400000" step="10000" value="400000" oninput="updateValueIndicator(this, 'range-kilometrage')">
        </div>
      </div>
      <div class="p-2 flex-fill mb-3 mt-3">
        <label for="rangedeprix" class="form-label">Budget maximum:</label>
        <div class="range-container">
          <div class="indicateur" id="range-deprix">300000</div>
          
          <input type="range" id="rangedeprix" min="0" max="300000" step="1000" value="300000" oninput="updateValueIndicator(this, 'range-deprix')">
          
        </div>
      </div>
    </div>
 
  <div class="d-grid">
    <button type="button" class="btnfiltre btn btn-secondary m-0" onclick="filtrevoitures()">Appliquer le filtre</button>
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
                    ?>
                    
                    <div class="flex-item">
                      <div class="voiture" data-prix='<?= $row['price'] ?>' data-kilometrage='<?= $row['distance'] ?>' data-annee='<?= $row['date'] ?>' >
                        <div class="card">
                          <div class="card border-danger">
                            <img class="card-img-top" src="<?php $showimage = $row['imageurl'];
                            echo $showimage; ?>" alt="Card image">
                            <div class="card-body">
                              <h4 class="card-title">
                                <?php echo $row['model']; ?>
                              </h4>
                              <p class="card-subtitle">
                                <?php echo "Année: ". $row['date']; ?>
                              </p>
                              <p class="card-text">
                                <?php echo "Kilometrage: ". $row['distance']. "km"; ?>
                              </p>




                              <p class="card-footer">
                                <?php echo "Prix: ". $row['price']. "€"; ?>
                                </p>
                                <div class="d-grid ">
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                                Contacter
</button>
</div>
                                <div class="modal top fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModal3Label" aria-hidden="true" data-mdb-backdrop="false" data-mdb-keyboard="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 mt-5" id="exampleModal">Nous Contacter Pour cet article</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      
            <!-- "modal" permettant directement de contacter le service -->
              <form method="POST" action="messages.php">
                <div class="d-flex flex-column">
                           <div class="mb-1 mt-1">
                  <label for="title">Sujet:</label>
                  <input type="title"  value='<?php $row['model']; ?>'  name="title"
                    required>
                </div>
              <div class="mb-1 mt-1">
                  <label for="text">Nom et prénom:</label>
                  <input type="text" class="form-control"  placeholder="Nom et prénom:" name="name"
                    required>
                </div>
                <div class="mb-1 mt-1">
                  <label for="email">Adresse E-mail:</label>
                  <input type="email" class="form-control"  placeholder="Adresse E-mail" name="email"
                    required>
                </div>
                <div class="mb-1 mt-1">
                  <label for="number">Numero de telephone:</label>
                  <input type="number" class="form-control"  placeholder="Numero de telephone:" data-mdb-input-mask="9999999999" name="number"
                    required>
                </div>
                <div class="mb-1 mt-1">
                <label for="text" class="form-label">Commentaire:</label>

              <textarea class="form-control" name="text" rows="3" placeholder="Votre message" required></textarea>
                </div>
                </div>
              </form>

            </div>
            
            <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-secondary">Envoyer votre message</button>

      </div>
      
        
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
          
            <div class="d-flex justify-content-center">
              <div class="flex-container justify-content-center" id="flexContainer">
                <!-- creation de nouveaux services-->

                <?php
          if ($_SESSION['role'] === 'admin') {
    
            
    ?>
                <form method="POST" action="services.php">
                <div class="navbar sticky-top justify-content-center bg-danger">
                  <input class="form-control" type="text" name="type" placeholder="Type de service" required >
                  <input class="form-control" type="number" name="time" placeholder="temps requis" required>
                  <input class="form-control" type="text" name="text" placeholder="Description" required>
                  <input class="form-control" type="number" name="price" placeholder="Prix" required>
                  <input class="form-control" type="url" name="imageurl" placeholder="URL de l'image" required>
                  
                  <div class="d-grid ">
                <button type="submit" class="btn btn-danger m-0">Valider le service</button>
              </div>
                  </div>
                </form>
                <?php
                }
                require_once "connection_bd.php";
                
                
                // Affichage des services
                $sql = "SELECT * FROM services";
                $result = mysqli_query($conn, $sql);

            
               
                foreach ($result as $row) {
                  ?>
                  <div class="flex-item">

                    <div class="card">
                      <div class="card border-danger">
                        <img class="card-img-top" src="<?php $showimage = $row['imageurl'];
                        echo $showimage; ?>" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">
                            <?php echo "Service: ". $row['type']; ?>
                          </h4>
                          <p class="card-subtitle">
                            <?php echo "Temps requis: ". $row['time']. "mn"; ?>
                          </p>
                          <p class="card-text">
                            <?php echo "Description: ". $row['text']; ?>
                          </p>
                          <p class="card-footer">
                            <?php echo "Prix: ". $row['price']. "€"; ?>
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
            </div>
          
        </div>
        <div id="menu4" class="tab-pane fade" role="tabpanel">
          <div class="container">
            <!-- Menu création de compte employé-->
            <div class="d-flex justify-content-center">
              <form method="POST" action="comptes.php">
                <div class="mb-3 mt-3">
                  <label for="email" class="form-label">Adresse E-mail:</label>
                  <input type="email" class="form-control" id="newemail" placeholder="Adresse E-mail" name="email"
                    required>
                </div>
                <div class="mb-3 mt-3">
                  <label for="password" class="form-label">Mot de passe:</label>
                  <input type="password" class="form-control" id="newpassword" placeholder="Mot de passe" name="password"
                    required>
                </div>
                <button type="submit" class="btn btn-secondary">Créer un compe employé</button>
              </form>
            </div>
          </div>
        </div>
        <div id="menu5" class="tab-pane fade" role="tabpanel">
          <div class="container">
            <!-- Menu connection-->
            <div class="d-flex justify-content-center">
              <form method="POST" action="login.php">
                <div class="mb-3 mt-3">
                  <label for="email">Adresse E-mail:</label>
                  <input type="email" class="form-control" id="email" placeholder="Adresse E-mail" name="email"
                    required>
                </div>
                <div class="mb-3 mt-3">
                  <label for="password">Mot de passe:</label>
                  <input type="password" class="form-control" id="password" placeholder="Mot de passe" name="password"
                    required>
                </div>

                <button type="submit" class="seconnecter btn btn-secondary">Se connecter</button>
              </form>

            </div>
          </div>
        </div>
        <div id="menu6" class="tab-pane fade" role="tabpanel">
        <div class="container">
        <?php
          if ($_SESSION['role'] === 'admin' or $_SESSION['role'] === 'employe') {
    
            
    ?>
 
 
          
          <div class="d-flex justify-content-center">
            <div class="flex-container justify-content-center" id="flexContainer">
              <!-- Affichage des Messages reçus uniquement pour les non-visiteurs-->


              <?php
              
              require_once "connection_bd.php";
              
              
             
              $sql = "SELECT * FROM Messages";
              $result = mysqli_query($conn, $sql);

          
             
              foreach ($result as $row) {
                ?>
                <div class="flex-item">

                  <div class="card">
                    <div class="card border-danger">
                    <div class="card-header">
                    <?php echo "title: ". $row['title']; ?>
                  </div>
                      <div class="card-body">
                      <h4 class="card-title">
                            <?php echo "Nom et prénom: ". $row['name']; ?>
                          </h4>
                          <p class="card-subtitle">
                            <?php echo "Adresse Email : ". $row['email']; ?>
                          </p>
                          <p class="card-text">
                            <?php echo "Numero de téléphone: ". $row['number']; ?>
                          </p>
                          <p class="card-footer">
                            <?php echo "Message: ". $row['text']; ?>
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

}else {
?>
<!-- Création des messages pour les visiteurs -->
<div class="d-flex flex-column">
<form method="POST" action="messages.php">
            <div class="mb-1 mt-1">
            <div class="d-grid ">
              <button type="button" class="btn btn-success">Appeller nous: 9999999999</button>
              </div>
              </div>
              <div class="flex-fill mb-1 mt-1">
                  <label for="title">Sujet:</label>
                  <input type="text" class="form-control"  placeholder="Sujet:" name="title"
                    required>
                </div>
              <div class="flex-fill mb-1 mt-1">
                  <label for="text">Nom et prénom:</label>
                  <input type="text" class="form-control"  placeholder="Nom et prénom:" name="name"
                    required>
                </div>
                <div class="flex-fill mb-1 mt-1">
                  <label for="email">Adresse E-mail:</label>
                  <input type="email" class="form-control"  placeholder="Adresse E-mail" name="email"
                    required>
                </div>
                <div class="flex-fill mb-1 mt-1">
                  <label for="number">Numero de telephone:</label>
                  <input type="number" class="form-control"  placeholder="Numero de telephone:" data-mdb-input-mask="9999999999" name="number"
                    required>
                </div>
                <div class="flex-fill mb-1 mt-1">
                <label for="text" class="form-label">Commentaire:</label>

              <textarea class="form-control" name="text" rows="3" placeholder="Votre message"></textarea>
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
                  
                <form method="POST" action="validationavis.php" >
                
                <input name="id" value="<?php echo $row['id']; ?>" type="hidden" >
                <input name="valid" value="1" type="hidden">
<button class="btn btn-secondary" type="submit"></button>

                </form>
                  <div class="card">
                    <div class="card border-danger">
                    
                      <div class="card-body">
                        <h4 class="card-title">
                          <?php echo  $row['name']; ?>
                        </h4>
                        <p class="card-text">
                          <?php echo  $row['text']; ?>
                        </p>
                        <p class="card-footer">
                          <?php echo "Note: ". $row['rating']." Étoiles" ; ?>
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


      </div>
    </div>

  </div>

</body>
<footer>
  <div class="b-example-divider bg-secondary"></div>
  <div class="container-fluid bg-secondary ">
   <!-- Modification des horaires d'ouverture par l'administrateur -->

   <?php
          

          if ($_SESSION['role'] === 'admin') {
    
            
    ?>



  <form method="POST" action="horaires.php">
                
  <div class="navbar sticky-top justify-content-center bg-danger">

                <label for="text">Horaires:</label>
                  
                    <div class="mt-2">
                    <label for="ouverture">Ouverture:</label> 
                    </div>
                  <input class="form-control" type="time" name="ouverture" required>
                  <div class="mt-2">
                  <label for="fermeture">Fermeture:</label> 
                  </div>
                  <input class="form-control" type="time" name="fermeture"  required>
                                                
                  <div class="d-grid ">
                <button type="submit" class="btn btn-danger">Valider les horaires</button>
              </div>
              </div>
                </form>
                
                <?php
              }

              require_once "connection_bd.php";
              
              
              // Affichage des horaires
              $sql = "SELECT * FROM horaires";
              $result = mysqli_query($conn, $sql);
             
             
              foreach ($result as $row) {
              
                ?>
                
                <div class="Horaires-container">
                <div class="d-flex justify-content-center">
                <input type="text" readonly class="form-control-plaintext"  value="Ouvert du lundi au vendredi aux horaires:">
                <input type="text" readonly class="form-control-plaintext"  value="<?php echo  $row['text']; ?>">
                <label for="ouverture">Ouverture:</label>
                <input  type="time" value="<?php echo  $row['ouverture']; ?>" class="form-control-plaintext" name="ouverture"  readonly>
                <label for="fermeture">Fermeture:</label> 
                <input type="time" value='<?php echo  $row['fermeture']; ?>' class="form-control-plaintext" name="fermeture" readonly>
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
      voiture.style.display = 'block';
    } else {
      // Cacher le reste des voitures
      voiture.style.display = 'none';
    }
  }
}

</script>

</html>

<!--php storm-->
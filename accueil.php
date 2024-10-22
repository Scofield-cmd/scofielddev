<?php  
    require 'php/models/ClassLocateurs.php';
    $db = new database();
    include 'includes/entete.php';
?>

<!-- Barre de navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">GESTION DE LOYER</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="accueil.php"><i class="fas fa-home"></i>&nbsp;Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#" class="load-content" data-page="Profil.html"><i
              class="fas fa-user"></i>&nbsp;Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-cog"></i>&nbsp;Paramètres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"> <button id="authButton" class="btn btn-primary"
              onclick="toggleLogin()">Connexion</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Barre latérale -->
<div class="sidebar bg-dark">
  <a href="Dashboard.html" class="load-content" data-page="Dashboard.html">
    <i class="fas fa-tachometer-alt"></i> Dashboard
  </a>
  <a href="#" class="load-content" data-page="locateurs.php">
    <i class="fas fa-users"></i> locataire
  </a>
  <a href="#" class="load-content" data-page="Newlocateur.php">
    <i class="fas fa-user-plus"></i>&nbsp;Nouveau locataire
  </a>
  <a href="locateurs.php">
    <i class="fas fa-envelope"></i> Messages
  </a>
  <a href="#" class="load-content" data-page="Facture.html">
    <i class="fas fa-file-invoice"></i> Factures
  </a>
  <a href="#" class="load-content" data-page="Mon_compte.html">
    <i class="fas fa-user"></i> Mon compte
  </a>
  <a href="#">
    <i class="fas fa-cog"></i> Paramètres
  </a>
  <a href="#" class="load-content" data-page="Aides.html">
    <i class="fas fa-question-circle"></i> Aide
  </a>
  <a href="#">
    <i class="fas fa-sign-out"></i> Déconnexion
  </a>
</div>

<!-- Contenu principal -->
<div class="main-content" id="content">
  <div class="container-fluid">
    <hr>
    <h3 class="text-info text-bold text-center">Statistiques de payement et de gestion</h3>
    <hr>
    <div class="row">
      <div class="col-md-4">
        <div class="card text-white bg-info mb-3">
          <div class="card-body">
            <h5 class="card-title">Nombre de propriétés</h5>
            <p class="card-text">0</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-info mb-3">
          <div class="card-body">
            <h5 class="card-title">Nombre de locataires</h5>
            <p class="card-text">
              <?= $db->CoutLocateurs();?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-info mb-3">
          <div class="card-body">
            <h5 class="card-title">Nombre de paiements</h5>
            <p class="card-text">0</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Nombre de propriétes vide</h5>
            <p class="card-text">0</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Nombre des factures non payé</h5>
            <p class="card-text">0</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Nombre de paiements</h5>
            <p class="card-text">0</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
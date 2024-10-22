<?php  

include ('includes/header.php');


?>


<div class="container">
  <section class="form sign-up">
    <header>Enregistrement</header>
    <div class="text_error bg-danger fw-bold"></div>
    <form action="" method="post">
      <div class="detail_name">
        <div class="field">
          <div class="input-group mb-3">
            <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-user"></i></span>
            <input type="text" class="form-control" placeholder="Votre nom" name="nom">
          </div>
          <div class="field">
            <div class="input-group mb-3">
              <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Votre nom" name="prenom">
            </div>
          </div>
        </div>
      </div>
      <div class="field">
        <div class="input-group mb-3">
          <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-envelope"></i></span>
          <input type="text" class="form-control" placeholder="Votre Email" name="email">
        </div>
        <div class="field">
          <div class="input-group mb-3">
            <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-camera"></i></span>
            <input type="file" class="form-control" name="photo">
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control ppp" placeholder="Votre mot de passe" id="password"
                name="password">
              <i class="fas fa-eye toggle-password"></i> <!-- L'icône œil dans le champ mot de passe -->
            </div>
          </div>
          <div class="form-group">
            <div class=" input-group mb-3">
              <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-lock"></i></span>
              <input type="password" class="form-control" placeholder="Confirmer votre mot de passe"
                id="confirmPassword" name="confirmPassword">
              <i class="fas fa-eye toggle-password"></i> <!-- L'icône œil dans le champ mot de passe -->
            </div>
          </div>
          <div class="button">
            <button id="SendF" class="btn btn-primary fw-bold" onclick="SendEn()">Enregistrer</button>
            <input type="reset" value="Annuler" class="form-control my-2 bg-danger fw-bold text-dark">
          </div>
    </form>
    <div class="link">
      <a href="login.php">Connectez-vous</a>
    </div>
  </section>
</div>
<script src="js/register.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
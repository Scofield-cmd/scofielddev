<?php  

include ('includes/header.php');
require 'php/models/ClassLocateurs.php';
$db = new database();

   $data = $db->read();
   foreach($data as $row){
    
   }

?>


<div class="container">
  <section class="form sign-up">
    <header>Modifier un locataire</header>
    <div class="text_error bg-danger fw-bold"></div>
    <form action="" method="post" id="update-form">

      <input type="hidden" id="id" value="<?= $row['id']; ?>">
      <div class="detail_name">
        <div class="field">
          <div class="input-group mb-3">
            <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-user"></i></span>
            <input type="text" class="form-control" name="nom" value="<?=$row['nom'];?>" id="nom">
          </div>
          <div class="field">
            <div class="input-group mb-3">
              <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Votre nom" name="prenom" id="prenom">
            </div>
          </div>
        </div>
      </div>
      <div class="field">
        <div class="input-group mb-3">
          <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-phone"></i></span>
          <input type="text" class="form-control" placeholder="Votre numero de téléphone" name="telephone"
            id="telephone">
        </div>
        <div class="field">
          <div class="input-group mb-3">
            <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-camera"></i></span>
            <input type="date" class="form-control" name="mois" id="telephone">
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-lock"></i></span>
              <input type="number" class="form-control " placeholder="Avance du mois" id="avance" name="avance">
            </div>
          </div>
          <div class="form-group">
            <div class=" input-group mb-3">
              <span class="input-group-text text-warning bg-dark" id="basic-addon1"><i class="fas fa-lock"></i></span>
              <input type="number" class="form-control" placeholder="Numero de chambre" name="Nchambre" id="Nchambre">

            </div>
          </div>
          <div class="button">
            <button id="SendF" class="btn btn-primary fw-bold" onclick="SendEn()">Enregistrer</button>
            <input type="reset" value="Annuler" class="form-control my-2 bg-danger fw-bold text-dark">
          </div>
    </form>

  </section>
</div>
<script src="js/Newlocateurs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
  integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$('#update-form').submit(function(e) {
  e.preventDefault();

  $.post('process.php', {
    action: 'update',
    id: $('#id').val(),
    nom: $('#nom').val(),
    prenom: $('#prenom').val(),
    telephone: $('#telephone').val()
  }, function(response) {
    alert('success !');
  });
});
</script>
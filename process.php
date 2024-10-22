<?php 
    require 'php/models/ClassLocateurs.php';
    $db = new database();
    include 'includes/entete.php';

if(isset($_POST['action']) && $_POST['action'] == "view"){
  $output = '' ;
  $i=1;
  $data = $db->read();
  if ($db->CoutLocateurs() > 0) {
  $output .= '
  <table id="example" class="table table-striped nowrap  mt-0 table-hover text-center" style="width:100%">
    <thead class="table-dark text-center ml-1">
      <tr class="text-center">
        <th class="text-center">#</th>
        <th class="text-center">Nom</th>
        <th class="text-center">prenom</th>
        <th class="text-center">Téléphone</th>
        <th class="text-center">Mois</th>
        <th class="text-center">Avance</th>
        <th class="text-center">Reste</th>
        <th class="text-center">Numéro de chambre</th>
        <th class="text-center">Actions</th>
  
      </tr>
    </thead>
    <tbody>
      ';
      foreach ($data as $row) {
  
      $output .= '
      <tr class="text-center">
        <td class="text-center">'.$i++.'</td>
        <td class="text-center">'.$row['nom'].'</td>
        <td class="text-center">'.$row['prenom'].'</td>
        <td class="text-center">'.$row['telephone'].'</td>
        <td class="text-center">'.$row['mois'].'</td>
        <td class="text-center">'.$row['avance'].'</td>
        <td class="text-center">'.$row['reste'].'</td>
        <td class="text-center">'.$row['Nchambre'].'</td>
  
        <td>
          <a href=" " class=" text-success me-2  InfoBtn" " title=" voir detail" id=" '.$row['id'].' "><i
              class="fas fa-info-circle"></i></a>
  
          <a href="EditLocateur.php" class="text-primary me-2  EditBtn" title="Modifier"  id=" '.$row['id']. ' "><i class="fas fa-edit"></i></a>
  
          <a href="" class="text-danger me-2 DeleteBtn" title="supprimer" id=" ' .$row['id']. ' "><i
              class="fas fa-trash-alt"></i></a>
        </td>
  
      </tr>
  
      ';
  
      }
      $output .= "
    </tbody>
  </table>";
  echo $output;
  }
  else{
  echo'<h3 class="text-cent text-success fs-3">Aucun locataire présent pour le moment !</h3>';
  }
  }


  // suppression

  
if (isset($_POST['del_id'])) {
  $id = $_POST['del_id'];
  $db->DeleteLocateurs($id);
}
if(isset($_POST['action']) && $_POST['action'] == "update"){
  $nom = mysqli_real_escape_string($conn , $_POST['nom']);
  $prenom = mysqli_real_escape_string($conn , $_POST['prenom']);
  $telephone = mysqli_real_escape_string($conn , $_POST['telephone']);
  //$photo = mysqli_real_escape_string($conn , $_POST['photo']);
  $mois = mysqli_real_escape_string($conn , $_POST['mois']);
  $avance = mysqli_real_escape_string($conn , $_POST['avance']);
  
  $db->UdateLocateurs($id,$nom , $prenom , $telephone , $mois , $avance , $Nchambre);
}
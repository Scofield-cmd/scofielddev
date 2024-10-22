<?php 
require 'databases/db.php';
require 'models/ClassLocateurs.php';
$db = new database();
$nom = mysqli_real_escape_string($conn , $_POST['nom']);
$prenom = mysqli_real_escape_string($conn , $_POST['prenom']);
$telephone = mysqli_real_escape_string($conn , $_POST['telephone']);
//$photo = mysqli_real_escape_string($conn , $_POST['photo']);
$mois = mysqli_real_escape_string($conn , $_POST['mois']);
$Nchambre = mysqli_real_escape_string($conn , $_POST['Nchambre']);
$avance = mysqli_real_escape_string($conn , $_POST['avance']);



if (isset($nom) && $nom !="" && isset($prenom) && $prenom !="" && isset($telephone) && $telephone !="" && isset($mois) && $mois !="" ) {
            $nom = mysqli_real_escape_string($conn , $_POST['nom']);
            $prenom = mysqli_real_escape_string($conn , $_POST['prenom']);
            $telephone = mysqli_real_escape_string($conn , $_POST['telephone']);
            //$photo = mysqli_real_escape_string($conn , $_POST['photo']);
            $mois = mysqli_real_escape_string($conn , $_POST['mois']);
            $avance = mysqli_real_escape_string($conn , $_POST['avance']);
            
            $db->insert($nom , $prenom , $telephone , $mois , $avance , $Nchambre);
            echo"success";
                    
        } 
        else {
    echo "Tous les champs du formulaire sont obligatoires !";
}

?>
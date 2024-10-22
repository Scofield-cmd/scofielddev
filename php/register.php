<?php 
require 'databases/db.php';
$nom = mysqli_real_escape_string($conn , $_POST['nom']);
$prenom = mysqli_real_escape_string($conn , $_POST['prenom']);
$email = mysqli_real_escape_string($conn , $_POST['email']);
//$photo = mysqli_real_escape_string($conn , $_POST['photo']);
$password = mysqli_real_escape_string($conn , $_POST['password']);
$confirmPassword = mysqli_real_escape_string($conn , $_POST['confirmPassword']);



if (isset($nom) && $nom !="" && isset($prenom) && $prenom !="" && isset($email) && $email !="" && isset($password) && $password !="" ) {
    if (filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $req = "SELECT * FROM admin WHERE email = '{$email}' ";
        $exe = mysqli_query($conn , $req);
        if (mysqli_num_rows($exe) > 0) {
            echo"Cette adresse $email existe déja !";
        }else{
              if ($password != $confirmPassword) {
                    echo"Veillez bien confirmer vos mot de passe !";
              }else{
                    $sql = "INSERT INTO admin (nom , prenom , email  , password) VALUES('{$nom}', '{$prenom}', '{$email}', '{$password}')";
                    $query = mysqli_query($conn , $sql);
                    if ($query) {
                          echo"success";
                    } else {
                          echo"Erreur lord de l'enregistrement !";
                    }
                    
              }
        }
    }else{
        echo"L'adresse $email - que vous avez entrez est incorrect merci de changer !";
    }
} else {
    echo "Tous les champs du formulaire sont obligatoires !";
}

?>
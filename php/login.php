<?php 
session_start();
require_once('databases/db.php');

$email = mysqli_real_escape_string($conn , $_POST['email']);
$password = mysqli_real_escape_string($conn , $_POST['password']);


if (isset($email) && $email != "" &&  isset($password) && $password != "") {
    if (filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $req = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password}'";
        $exe = mysqli_query($conn,$req);
        if (mysqli_num_rows($exe) > 0 ) {
            $row = mysqli_fetch_assoc($exe);
            $_SESSION['nom'] = $row['nom'];
            $_SESSION['prenom'] = $row['prenom'];
            $_SESSION['id'] = $row['id'];
            echo'success';
        }else{
            echo"Email ou mot de passe incorrect merci de changer !";
        }
    }else{
          echo"L'adresse - $email que vous avez entrez est invalide !";
    }
}else{
    echo"Veillez remplir tous les champs du formulaire !";
}

?>
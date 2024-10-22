<?php

class connexion {
      private $dsn = 'mysql:dbname=poo;host=127.0.0.1';
      private $user = 'root';
      private    $password = '';

   public   function getConnexion(){
          try {
                return new PDO($this->dsn,$this->user, $this->password);
          } catch (PDOException $e) {
              die('erreur' . $e->getMessage());
          }
      }

      // Inserton des donnees !
public function insertion($nom , $prenom , $email){
    $req = "INSERT INTO users (nom , prenom , email) VALUES (:nom , :prenom ,:email)";
    $stmt = $this->getConnexion()->prepare($req);
    $stmt->execute([
        'nom' =>$nom,
        'prenom' =>$prenom,
        'email' =>$email,
      
    ]);
    return true;
}

public function read(){
  $data = array();
    $req = "SELECT * FROM users"; 
    $exe = $this->getConnexion()->prepare($req);
    $exe->execute();
    $result =   $exe->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($result as $row){
          $data [] = $row ; 
    }
    return $data ;
}

public function getUsersById($id){
    $req = "SELECT * FROM users WHERE id = :id";
    $exe = $this->getConnexion()->prepare($req);
    $exe->execute(['id' => $id]);
    $result = $exe->fetchAll(PDO::FETCH_OBJ);
    return $result;
}
     
public function UpdateUsers($id , $nom , $prenom , $email){
    $req = "UPDATE users SET nom = :nom , prenom = :prenom , email = :email WHERE id = :id";
    $exe = $this->getConnexion()->prepare($req);
    $exe->execute([
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
    ]);
    return true;
}

public function deleteUsers($id){
    $req = "DELETE FROM users WHERE id = :id";
    $exe = $this->getConnexion()->prepare($req);
   $result =  $exe->execute(['id' =>$id]);
    return true;
}

public function CountUsers(){
    $req = "SELECT * FROM users";
    $exe = $this->getConnexion()->prepare($req);
    $exe->execute();
    $cout = $exe->rowCount();
    return $cout;
}
}

?>
<?php 

class database {
      private $dsn = "mysql:dbname=gestion_loyers; host=127.0.0.1";
      private $users  = 'root';
      private $password = '';


      public function getConnexion()
      {
          try {
                return new PDO($this->dsn, $this->users,$this->password);
          } catch (PDOException $th) {
            die('Erreur de connexion' . $th->getMessage());
          }
      }

      public function insert($nom , $prenom , $telephone , $mois , $avance , $Nchambre)
      {
          $sql = "INSERT INTO locateurs(nom , prenom , telephone , mois , avance  , Nchambre  )
               VALUES(:nom , :prenom , :telephone, :mois , :avance,  :Nchambre )";
          $query = $this->getConnexion()->prepare($sql);
          $query->execute([
              'nom' => $nom,
              'prenom' => $prenom,
              'telephone' => $telephone,
              'mois' => $mois,
              'avance' => $avance,
              'Nchambre' => $Nchambre
          ]);
          return true;
      }

      public function read(){
            $data = array();
            $sql = "SELECT * FROM locateurs";
            $query = $this->getConnexion()->prepare($sql);
            $query->execute();
            $stmt = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($stmt as $row){
                  $data[] = $row ;
            }
            return $data;
      }

      public function getLocateurById($id){
            $sql = "SELECT * FROM locateurs WHERE id = :id";
            $query = $this->getConnexion()->prepare($sql);
            $query->execute(['id'=>$id]);
            $stmt = $query->fetchAll(PDO::FETCH_OBJ);
            return $stmt;
      }

      public function UdateLocateurs($id,$nom , $prenom , $telephone , $mois , $avance , $Nchambre){
            $sql ="UPDATE locateurs SET nom = :nom , prenom = :prenom , telephone = :telephone , mois = :mois ,
                    avance = :avance ,reste = :reste,Nchambre = :Nchambre,etatFacture = :etatFacture WHERE id= :id ";
            $query = $this->getConnexion()->prepare($sql);
            $query->execute([
              'id' => $id,
              'nom' => $nom,
              'prenom' => $prenom,
              'telephone' => $telephone,
              'mois' => $mois,
              'avance' => $avance,
              'Nchambre' => $Nchambre
             
          ]);
          return true;
      }
      
      public function DeleteLocateurs($id){
            $sql = "DELETE FROM locateurs WHERE id =:id";
            $query = $this->getConnexion()->prepare($sql);
            $query->execute(['id' => $id]);
            return true;
      }

      public function CoutLocateurs(){
        
            $sql = "SELECT * FROM locateurs";
            $query = $this->getConnexion()->prepare($sql);
            $stmt = $query->execute();
             $TotalLocateurs =   $query->rowCount();
             return $TotalLocateurs;
      }
}

// $ob = new database();
// print_r( $ob->getLocateurById(3));
?>
<?php
  class Students {
    public $REGISTRATION;
    public $NAME;
    public $GENDER;
    public $EMAIL;
    public $ENDERECO;
    public $TELEFONE;
    public $SENHA;

    public function index(){
      try {
        $db = new connection();

        $con = $db->connect();

        $sql = $con->prepare("select * from alunos");

        $sql->execute();  
        
        if($sql->rowCount() > 0){
          return $result = $sql->fetchAll(PDO::FETCH_CLASS);
        } 
        

      } catch (PDOException $msg) {
        echo "Could not list data from students. {$msg->getMessage()}";
      }
    }

  }
?>
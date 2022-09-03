<?php 
require_once "../models/Operaton.php";
require_once "../models/UserClass.php";

class UserMainDao {
    private $operation;
    public function __construct()
    {
        $this->operation = new Operation();
    }

    public function getUserTitles(){
        $sql = "SELECT titulo FROM main";

        return $this->operation->listar($sql);
    }

    public function addUserMain($id_user, $id_main){
        $sql = "INSERT into usuariosmain (idusuario, idmain) VALUES ('$id_user', '$id_main')";

        return $this->operation->ejecutar($sql);
    }
}

?>
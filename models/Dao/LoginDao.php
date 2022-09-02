<?php
require_once "../models/Operaton.php";
require_once "../models/LoginClass.php";

class LoginDao{
    private $operation;
    public function __construct()
    {
        $this->operation=new Operation();
    }

    public function loginUser($usuario, $clave){
        $sql = "select * from usuarios where usuario='$usuario' and clave ='$clave';";
        return $this->operation->ejecutar($sql);
    }
}

?>
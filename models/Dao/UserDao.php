<?php
// require_once(__DIR__."../Operaton.php");
// require_once(__DIR__."../UserClass.php");

require_once "../models/Operaton.php";
require_once "../models/UserClass.php";

class UserDao{
    private $operation;
    public function __construct()
    {
        $this->operation=new Operation();
    }

    public function getList(){
        $sql="select * from usuarios";
        return $this->operation->listar($sql);
    }

    public function addUser($nombre, $apellidos, $correo, $usuario, $clave){
        $sql = "insert into usuarios(nombre,apellidos,correo,usuario,clave) values('$nombre','$apellidos','$correo','$usuario','$clave')";

        return $this->operation->ejecutar($sql);
    }
    
}

?>
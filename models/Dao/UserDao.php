<?php
// require_once(__DIR__."../Operaton.php");
// require_once(__DIR__."../UserClass.php");

require "../models/Operaton.php";
require "../models/UserClass.php";

class UserDao{
    private $operation;
    public function __construct()
    {
        $this->operation=new Operation();
    }

    public function getList(){
        $sql="select * from user";
        return $this->operation->listar($sql);
    }
    
    public function addUser(User $user){
        $nombre = $user->getName();
        $sql = "insert into user(nombre) values('$nombre')";
        return $this->operation->agregar($sql);
    }
}

?>
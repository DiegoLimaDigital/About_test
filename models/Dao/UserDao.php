<?php
require("models/Operaton.php");
require_once("models/UserClass.php");

class UserDao{
    private $operation;
    public function __construct()
    {
        $this->operation=new Operation();
    }

    public function getList(){ //listar
        $sql="select * from usuarios"; //consulta
        return $this->operation->listar($sql); //retorna el resultado de la consulta
    }
    

}
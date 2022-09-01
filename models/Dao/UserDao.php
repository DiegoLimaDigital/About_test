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
        $sql="select * from usuarios";
        return $this->operation->listar($sql);
    }
    
}

?>
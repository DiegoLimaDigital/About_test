<?php
require_once("Operation.php");
require_once(__DIR__."../UserClass.php");

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
        
    }
}
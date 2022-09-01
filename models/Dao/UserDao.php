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
        $sql="select * from user"; //consulta
        return $this->operation->listar($sql); //retorna el resultado de la consulta
    }
    
    public function addUser(User $user){ //agregar
        //$sql="insert into user (name) values ('".$user->getName()."')"; //consulta
        //return $this->operation->agregar($sql); //retorna el resultado de la consulta
    }
    public function updateUser(User $user){ //modificar
        //$sql="update user set name='".$user->getName()."' where id=".$user->getId(); //consulta
        //return $this->operation->ejecutar($sql); //retorna el resultado de la consulta
    }
    public function deleteUser(User $user){ //eliminar
        //$sql="delete from user where id=".$user->getId(); //consulta
        //return $this->operation->ejecutar($sql); //retorna el resultado de la consulta
    }
}
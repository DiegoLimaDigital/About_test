<?php

require '../models/Operaton.php';
require_once("../models/LoginClass.php");

class LoginDao{

    private $operation;

    public function __construct()
    {
        $this->operation=new Operation();
    }

    public function logIn($usuario,$clave){ //listar
        $sql="select * from usuarios where usuario='$usuario' and clave='$clave'"; //consulta
        return $this->operation->login($sql); //retorna el resultado de la consulta
    }

}


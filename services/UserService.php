<?php
// require_once(__DIR__."../models/Dao/UserDao.php");
require "../models/Dao/UserDao.php";
class UserService{
    private $dao;
    public function __construct(){
        $this->dao=new UserDao();
    }

    public function list(){
        return $this->dao->getList();
    }

    public function add($nombre, $apellidos, $correo, $usuario, $clave){
        return $this->dao->addUser($nombre, $apellidos, $correo, $usuario, $clave);
    }
}
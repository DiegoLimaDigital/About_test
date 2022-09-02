<?php
require_once __DIR__."/../models/Dao/LoginDao.php";
class LoginService{
    private $dao;
    public function __construct(){
        $this->dao=new LoginDao();
    }
    public function login($usuario,$clave){   
        return $this->dao->logIn($usuario,$clave);
    }
    // public function logout(){
    //     return $this->dao->logOut();
    // }

}
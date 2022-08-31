<?php
require_once(__DIR__."../models/Dao/UserDao.php");
class UserService{
    private $dao;
    public function __construct(){
        $dao=new UserDao();
    }

    public function list(){
        return $this->dao->getList();
    }
}
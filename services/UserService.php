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
    public function add(){
        return $this->dao->addUser();
    }
    public function update(){
        return $this->dao->updateUser();
    }
    public function delete(){
        return $this->dao->deleteUser();
    }    
}
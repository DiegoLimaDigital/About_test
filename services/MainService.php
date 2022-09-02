<?php
require "../models/Dao/MainDao.php";
class MainService{
    private $dao;
    public function __construct(){
        $this->dao=new MainDao();
    }

    public function list(){
        return $this->dao->getList();
    }

    public function add($titulo, $cuerpo, $footer){
        return $this->dao->addUser($titulo, $cuerpo, $footer);
    }
}
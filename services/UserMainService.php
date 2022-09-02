<?php 
require "../models/Dao/UserMainDao.php";

class UserMainService {
    private $dao;

    public function __construct()
    {
        $this->dao=new UserMainDao();
    }

    public function list(){
        return $this->dao->getUserTitles();
    }

    public function add($id_user, $id_main){
        return $this->dao->addUserMain($id_user, $id_main);
    }
}

?>
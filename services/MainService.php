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

    public function get($id){
        return $this->dao->getMain($id);
    }
    
    public function add($titulo, $cuerpo, $footer){
        return $this->dao->addMain($titulo, $cuerpo, $footer);
    }

    public function edit($titulo, $cuerpo, $footer, $id){
        return $this->dao->editMain($titulo, $cuerpo, $footer, $id);
    }

    public function delete($id){
        return $this->dao->deleteMain($id);
    }
    
}

$prueba =new MainService();
$Lista=$prueba->list();
//var_dump($Lista);
//$Agregar=$prueba->add('test5','gola test','correo es');
//$Editar=$prueba->edit('omar','test10','correo es','7');
//$Eliminar=$prueba->delete('3');

//var_dump($Lista);
<?php

require_once "../models/Operaton.php";
require_once "../models/MainClass.php";

class MainDao{
    private $operation;
    public function __construct()
    {
        $this->operation=new Operation();
    }

    public function getList(){
        $sql="select * from main";
        return $this->operation->listar($sql);
    }

    public function getMain($id){
        $sql = "select * from main where id='$id'";
        return $this->operation->listar($sql);
    }

    public function addMain($titulo, $cuerpo, $footer){
        $sql = "insert into main(titulo,cuerpo,footer) values('$titulo','$cuerpo','$footer')";

        return $this->operation->ejecutar($sql);
    }
    public function editMain($titulo, $cuerpo, $footer, $id){
        $sql = "update main set titulo='$titulo',cuerpo='$cuerpo',footer='$footer' where id='$id';";

        return $this->operation->ejecutar($sql);
    }
    public function deleteMain($id){
        $sql = "delete from main where id=$id";

        return $this->operation->ejecutar($sql);
    }
}

?>
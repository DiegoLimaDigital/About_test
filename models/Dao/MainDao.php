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
        $sql = "SELECT M.titulo,M.cuerpo,M.footer,CONCAT(U.nombre,' ',U.apellidos) AS autor FROM usuarios U JOIN MAIN m ON U.id=M.id_usuario";
        return $this->operation->listar($sql);
    }

    public function getMain($id){
        $sql = "select * from main where id='$id'";
        return $this->operation->listar($sql);
    }

    public function addMain($titulo, $cuerpo, $footer, $id_usuario){
        $sql = "insert into main(titulo,cuerpo,footer,id_usuario) values('$titulo','$cuerpo','$footer','$id_usuario')";

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
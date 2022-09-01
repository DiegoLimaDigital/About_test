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

    public function addUser($titulo, $cuerpo, $footer){
        $sql = "insert into main(titulo,cuerpo,footer) values('$titulo','$cuerpo','$footer')";

        return $this->operation->ejecutar($sql);
    }
    
}

?>
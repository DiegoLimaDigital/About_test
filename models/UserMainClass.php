<?php 

class UserMain {
    private $id_usuario;
    private $id_main;

    private function __construct($id_usuario, $id_main)
    {
        $this->id_usuario=$id_usuario;
        $this->id_main=$id_main;
    }

    public function getIdUsuario(){
        return $this->id_usuario;
    }

    public function setIdUsuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function getIdMain(){
        return $this->id_main;
    }

    public function setIdMain($id_main){
        $this->id_main = $id_main;
    }
}

?>
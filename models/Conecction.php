<?php
class Conecction{

    private $BaseDatos;
    private $Servidor;
    private $usuario;
    private $password;
    private $ConexionId;
    function __construct(){

    }

    function  conexion($bd,$host,$user,$pass){
        if($bd!="") $this->BaseDatos=$bd;
        if($host!="") $this->Servidor=$host;
        if($user!="") $this->usuario=$user;
        if($pass!="") $this->password=$pass;
        $this->ConexionId=mysqli_connect($this->Servidor,$this->usuario,$this->password,$this->BaseDatos);
        return $this->ConexionId;
    }

}
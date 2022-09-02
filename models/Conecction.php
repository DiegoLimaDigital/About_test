<?php
class Conecction{

    private $BaseDatos;
    private $Servidor;
    private $usuario;
    private $password;
    private $ConexionId;
    function __construct(){

    }

    function  conexion($bd,$host,$user,$pass){ //funcion para conectar a la base de datos
        if($bd!="") $this->BaseDatos=$bd; //si la base de datos no esta vacia
        if($host!="") $this->Servidor=$host; //si el host no esta vacio
        if($user!="") $this->usuario=$user; //si el usuario no esta vacio
        if($pass!="") $this->password=$pass;    //si el password no esta vacio
        
        $this->ConexionId=mysqli_connect($this->Servidor,$this->usuario,$this->password,$this->BaseDatos); //se conecta a la base de datos
       
        
        return $this->ConexionId; //retorna la conexion

    }

}
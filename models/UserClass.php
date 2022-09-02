<?php
class User{
    private $nombre;

    private $apellidos;
    private $correo;
    private $usuario;
    private $clave;

    private function __construct($nombre,$apellidos,$correo,$usuario,$clave)
    {
        $this->nombre=$nombre;
        $this->apellidos=$apellidos;
        $this->correo=$correo;
        $this->usuario=$usuario;
        $this->clave=$clave;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }

    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    public function getClave()
    {
        return $this->clave;
    }


    public function setClave($clave)
    {
        $this->clave = $clave;
    }
}
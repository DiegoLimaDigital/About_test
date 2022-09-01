<?php
// require_once(__DIR__."../services/UserService.php");
require "../services/UserService.php";
require "../services/UserMainService.php";

$accion=$_POST['accion'];
$servicio= new UserService();
$servicio_usermain = new UserMainService();
switch ($accion) {
    case 'listar':
        $lista = $servicio->list();
        print_r($lista);
        break;

    case 'listar_titulos':
        $lista = $servicio_usermain->list();
        print_r($lista);
        break;

    case 'registrar_usuario':
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $correo = $_POST["correo"];
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $mensaje = $servicio->add($nombre, $apellidos, $correo, $usuario, $clave);
        echo $mensaje;
        break;

    default:
        
        break;
}



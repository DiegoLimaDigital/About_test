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

    default:
        
        break;
}



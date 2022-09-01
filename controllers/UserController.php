<?php
// require_once(__DIR__."../services/UserService.php");
require "../services/UserService.php";

$accion=$_POST['accion'];
$servicio= new UserService();
session_start();
switch ($accion) {
    case 'listar':
        $lista = $servicio->list();
        print_r($lista);
        break;

    case 'agregar':
        echo "agregando dentro de switch";
        return $servicio->add();
        break;

    default:
        
        break;
}



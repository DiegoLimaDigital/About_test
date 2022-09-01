<?php
require_once(__DIR__."../services/UserService.php");
$accion=$_POST['accion'];
$servicio= new UserService();
switch ($accion) {
    case 'listar': //listar
        return $servicio->list();
        break; 
    case 'agregar':
        return $servicio->add();
        break;
    case 'modificar':
        return $servicio->update();
        break;
    case 'eliminar':
        return $servicio->delete();
        break;         
    default:
        
        break;
}


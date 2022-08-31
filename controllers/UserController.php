<?php
require_once(__DIR__."../services/UserService.php");
$accion=$_POST['accion'];
$servicio= new UserService();
switch ($accion) {
    case 'listar':
        return $servicio->list();
        break;
    
    default:
        
        break;
}


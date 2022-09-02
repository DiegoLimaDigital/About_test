<?php
require_once(__DIR__."/../services/LoginService.php");
$accion=$_POST['accion'];
$servicio= new LoginService();
switch ($accion) {
     case 'login': //login
         return $servicio->login($_POST['usuario'], $_POST['clave'] );
         break; 
     default:
        
         break;
}
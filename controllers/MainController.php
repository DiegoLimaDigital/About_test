<?php
// require_once(__DIR__."../services/UserService.php");
require "../services/MainService.php";
//require "../services/UserMainService.php";

$accion=$_POST['accion'];
$servicio= new MainService();
//$servicio_usermain = new UserMainService();
switch ($accion) {
    case 'listar':
        $lista = $servicio->list();
        print_r($lista);
        break;
    /*case 'listar_main':
        $lista = $servicio_usermain->list();
        print_r($lista);
        break;*/
    case 'registrar_main':
        $titulo = $_POST["txttitulo"];
        $cuerpo = $_POST["txtcuerpo"];
        $footer = $_POST["txtfooter"];
        $mensaje = $servicio->add($titulo, $cuerpo, $footer);
        echo $mensaje;
        break;

    default:
        
        break;
}

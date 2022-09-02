<?php
// require_once(__DIR__."../services/UserService.php");
require "../services/MainService.php";
//require "../services/UserService.php";

$accion=$_POST['accion'];
$servicio_main = new MainService();
switch ($accion) {

    case 'listar_main':
        $lista = $servicio_main->list();
        print_r($lista);
        break;
    case 'registrar_main':
        $titulo = $_POST["txttitulo"];
        $cuerpo = $_POST["txtcuerpo"];
        $footer = $_POST["txtfooter"];
        $mensaje = $servicio_main->add($titulo, $cuerpo, $footer);
        echo $mensaje;
        break;
    
    case 'eliminar_main':
        $id = $_POST["txtid"];
        $mensaje = $servicio_main->delete($id);
        echo $mensaje;
        break;

    case 'editar_main':
        break;
    default:
        break;
}

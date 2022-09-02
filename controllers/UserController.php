<?php
// require_once(__DIR__."../services/UserService.php");
require "../services/UserService.php";
require "../services/UserMainService.php";

$accion=$_POST['accion'];
$servicio= new UserService();
$servicio_usermain = new UserMainService();
switch ($accion) {
    case 'listar_usuarios':
        $lista = $servicio->list();
        echo '<pre>'; print_r($lista); echo '</pre>';

        break;

    case 'listar_titulos':
        $lista = $servicio_usermain->list();
        echo '<pre>'; print_r($lista); echo '</pre>';
        break;

    case 'registrar_usuario':
        if(!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["correo"]) && !empty($_POST["usuario"]) && !empty($_POST["clave"])){
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $correo = $_POST["correo"];
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];
            $mensaje = $servicio->add($nombre, $apellidos, $correo, $usuario, $clave);
            echo $mensaje;
        } else {
            echo "debe llenar el formulario";
        }
        
        break;

    case 'eliminar_usuario':
        if(!empty($_POST["id_eliminar"])){
            $id = $_POST["id_eliminar"];
            $mensaje = $servicio->delete($id);
            echo $mensaje;
        } else {
            echo "Debe ingresar un id";
        }  
        break;

    default:
        break;
}

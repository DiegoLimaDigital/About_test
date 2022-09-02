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
            echo "Debe llenar el formulario";
        }
        break;

    case 'buscar_usuario':
        if(!empty($_POST["id_editar"])){
            $id = $_POST["id_editar"];
            $lista = $servicio->get($id);
            if(count($lista) >= 1) {
                $id_obtenido = $lista[0]["id"];
                $nombre = $lista[0]["nombre"];
                $apellidos = $lista[0]["apellidos"];
                $correo = $lista[0]["correo"];
                $usuario = $lista[0]["usuario"];
                $clave = $lista[0]["clave"];

                header("Location: ../edit_user.php?id=$id_obtenido&nombre=$nombre&apellidos=$apellidos&correo=$correo&usuario=$usuario&clave=$clave");
            } else {
                echo "No existe un usuario con ese id";
            }
        } else {
            echo "Debe ingresar un id";
        }
        break;

    case 'editar_usuario':
        if(!empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["correo"]) && !empty($_POST["usuario"]) && !empty($_POST["clave"])){
            $id = $_GET["id"];
            $nombre = $_POST["nombre"];
            $apellidos = $_POST["apellidos"];
            $correo = $_POST["correo"];
            $usuario = $_POST["usuario"];
            $clave = $_POST["clave"];
            $mensaje = $servicio->edit($id,$nombre, $apellidos, $correo, $usuario, $clave);
            echo $mensaje;
        } else {
            echo "Debes llenar el formulario";
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

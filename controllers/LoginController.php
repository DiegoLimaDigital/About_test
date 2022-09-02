<?php
require("../services/LoginService.php");
$accion = $_POST['accion'];
$servicio = new LoginService();
switch ($accion) {
    case 'login': //login
        //  header ("Location: ../main.php");
        //  return $servicio->login($_POST['usuario'], $_POST['clave'] );
        session_start();
        $usuario = $_POST['txtusuario'];
        $clave = $_POST['txtclave'];
        $resultado = $servicio->login($usuario, $clave);
        if ($resultado == null) {
            // $_SESSION['usuario'] = $usuario;
            header("Location: ../index.php");
        } else {
            $_SESSION['usuario'] = $resultado;
            header("Location: ../main.php");
        }



        break;


    case 'logout': //cerrar sesion
        // $servicio->logout();
        // header("Location: ../index.php");
        // echo "cerrar sesion";
        session_start();
        session_destroy();
        header("Location: ../index.php");

        break;

    default:
        break;
}

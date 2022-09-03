<?php
// require_once(__DIR__."../services/UserService.php");
//require "../services/MainService.php";
require "../services/MainService.php";

$accion=$_POST['accion'];
$servicio_main = new MainService();
switch ($accion) {

    case 'listar_main':
        $lista = $servicio_main->list();
        //print_r($lista);
        echo '<pre>'; print_r($lista); echo '</pre>';
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
    
    case 'buscar_main':
        if(!empty($_POST["txtideditar"])){
            $id = $_POST["txtideditar"];
            $lista = $servicio_main->get($id);
            if(count($lista) >= 1) {
                $id_obtenido = $lista[0]["id"];
                $titulo = $lista[0]["titulo"];
                $cuerpo = $lista[0]["cuerpo"];
                $footer = $lista[0]["footer"];

            header("Location: ../edit_main.php?id=$id_obtenido&titulo=$titulo&cuerpo=$cuerpo&footer=$footer");
                } else {
                    echo "No existe un usuario con ese id";
                }
                } else {
                     echo "Debe ingresar un id";
                }
                break;

    case 'editar_main':
        if(!empty($_POST["txttitulo"]) && !empty($_POST["txtcuerpo"]) && !empty($_POST["txtfooter"])){
            $id = $_GET["id"];
            $titulo = $_POST["txttitulo"];
            $cuerpo = $_POST["txtcuerpo"];
            $footer = $_POST["txtfooter"];
            $mensaje = $servicio_main->edit($titulo, $cuerpo, $footer,$id);
            echo $mensaje;
        } else {
            echo "Debes llenar el formulario";
        }
        break;

    
    default:
        break;
}

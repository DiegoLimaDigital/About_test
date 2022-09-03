<?php
    session_start();
    if (empty($_SESSION['usuario'])) {
        header("Location: index.php");
    }
    $nombre = $_SESSION['usuario']['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    
    <h1>Bienvenido <?php if(isset($_SESSION['usuario']['clave'])){echo $nombre;}?></h1>
    <form action="controllers/LoginController.php" method="post">
    <input type="submit" name="accion" value="logout">
    </form>

    <br>

    <form action="controllers/MainController.php" method="POST">
        <input type="submit" name="accion" value="listar_main">
        
        <h3>Crear main</h3>
        <input type="text" name="txttitulo" placeholder="Ingresar titulo">
        <input type="text" name="txtcuerpo" placeholder="Ingresar cuerpo">
        <input type="text" name="txtfooter" placeholder="Ingresar footer">
        <input type="submit" name="accion" value="registrar_main">
    </form>
    <form action="controllers/MainController.php" method="POST">
    <h3>Editar Main</h3>
    <input type="text" name="txtideditar" placeholder="Ingresar id a editar">
    <input type="submit" name="accion" value ="buscar_main">
    <h3>Eliminar Main</h3>
    <input type="text" name="txtid" placeholder="Ingresar id a eliminar">
    <input type="submit" name="accion" value="eliminar_main">
    </form>
</body>
</html>
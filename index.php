<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controllers/MainController.php" method="POST">
        <input type="submit" name="accion" value="listar">
        <input type="submit" name="accion" value="listar_main">
        
        <h3>Crear usuario</h3>
        <input type="text" name="txttitulo" placeholder="Ingresar titulo">
        <input type="text" name="txtcuerpo" placeholder="Ingresar cuerpo">
        <input type="text" name="txtfooter" placeholder="Ingresar footer">
        <input type="submit" name="accion" value="registrar_main">
    </form>
</body>
</html>
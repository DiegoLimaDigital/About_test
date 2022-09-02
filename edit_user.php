<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controllers/UserController.php?id=<?=$_GET["id"]?>" method="POST">
        <h3>Editando usuario <?=$_GET["id"]?></h3>
        <input type="text" name="nombre" placeholder="Editar nombre" value="<?=$_GET["nombre"]?>">
        <input type="text" name="apellidos" placeholder="Editar apellidos" value="<?=$_GET["apellidos"]?>">
        <input type="text" name="correo" placeholder="Editar correo" value="<?=$_GET["correo"]?>">
        <input type="text" name="usuario" placeholder="Editar usuario" value="<?=$_GET["usuario"]?>">
        <input type="text" name="clave" placeholder="Editar clave" value="<?=$_GET["clave"]?>">
        <input type="submit" name="accion" value="editar_usuario">
    </form>
</body>
</html>
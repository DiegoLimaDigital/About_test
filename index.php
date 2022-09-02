<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="controllers/UserController.php" method="POST">
        <input type="submit" name="accion" value="listar_usuarios">
        <input type="submit" name="accion" value="listar_titulos">

        <h3>Crear usuario</h3>
        <input type="text" name="nombre" placeholder="Ingresar nombre">
        <input type="text" name="apellidos" placeholder="Ingresar apellidos">
        <input type="text" name="correo" placeholder="Ingresar correo">
        <input type="text" name="usuario" placeholder="Ingresar usuario">
        <input type="password" name="clave" placeholder="Ingresar clave">
        <input type="submit" name="accion" value="registrar_usuario">

        <h3>Editar usuario</h3>
        <input type="text" name="id_editar" placeholder="Ingrese id del usuario a editar">
        <input type="submit" name="accion" value ="buscar_usuario">

        <h3>Eliminar usuario</h3>
        <input type="text" name="id_eliminar" placeholder="Ingrese id del usuario a eliminar">
        <input type="submit" name="accion" value ="eliminar_usuario">
    </form>
</body>

</html>


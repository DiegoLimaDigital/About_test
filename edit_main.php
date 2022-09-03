<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controllers/MainController.php?id=<?=$_GET["id"]?>" method="POST">
        <h3>Editando usuario <?=$_GET["id"]?></h3>
        <input type="text" name="txttitulo" placeholder="Ingresar titulo" value="<?=$_GET["titulo"]?>">
        <input type="text" name="txtcuerpo" placeholder="Ingresar cuerpo" value="<?=$_GET["cuerpo"]?>">
        <input type="text" name="txtfooter" placeholder="Ingresar footer" value="<?=$_GET["footer"]?>">
        <input type="submit" name="accion" value="editar_main">
    </form>
</body>
</html>
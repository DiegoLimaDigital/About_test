<?php
    session_start();
    if (empty($_SESSION['usuario'])) {
        header("Location: index.php");
    }
    echo $_SESSION['usuario']['nombre'];
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
    
    <h1>MAIN</h1>
    <!-- <a href="controllers/LoginController.php?accion=logout">cerrar</a> -->

    <!-- <li><a href="controllers/LoginController.php?accion=logout">Cerrar sesión</a></li> -->

    <form action="controllers/LoginController.php" method="post">
    <input type="submit" name="accion" value="logout">
    </form>

    <!-- <a href="controllers/LoginController.php?accion=logout">Cerrar</a>     -->
    

</body>
</html>
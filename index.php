<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
    
      <form action="controllers/LoginController.php" method="post">
        <input type="text" name="txtusuario" id="usuario">
        <input type="text" name="txtclave" id="clave">
        <input type="submit" name="accion" value="login">
      </form>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    
      <?php
        require_once("models/Dao/UserDao.php");
        require_once("models/UserClass.php");
        $userDao=new UserDao(); //crea un objeto de la clase UserDao
        $users=$userDao->getList(); //llamar a la clase que tiene a la funcion listar
        foreach($users as $user){ //recorrer el arreglo
          //  new User
           echo $user["name"]."<br>"; //mostrar el nombre
         }
        echo "<script>console.log('" . json_encode($users) . "');</script>"; //mostrar el nombre en consola
      ?>
    
</body>
</html>
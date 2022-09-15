<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    <img src="./assets/img/logo.png" id="icon" alt="User Icon" style="
    height: 300px;
">
    </div>

    <!-- Login Form -->
    <form method="post" action="./php/procesarLogin.php">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="usuario" style="
    width: 40%;
">
      <input type="text" id="password" class="fadeIn third" name="clave" placeholder="clave" style="
    width: 40%;
">
      <input type="submit" class="fadeIn fourth" value="ENTRAR">
    </form>

     <!-- Remind Passowrd  -->
    <div id="formFooter">
      <a class="underlineHover" href="./php/registrar.php">REGISTRO</a>
    </div> 

  </div>
</div>
</body>
</html>
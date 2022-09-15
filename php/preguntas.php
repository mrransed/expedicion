<?php
    session_start();
    // echo $_SESSION['usuario'];
    if($_SESSION['usuario']){

    }else{

        header("LOCATION:./login.php?err=fail");
    }


?>


<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>preguntas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

    <div class="container text-center">
    <form action="procesarPreguntas.php" method="post" enctype= multipart/form-data>
  <div class="form-group">
    <h1 class="text-primary">INGRESAR PREGUNTAS</h1>
    <label for="exampleInputEmail1">pregunta</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ingrese la pregunta" name="pregunta">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>

  
  <a href="../index.php"><button class="btn btn-success ">volver</button></a>
  <button type="submit" class="btn btn-primary ">enviar</button>
</form>


    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>
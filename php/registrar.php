

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro de usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
<body>

<h1 class="text-center text-primary">REGISTRO DE USUARIOS</h1>
    <div class="container">
        <form action="procesarRegistro.php" method="post">
        <div class="form-group">
    <label for="exampleInputEmail1">USUARIO</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
    placeholder="INGRESAR USUARIO" name="usuario"> 
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">CONTRASEÑA</label>
    <input type="password" class="form-control" id="exampleInputPassword1" 
    placeholder="CONTRASEÑA" name="clave">
  </div>
  <div class="form-check">
    <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
    <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
  </div>
  <button type="submit" class="btn btn-primary">REGISTRAR</button>
  <a href="../index.php"><button class="btn btn-primary">volver</button></a>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    </body>
</html>
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
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <header class="container-fluid">
          <div class=""></div>
          <div class=""></div>
    </header>
    <div class="container">
      <h1 class="text-center text-primary ">EXPEDICIÓN PACÍFICA</h1>
      <a href="./salir.php"><button class="btn btn-primary">cerrar sesion</button></a>
      <a href="../index.php"><button class="btn btn-primary">volver</button></a>

    </div>
    <div class="container text-center">
        <table class="table">
             <thead><th>audio</th></thead>

             
              <?php
                require("conex.php");
                $sql=mysqli_query($con,"SELECT id,pregunta,respuesta,audio FROM tasks where audio<>' ' ")or die("error en la consulta".mysqli_error($con));

                while($res=mysqli_fetch_array($sql)){
                // $audio=substr($res['audio'],8);
                $audio=$res['audio'];
                  echo '<tr>';

                      echo '<td>';

                            echo '<audio controls>';
                            echo '<source src="'.$audio.'" type="audio/mp3">';                                                
                            echo '</audio>';
                           

                      echo '</td>';

                  

                   
                  echo '</tr>';
                }
                                  

              ?>
             

        </table>
    </div>
    
    
    <?php require("conex.php");  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>
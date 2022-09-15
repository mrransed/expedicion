<?php
    session_start();
    // echo $_SESSION['usuario'];
    $idUsuario=$_SESSION['id'];
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

      <nav class="navbar navbar-dark bg-primary" style="margin-bottom:2rem">
          <div class=""><h1 class="text-center text-light" style="margin-left:1rem;">EXPEDICIÓN PACÍFICA</h1></div>
              <div class=""> <a href="php/salir.php"><button class="btn btn-primary">cerrar sesion</button></a></div>
      </nav>
       
    </header>
    <div class="container">
      
     
      <a href="php/audios.php" class="mt-3"><button class="btn btn-primary">audios</button></a>
      <?php
        if($_SESSION['usuario'] == 'administrador'){
            echo  '<a href="php/preguntas.php"><button class="btn btn-primary">'."preguntas".'</button>'.'</a>';
        }
      ?>

    </div>
    <div class="container text-center">
        <table class="table table-bordered mt-2">
             <thead class="thead-dark" ><th>id</th><th>pregunta</th><th>responder</th><th>grabar respuesta</th></thead>

             
              <?php
                require("./php/conex.php");
                $sql=mysqli_query($con,"SELECT id,pregunta,audio FROM tasks")or die("error en la consulta".mysqli_error($con));

                while($res=mysqli_fetch_array($sql)){
                    
                    echo '<tr>';

                      echo '<td>';
                      echo $res['id'];
                      echo '</td>';

                      echo '<td>';
                        echo $res['pregunta'];
                      echo '</td>';

                      // echo '<td>';
                      //  echo $res['respuesta'];
                      // echo '</td>';

                       echo '<td>';
                       echo '<a href="./php/responder.php?id='.$res['id'].'" class="btn btn-primary">'."responder".'<a/>';
                      echo '</td>';

                      echo '<td>';
                       echo '<a href="./php/grabarResponder.php?id='.$res['id'].'" class="btn btn-danger">'."grabar".'<a/>';
                      echo '</td>';
                  echo '</tr>';
                }
                                  

              ?>
             

        </table>
    </div>

    <div class="container text-center">

    <h2 class="text-primary text-center">RESPUESTAS</h2>
        <table class="table table-bordered mt-2">
             <thead class="thead-dark" ><th>respuesta</th><th>tipo</th><th>pregunta</th></th></thead>
            
             
              <?php
                require("./php/conex.php");
                $sql=mysqli_query($con,"SELECT id,respuesta,tipo,fkPregunta,fkUsuario FROM respuestas")or die("error en la consulta".mysqli_error($con));

                while($res=mysqli_fetch_array($sql)){
                    
                  echo '<tr>';

                    echo '<td>';
                     echo $res['respuesta'];
                    echo '</td>';

                    echo '<td>';
                      echo $res['tipo'];
                    echo '</td>';

                    echo '<td>';
                      echo $res['fkPregunta'];
                    echo '</td>';
                   
                  echo '</tr>';
                }
                                  

              ?>
             

        </table>
    </div>
    
    
    
    <?php require("./php/conex.php");  ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>
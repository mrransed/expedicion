<?php

    require("conex.php");
    $pregunta=$_POST['pregunta'];
  


    $actualizar=mysqli_query($con,"INSERT INTO tasks(pregunta) VALUES('$pregunta')")or die("error al consultar".mysqli_error($con));

    header("location:../index.php");

?>
<?php

    require("conex.php");

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];


    $sql=mysqli_query($con,"INSERT INTO usuarios(nombre,clave) VALUES('$usuario','$clave')"
    )or die("error en la consulta".mysqli_error($con));

    header("LOCATION:../login.php?var=full");

?>
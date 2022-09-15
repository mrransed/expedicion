<?php

    session_start();
    $fkUsuario=$_SESSION['usuario'];
    $idUsuario=$_SESSION['id'];
    echo $fkUsuario;
    echo $idUsuario;
    require("conex.php");
    $respuesta=$_POST['respuesta'];
    $id=$_POST['id'];
    if($respuesta){
        $tipo="texto";
        echo $tipo;
    }else{
        $tipo="archivo";
        echo $tipo;
    }
    
    $fkPregunta=$id;
    
    



    $actualizar=mysqli_query($con,"INSERT INTO respuestas(respuesta,tipo,fkPregunta,fkUsuario) 
    VALUES('$respuesta','$tipo','$fkPregunta','$idUsuario') ") or die("error al consultar".mysqli_error($con));

    header("location:../index.php");

?>
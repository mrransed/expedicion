<?php

    require("./conex.php");

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $sql=mysqli_query($con,"SELECT id,nombre,clave FROM usuarios WHERE nombre='$usuario' and clave='$clave' ")or die("error al consultar".mysqli_error($con));
    $res=mysqli_fetch_array($sql);
    @$usuario=$res['nombre'];
    @$id=$res['id'];
    if($usuario){   
        session_start();
        $_SESSION['usuario']=$usuario;
        $_SESSION['id']=$id;
        header("LOCATION:../index.php");
    }else{
        header("LOCATION:../login.php?error=ok");
    }
?>
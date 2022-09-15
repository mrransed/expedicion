<?php

session_start();
$fkUsuario=$_SESSION['usuario'];
$idUsuario=$_SESSION['id'];
$fkPregunta=$_SESSION['fkPregunta'];
$tipo="audio";   
require("conex.php");

if (count($_FILES) <= 0 || empty($_FILES["audio"])) {
    exit("No hay archivos");
}

# De dónde viene el audio y en dónde lo ponemos
$rutaAudioSubido = $_FILES["audio"]["tmp_name"];



$nuevoNombre = uniqid() . ".mp3";
$rutaDeGuardado = __DIR__ . "/" . $nuevoNombre;
// Mover el archivo subido a la ruta de guardado
move_uploaded_file($_FILES["audio"]["tmp_name"], $rutaDeGuardado);
// Imprimir el nombre para que la petición lo lea
// $nombreGrabacion=$nuevoNombre.".mp3";
$nombreGrabacion=$nuevoNombre;


// $sql=mysqli_query($con,"INSERT INTO tasks(audio) VALUES('$nombreGrabacion')")or die("error en la consulta".mysqli_error($con));

$actualizar=mysqli_query($con,"INSERT INTO respuestas(respuesta,tipo,fkPregunta,fkUsuario) 
VALUES('$nombreGrabacion','$tipo','$fkPregunta','$idUsuario') ") or die("error al consultar".mysqli_error($con));

// header("location:../index.php");



?>

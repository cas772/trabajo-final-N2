<?php
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$edad= $_POST['edad'];
$correo = $_POST['correo'];

include("recursos.php");
$carga = mysqli_query($conexion, "INSERT INTO estudiantes (nombre, apellido, edad, correo) VALUES ('$nombre', '$apellido', $edad, '$correo')");
if ($carga){
header("Location: index.php?cargaok");
} else {
header("Location: index.php?cargaerror");
}
?>
<?php
$conexion = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BASE)  or
die("Error " . mysqli_error($conexion));
;
/* los datos a colocar son: "servidor de la base de datos", "usuario de la base de datos", "contrase�a de la base de datos", "nombre de la base de datos" */
?>
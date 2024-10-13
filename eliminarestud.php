<?php 
    $ver = $_POST['idestud'];
    include("recursos.php");
    $eliminar = mysqli_query($conexion, "DELETE FROM estudiantes WHERE id_estudiante=$ver");
    header("Location:index.php?ok", false);
    exit;
?>
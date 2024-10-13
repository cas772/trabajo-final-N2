<?php
if(isset($_GET['idstud'])){ 
    $ver = $_GET['idstud'];
    include("recursos.php");
    $eliminar = mysqli_query($conexion, "DELETE FROM estudiantes WHERE id_estudiante=$ver");    
};
    header("Location:index.php");
    exit;
?>
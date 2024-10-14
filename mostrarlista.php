<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Correo</th>
        <th>Borrar</th>
    </tr>
    <?php 
include("recursos.php");
if(isset($_POST['bnom'])){
$nomBu = $_POST['bnom'];
    $busc = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE nombre LIKE '$nomBu'");
    if($busc){
        while($row=mysqli_fetch_array($busc)){
        echo"<tr><td>".$row['nombre']."</td>";
        echo"<td>".$row['apellido']."</td>";
        echo"<td>".$row['edad']."</td>";
        echo"<td>".$row['correo']."</td>";
        echo'<td><form action="eliminarestud.php" method="post">
        <input type="hidden" name="idestud" value="'.$row['id_estudiante'].'">
        <input type="submit" value="X">
        </form></td></tr>';
        };
        mysqli_free_result($busc);
    };
} else {
$list = mysqli_query($conexion, "SELECT * FROM estudiantes");
if($list){
    while($row=mysqli_fetch_array($list)){
    echo"<tr><td>".$row['nombre']."</td>";
    echo"<td>".$row['apellido']."</td>";
    echo"<td>".$row['edad']."</td>";
    echo"<td>".$row['correo']."</td>";
    echo'<td><form action="eliminarestud.php" method="post">
    <input type="hidden" name="idestud" value="'.$row['id_estudiante'].'">
    <input type="submit" value="X">
    </form></td></tr>';
    };
    mysqli_free_result($list);
} else {
echo "<p>Error en la conexión a la Base de datos</p>";
};
};
?>
</table>
<?php
if(isset($_GET['ok'])){
    echo "<h5>Un estudiante ha sido borrado</h5>";
};
?>
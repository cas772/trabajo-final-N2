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
$list = mysqli_query($conexion, "SELECT * FROM estudiantes");
if($list){
    while($row=mysqli_fetch_array($list)){
    echo"<tr><td>".$row['nombre']."</td>";
    echo"<td>".$row['apellido']."</td>";
    echo"<td>".$row['edad']."</td>";
    echo"<td>".$row['correo']."</td>";
    echo'<td><a href="eliminarestud.php/?idstud='.$row['id_estudiante'].'"><img src="imagenes/dele.svg" alt="borrar"></a></td></tr>';
    }
    mysqli_free_result($list);
} else {
echo "<p>Error en la conexión a la Base de datos</p>";
};
?>
</table>
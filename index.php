<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Final Nvl2</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div id="contenedor">
<head>
    <h1>Lista de Estudiantes</h1>
</head>
<section>
    <div id="formulario">
        <h4>Agregar Nuevo Estudiante</h4>
    <form action="cargaestudiante.php" method="post" id="formu1">
        <input type="text" name="nombre" id="nom" placeholder="Nombre" required>
        <input type="text" name="apellido" id="ape" placeholder="Apellido" required>
        <input type="number" name="edad" id="edd" placeholder="Edad" max="99" min="18" required>
        <input type="email" name="correo" id="corre" placeholder="Correo electrónico" required>
        <input type="submit" value="Cargar" id="subm">
    </form>
    </div>
    <div id="mostrar">
        <div id="busc">
            <form action="" method="post" id="formu2">
            <input type="text" name="bnom" id="buscanombre" placeholder="Buscar estudiante por nombre" required>
            <input type="submit" value="Buscar">
            </form>
        </div>
        <div id="list">
            <h4>Estudiantes Matriculados</h4>
            <?php include("mostrarlista.php");?>
        </div>
    </div>
</section>
</div>
</body>
</html>
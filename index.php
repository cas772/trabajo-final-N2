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
    <form action="" method="post" id="formu1">
        <input type="text" name="nombre" id="nom" placeholder="Nombre" require>
        <input type="text" name="apellido" id="ape" placeholder="Apellido" require>
        <input type="number" name="edad" id="edd" placeholder="Edad" max="99" min="18" require>
        <input type="email" name="correo" id="corre" placeholder="Correo electrónico" require>
        <input type="submit" value="Cargar" id="subm">
    </form>
    </div>
    <div id="mostrar">
        <div id="busc">
            <form action="" method="post" id="formu2">
            <input type="text" name="bnom" id="buscanombre" placeholder="Buscar estudiante por nombre" require>
            <input type="submit" value="Buscar">
            </form>
        </div>
        <div id="list">
            <h4>Estudiantes Matriculados</h4>

        </div>
    </div>
</section>
</div>
</body>
</html>
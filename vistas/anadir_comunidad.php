<!DOCTYPE html>
<html>
<head>
    <title>Añadir Comunidad</title>
</head>
<body>
    <h1>Añadir Nueva Comunidad</h1>
    <form action="index.php?action=addComunidad" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion" required><br><br>

        <label for="poblacion">Población:</label>
        <input type="text" id="poblacion" name="poblacion" required><br><br>

        <label for="id_administrador">ID Administrador:</label>
        <input type="number" id="id_administrador" name="id_administrador" required><br><br>

        <input type="submit" value="Añadir Comunidad">
    </form>
</body>
</html>

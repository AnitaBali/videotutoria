<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ejemplo Acceso a Base de Datos</title>
</head>
<body>

    <h1>Conectando a la base de datos de países</h1>

    <?php include 'ejemplo13_controlador.php'; ?>
    
    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Código País</th>
            <th>Comunidad</th>
            <th>Población</th>
        </tr>
        <?php echo showListaCiudades(); ?>
    </table>

</body>
</html>
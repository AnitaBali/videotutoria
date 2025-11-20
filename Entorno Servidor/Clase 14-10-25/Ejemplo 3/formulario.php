<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos Clientes</title>
</head>
<body>

    <h1>Realida tu pedido: </h1>

    <form name="formulario" action="receptor.php" method="GET">
        <label for="primer_plato">Primer Plato:</label>
        <select name="primer_plato" id="primer_plato">
            <option value="pasta">Pasta</option>
            <option value="ensalada">Ensalada</option>
            <option value="sopa">Sopa</option>
            <option value="entremeses">Entremeses</option>
        </select> <br>><br>

        <label for="segundo_plato">Segundo Plato:</label>
        <select name="segundo_plato" id="segundo_plato">
            <option value="carne">Carne</option>
            <option value="pollo">Pollo</option>
            <option value="pescado">Pescado</option>
            <option value="pizza">Pizza</option>
        </select> <br>><br>

        <label for="bebidaBebida">Bebida:</label>
        <select name="bebida" id="bebida">
            <option value="agua">Agua</option>
            <option value="refresco">Refresco</option>
            <option value="cerveza">Cerveza</option>
            <option value="vino">Vino</option>
        </select> <br>><br>

        <label for="postre">Postre:</label>
        <select name="postre" id="postre">
            <option value="helado">Helado</option>
            <option value="fruta">Fruta</option>
            <option value="pastel">Pastel</option>
            <option value="yogur">Yogur</option>
        </select><br><br>

        <input type="submit" value="Enviar Pedido">

    </form>

</body>
</html>
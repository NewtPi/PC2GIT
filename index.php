
<!DOCTYPE html>
<html>
<head>
    <title>AGREGUE SU CONTACTO</title>
</head>

<body>

<form action="nuevocontacto.php" method="POST" autocomplete="off">
    <input type="text" name="nombre" placeholder="Ingrese el nombre completo">;

    <input type="number" name="celular" placeholder="Ingrese el numero de celular">;

    <button type="submit" name="submit">Guardar contacto</button>

</form>

<form action="abrirSQL.php" method="POST">

    <button type="submit" name="veragenda">Ver agenda</button>

</form>

</body>
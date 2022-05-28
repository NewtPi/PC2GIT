
<!DOCTYPE html>
<html>
<head>
    <title>AGREGUE UN ESTUDIANTE</title>
</head>

<body>
<h1>BIENVENIDO</h1>
<h2>Añada o vea los estudiantes</h2>

<form action="nuevocontacto.php" method="POST" autocomplete="off">
    <input type="text" name="nombre" placeholder="Ingrese el nombre">;
    <input type="number" name="codigo" placeholder="Ingrese el codigo">;
   
    <input type="number" name="universidad" placeholder="Ingrese universidad">;
    <input type="number" name="celular" placeholder="Ingrese celular">;
    <input type="number" name="ciclo" placeholder="Ingrese el ciclo actual">;

    <button type="submit" name="submit">Guardar contacto</button>

</form>

<form action="abrirSQL.php" method="POST">

    <button type="submit" name="veragenda">Ver agenda</button>

</form>
</body>
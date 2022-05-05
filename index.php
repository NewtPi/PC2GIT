<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

<form action="connect.php" method="POST">
    <input type="text" name="nombre" placeholder="Ingrese el nombre completo">;
    <break>
    <input type="text" name="celular" placeholder="Ingrese el numero de celular">;
    <br>
    <button type="submit" name="submit">Guardar contacto</button>

</form>


<?php
    $sql="INSERT INTO agendadb (nombre, celular) VALUES ('nombre','celular')";
    mysqli_query($conn, $sql);
?>

</body>
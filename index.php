<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body>

<form action="nuevocontacto.php" method="POST">
    <input type="text" name="nombre" placeholder="Ingrese el nombre completo">;

    <input type="number" name="celular" placeholder="Ingrese el numero de celular">;

    <button type="submit" name="submit">Guardar contacto</button>

</form>

<?php


?>

<table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        </table>








</body>
<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');
?>
<form action="index.php" method="POST">

    <button type="submit" name="regresar">Regresar a añadir contactos</button>

</form>
//$sql= "Select * from agendadb";
//$result=mysqli_query($conn,$sql);
//if ($result) {
//    $row=mysqli_fetch_assoc($result);
//    echo row['nombre'];
//    $row=mysqli_fetch_assoc($result);
//    echo row['celular'];
//}
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

        
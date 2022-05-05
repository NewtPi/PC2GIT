<form action="index.php" method="POST">

    <button type="submit" name="regresar">Regresar a añadir contactos</button>

</form>

<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');

$sql="SELECT nombre, celular FROM agendadb";
$result=mysqli_query($conn, $sql);

echo "Nombre: " . " " ." " ." " ." " ." " . "Celular: " ." ". "<br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["nombre"]." " ." " ." " ." " ." " . $row["celular"]. " ". "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Celular</th>
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
<form action="index.php" method="POST">

    <button type="submit" name="regresar">Regresar a añadir contactos</button>

</form>

<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');

$sql="SELECT ID, nombre, celular FROM agendadb";
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

?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Celular</th>
    </tr>
  </thead>
  <tbody>

<?php
if ($result) {
    while ($row=mysqli_fetch_assoc($result)) {
        $ID=$row['ID'];
        $nombre=$row['nombre'];
        $celular=$row['celular'];
        echo ' <tr>
        <th scope="row">'.$ID.'</th>
        <td>'.$nombre.'</td>
        <td>'.$celular.'</td>
      </tr>';


        }
}


?>



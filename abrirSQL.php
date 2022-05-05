<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');

$sql="SELECT nombre, celular FROM agendadb";
$result=mysqli_query($conn, $sql);

echo "Nombre: " . "          " . "Celular: " ." ". "<br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row["nombre"]. "          " . $row["celular"]. " ". "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>



<form action="index.php" method="POST">

    <button type="submit" name="regresar">Regresar a añadir contactos</button>

</form>

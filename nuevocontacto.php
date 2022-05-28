<?php

$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');
header("Location: index.php?signup=sucess");


$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];

$sql="INSERT INTO agendadb (nombre, codigo) VALUES ('$nombre','$codigo')";
mysqli_query($conn, $sql);

?>
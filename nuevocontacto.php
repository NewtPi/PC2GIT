<?php

$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');
header("Location: index.php?signup=sucess");


$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$universidad=$_POST['universidad'];
$celular=$_POST['celular'];
$ciclo=$_POST['ciclo'];

$sql="INSERT INTO agendadb (nombre, codigo, universidad, celular, ciclo) VALUES ('$nombre','$codigo', '$universidad','$celular', '$ciclo')";
mysqli_query($conn, $sql);

?>
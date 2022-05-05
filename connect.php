<?php
$con=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');

$nombre=$_POST['nombre'];
$celular=$_POST['celular'];



$sql="INSERT INTO agendadb (nombre, celular) VALUES ('$nombre','$celular')";
mysqli_query($conn, $sql);


header("Location: index.php?signup=sucess");
if($con){
    echo "SE CONECTOOOO";
}

?>
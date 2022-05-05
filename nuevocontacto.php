<?php


header("Location: index.php?signup=sucess");


$nombre=$_POST['nombre'];
$celular=$_POST['celular'];

$sql="INSERT INTO agendadb (nombre, celular) VALUES ('$nombre','$celular')";
mysqli_query($conn, $sql);



if($conn){
    echo "SE CONECTOOOO";
}

?>
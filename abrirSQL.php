<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');
header("Location: index.php?signup=sucess");

$sql= "Select * from 'agendadb'";
$result=mysqli_query($conn,$sql);
if ($result) {
    $row=mysqli_fetch_assoc($result);
    echo row['nombre'];
    $row=mysqli_fetch_assoc($result);
    echo row['celular'];
}

?>
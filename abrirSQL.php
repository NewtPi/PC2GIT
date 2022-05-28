<head>
    <title>BIENVENIDO A LISTA DE ESTUDIANTES</title>
</head>

<form action="index.php" method="POST">

    <button type="submit" name="regresar">Regresar a añadir estudiantes</button>

</form>

<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');

$sql="SELECT nombre, codigo, universidad, celular, ciclo FROM agendadb";
$result=mysqli_query($conn, $sql);
?>


<body>

<h1>LISTA DE ESTUDIANTES</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Codigo</th>
      <th scope="col">Universidad</th>
      <th scope="col">Celular</th>
      <th scope="col">Ciclo</th>
    </tr>
  </thead>
  <tbody>

<?php
if ($result) {
    while ($row=mysqli_fetch_assoc($result)) {
        $nombre=$row['nombre'];
        $codigo=$row['codigo'];
        $universidad=$row['universidad'];
        $celular=$row['celular'];
        $ciclo=$row['ciclo'];
        echo ' <tr>
        <td>'.$nombre.'</td>
        <td>'.$codigo.'</td>
        <td>'.$universidad.'</td>
        <td>'.$celular.'</td>
        <td>'.$ciclo.'</td>
      </tr>';
        }
}
?>

</body>


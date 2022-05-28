<head>
    <title>BIENVENIDO A SU AGENDA DE CONTACTOS</title>
</head>

<form action="index.php" method="POST">

    <button type="submit" name="regresar">Regresar a añadir contactos</button>

</form>

<?php
$conn=new mysqli('us-cdbr-east-05.cleardb.net','bbe40a4158d781','bad350f8','heroku_05ba08bf857ea97');

$sql="SELECT nombre, codigo FROM agendadb";
$result=mysqli_query($conn, $sql);
?>


<body>

<h1>AGENDA</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Codigo</th>
    </tr>
  </thead>
  <tbody>

<?php
if ($result) {
    while ($row=mysqli_fetch_assoc($result)) {
        $nombre=$row['nombre'];
        $codigo=$row['codigo'];
        echo ' <tr>
        <td>'.$nombre.'</td>
        <td>'.$codigo.'</td>
      </tr>';
        }
}
?>

</body>


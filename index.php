<?php
include 'connect.php';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<       !doctype html>
        <html lang="en">
            
        <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

            <title>AGENDA DE CONTACTOS</title>
        </head>
        <body>
            <h1> AGENDA DE CONTACTOS </h1>    

            <div class="container my-5">
            
            <form method="post">

            <div class="mb-3">
                <label >Nombre</label>
                <input type="text" class="form-control"
                placeholder="Escribe el nombre" name="nombre" autocomplete="off">
            </div>

            <div class="mb-3">
                <label >Celular</label>
                <input type="celular" class="form-control"
                placeholder="Escribe el número de telefono" name="celular" autocomplete="off">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Guardar contacto</button>
            
            </form>

            </div>
        
        </body>
        </html>




        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
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














</body>
</html>


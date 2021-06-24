<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
    .Container{
      display: flex;
    flex-direction: column;
    align-items: center;
    }
    </style>
</head>
<body>
    <div class="Container">
        <h1>¿Desea Eliminar el genero?</h1>
        <p>Genero :  <?=$genre->name?></p>
        <a href="../../genre/delete/<?=$genre->id?>"><button class="btn btn-primary" >Si</button></a>
        
        <a href="../"><button class="btn btn-danger">NO</button></a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title>Generos</title>
  <style>
      .tableContainer{
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        width: 800px;
        margin: auto;

      }
    </style>
</head>
<body>
<div class="tableContainer">
<h1><?=$encabezado?></h1>
  <a href="add/" ><button class="btn btn-info">Agregar</button></a>
  <table class="table table-success table-hover">
    <thead>
      <th>Id</th>
      <th>Name</th>
      <th colspan ="3">Options</th>
    </thead>
    <tbody>
    <?php $i=1; foreach ($genres as $genre): ?>
          <tr>
          <td><?=$i++?></td>
          <td><?=$genre->name?></td>
          <td><a href="edit/<?=$genre->id?>"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="deleteview/<?=$genre->id?>"><button class="btn btn-danger">Delete</button></a></td>
          
          </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

</body>
</html>
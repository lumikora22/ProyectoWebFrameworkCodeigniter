<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Albums</title>
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
    <table class="table table-primary table-hover" border="1">
      <thead>
        <th>#</th>
        <th>Name</th>
        <th>Author</th>
        <th>Genre</th>
        <th colspan="2">Options</th>
      </thead>
      
      <tbody>
        <?php $i=1; foreach ($albums as $album): ?>
          <tr>
          <td><?=$i++?></td>
          <td><?=$album->name?></td>
          <td><?=$album->author?></td>
          <td><?=$album->name_g?></td>
          <td><a href="edit/<?=$album->id?>"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="deleteview/<?=$album->id?>"><button class="btn btn-danger">Delete</button></a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  

  </body>
</html>

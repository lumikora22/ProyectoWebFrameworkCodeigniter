<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Codeniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </head>
  <body>
    <h1>Edit Album</h1>
  </body>
  <form class="form" action="save" method="POST" style="width:500px">
    <?php foreach ($mod as $fila) { ?>
    <label for="name" class="form-label">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="<?=$album->name?>">
    <label for="author" class="form-label">Author</label>
    <input class="form-control" type="text" name="author" id="author" value="<?=$album->author?>">
    <label for="genre" class="form-label">Genre</label>
    <select class="form-select" name="genre" id="genre">
      <?php foreach ($genres as $key => $genre): ?>
        <option value="<?=$genre->id?>"><?=$genre->name?></option>
      <?php endforeach; ?>
    </select>
    <!-- ../../album/delete/<?=$album->id?> -->
    <input class="btn btn-primary gy-2" type="submit" name="button">Actualizar</input>
    <?php } ?>
  </form>
</html>
    <!-- <a href="../../album/update"> -->
<script>
  function Event(e){
    e.preventDefault();
  }
</script>
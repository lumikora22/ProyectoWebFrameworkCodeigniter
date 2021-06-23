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
  <form class="" action="update" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="<?=$album->name?>">
    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="<?=$album->author?>">
    <label for="genre">Genre</label>
    <select class="" name="genre" id="genre">
      <?php foreach ($genres as $key => $genre): ?>
        <option value="<?=$genre->id?>"><?=$genre->name?></option>
      <?php endforeach; ?>
    </select>
    <button type="submit" name="button">Aceptar</button>
  </form>
</html>

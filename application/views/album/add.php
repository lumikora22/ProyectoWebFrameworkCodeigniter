<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Codeniter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>
    .formContainer{
      display: flex;
    flex-direction: column;
    align-items: center;
    }
    </style>
  </head>
  <body>
  <div class="formContainer">
    <h1>Agregar Album</h1>
    <form class="form" action="../../album/save/" method="POST" style="width:500px">
    <label for="name" class="form-label">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="">
    <label for="author" class="form-label">Author</label>
    <input class="form-control" type="text" name="author" id="author" value="">
    <label for="genre" class="form-label">Genre</label>
    <select class="form-select" name="genre" id="genre">
      <?php foreach ($genres as $key => $genre): ?>
        <option value="<?=$genre->id?>"><?=$genre->name?></option>
      <?php endforeach; ?>
    </select>
    <input class="btn btn-primary gy-2" type="submit" name="button" value="Agregar Album"></input>
  </form>
  </div>
  </body>
  
</html>
<h1>Genres</h1>
<table border="1">
  <thead>
    <th>ID</th>
    <th>Name</th>
  </thead>
  <tbody>
    <?php foreach ($genres as $genre): ?>
      <tr>
      <td><?=$genre->id?></td>
      <td><?=$genre->name?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

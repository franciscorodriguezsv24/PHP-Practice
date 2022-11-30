<?php include './Disenio/header.php'?>

<?php include './Models/conection.php';

$sentencia = $bd->query('SELECT * from Songs');

$Songs = $sentencia->fetchAll(PDO::FETCH_OBJ);

?>



<div class="container">
    <div class="row">
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titlet</th>
      <th scope="col">Artist</th>
      <th scope="col">Album</th>
      <th scope="col">Premier</th>
      <th scope="col">Duration</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

      
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Songs as $data){?>
    <tr>
      <th scope="row"><?php echo $data->id?></th>
      <td><?php echo $data->Title?></td>
      <td><?php echo $data->Artist?></td>
      <td><?php echo $data->Album?></td>
      <td><?php echo $data->Premier?></td>
      <td class="text-success"><?php echo $data->Duration?></td>
      <td><a href="./Contollers/edit.php?id=<?php echo $data->id?>" class="btn btn-success ml-2 mr-2">Edit</a></td>
      <td><a href="./Contollers/Delete.php?id=<?php echo $data->id?>" class="btn btn-danger ml-2 mr-2">Delete</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
Enter your favorite song
        <form action="./Contollers/Register.php" method="POST">
            <div class="mb-1 ml-8 mr-8">
                <label>Title</label>
                <input class="form-control" type="text" placeholder="Add Title" name="inputTitle" aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Artist</label>
                <input class="form-control" type="text" placeholder="Add Artist"  name="inputArtist" aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Album</label>
                <input class="form-control" type="text"  placeholder="Add album"  name="inputAlbum"  aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Premier</label>
                <input class="form-control" type="text" placeholder="Add Premier"  name="inputPremier" aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Duration</label>
                <input class="form-control" type="text" placeholder="Add duration"  name="inputDuration"  aria-label="default input example" required>
            </div>
            <input type="submit" class="btn btn-success mb-2 ml-2" value="Upload">
    </div>
    <br>
    <br>
    <br>
</div>


<?php include './Disenio/footer.php'?>
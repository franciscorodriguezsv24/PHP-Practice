<?php include '../Disenio/header.php' ?>

<?php include '../Models/conection.php';

$codeSong = $_GET['id'];

$query = $bd->prepare("SELECT * FROM Songs WHERE id=?");

$query->execute([$codeSong]);

$Song = $query->fetch(PDO::FETCH_OBJ);

?>

<div class="container">
    <div class="card">
        <div class="card-header">
Enter your favorite song
        <form action="./updateSong.php" method="POST">
            <div class="mb-1 ml-8 mr-8">
                <label>Title</label>
                <input class="form-control" type="text" placeholder="Add Title" name="inputTitle" value="<?php echo $Song->Title?>"  aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Artist</label>
                <input class="form-control" type="text" placeholder="Add Artist"  name="inputArtist" value="<?php echo $Song->Artist?>" aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Album</label>
                <input class="form-control" type="text"  placeholder="Add album"  name="inputAlbum" value="<?php echo $Song->Album?>"  aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Premier</label>
                <input class="form-control" type="text" placeholder="Add Premier"  name="inputPremier" value="<?php echo $Song->Premier?>" aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label>Duration</label>
                <input class="form-control" type="text" placeholder="Add duration"  name="inputDuration" value="<?php echo $Song->Duration?>" aria-label="default input example" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $Song->id?>">
            <input type="submit" class="btn btn-success mb-2 ml-2" value="Upload">
    </div>
    <br>
    <br>
    <br>
</div>


<?php include '../Disenio/footer.php'?>
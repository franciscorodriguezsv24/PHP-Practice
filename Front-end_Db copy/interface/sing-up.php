<?php include '../templates/Header.php' ?>


<div class="container bg-white" style="padding-top:20px">
    <div class="card">
        <div class="card-header bg-white text-dark"  >
<h3>Register with us</h3> 
        <form action="" method="POST">

            <div class="mb-2 ml-2 mr-2">
                <label  class="text-dark">Username</label>
                <input class="form-control" type="text" placeholder="Create an Username"  name="inputArtist" aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label class="text-dark">Email</label>
                <input class="form-control" type="text"  placeholder="exampleOfThis@email.com"  name="inputAlbum"  aria-label="default input example" required>
            </div>

            <div class="mb-2 ml-2 mr-2">
                <label class="text-dark">Password</label>
                <input class="form-control" type="password" placeholder="Password"  name="inputDuration"  aria-label="default input example" required>
            </div>
            <div class="mb-2 ml-2 mr-2">
                <label class="text-dark">Confirm password</label>
                <input class="form-control" type="password" placeholder="Confirmassword"  name="inputDuration"  aria-label="default input example" required>
            </div>
            <input type="submit" class="btn btn-warning text-dark mb-2 ml-2" value="Continue">

<?php include '../templates/footer.php' ?>

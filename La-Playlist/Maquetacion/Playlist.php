<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Playlist</title>
<style>

      .Container1{
        display: flex;
      }

      .Message{
        width: 642px;
        padding: 50px;
        margin-left: 73px;
       
        background:linear-gradient(to bottom, white, black);

      }

      .image{
        width: 500px;
        margin-left: 5px;
       
      }
      .Text{
        text-align: center;
        padding: 120px;
        font-family: 'Sono', sans-serif;
        font-size: 75px;
        text-size-adjust:unset;
      }

</style>


</head>
<body>
 <div class=" bg-dark">
  <div class="container" style="background:linear-gradient(to bottom, green, black)">
        <header class= "py-5">
            <h3 class= "text-center text-white ">Playlist</h3>
        </header>
  </div>

  <div class="Container1">
    <div class="Message">
        <h3 class="Text">All music in your hands.</h3>
    </div>
    <div class="image">
        <img src="../resources/pexels-bryan-catota-3756766.jpg" class="img-fluid" alt="">
    </div>
  </div>
<br>
<br>
  <div class="container fixed-auto">
    <div class="py-2">
        <form action="../index2.php">
        <input type="submit" class="btn btn-success mb-2 ml-2" value="Create your own playlist.">
    </div>
  </div>
    </div>



      
</body>
</html>
    

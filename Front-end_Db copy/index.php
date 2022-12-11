<?php include '../Front-end_Db/templates/Header.php'?>

<style>
    .Container1{
        display: flex;
        margin-left: 85px;
      }

      .Message{
        width: 642px;
        padding: 40px;
        margin-left: 73px;
      }
</style>  

<div class="Container1">
<div class="image1">
    <img width="400" height="400" src="../Front-end_Db/templates/resources/pexels-lukas-574071.jpg" class="pt-4">
  </div>
    <div class="Message" style="padding-top:135px;">
    <h3>Welcome to the best free library</h3>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
    <div class="col-6" style="padding-top:40px; padding-left:175px">
    <form action="../Front-end_Db/interface/Admin.php">
    <input type="submit" class="btn btn-warning text-dark mb-2 ml-2" value="sing in.">
    </form>
    </div>
    <div class="col-6" style="padding-top:40px; padding-left:10px">
    <form action="../Front-end_Db/interface/sing-up.php">
    <input type="submit" class="btn btn-dark text-warning mb-2 ml-2" value="sing up.">
    </form>
  </div>
    </div>
    </div>
  </div>


<?php include '../Front-end_Db/templates/footer.php'?>
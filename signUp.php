<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time();?>">
  </head>
  <body>
  <?php include "navi.php"; ?>
  <br><br>
    <main>
      <div class="login-wrapper mx-auto mt-5 rounded">
        <div class="row">
          <div class="col text-center mt-3">
            <h2 class="headline">SIGN UP</h2>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-10 col-md-8 mx-auto">
            <form action="view.php" method="POST">
              <div class="form-group">
                <label for="userName">UserName:</label>
                <input type="text" class="form-control" id="userName" placeholder="Enter your UserName" name="">
              </div>
              <div class="form-group">
                <label for="userPicture">Profile picture:</label>
                <input type="file" class="form-control-file" id="userPicture" name="">
              </div>
              <div class="form-group">
                <label for="userPhoneNumber">Phone Number:</label>
                <input type="tel" class="form-control" id="userPhoneNumber" name="">
              </div>
              <div class="form-group">
                <label for="userLocation">Location:</label>
                <textarea class="form-control" id="userLocation" placeholder="Enter your Location" name=""></textarea>
              </div>
              <div class="form-group">
                <label for="userPassword">Password:</label>
                <input type="password" class="form-control" id="userPassword" placeholder="Enter your Password" name="">
              </div>
              <!-- <div class="form-group">
                <label for="userPassword">Confirm Password:</label>
                <input type="password" class="form-control" id="userPassword" placeholder="Enter your Password" name="">
              </div> -->
              <div class="form-group d-flex justify-content-end">
                <button type="button" class="btn btn-primary">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  <?php include "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
  </body>
</html>
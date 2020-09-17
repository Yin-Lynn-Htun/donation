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
    <title>Information</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time();?>">
  </head>
  <body>
  <?php include "navi.php"; ?>
  <br><br>
    <main>
      <div class="row mt-5">
        <div class="col text-center">
          <h2 class="headline">PROFILE</h2>
        </div>
      </div>
      <div class="row mt-5 mb-5">
        <div class="col-12 col-lg-4 mb-5 d-flex justify-content-center">
          <img src="img/man2.png" alt="profile" class="profile-pic">
        </div>
        <div class="col-12 col-lg-7 ml-1 mb-5 my-auto">
          <div class="form-group row">
            <label class="profileForm" for="FormName">Name:</label>
            <div class="col"><p>NAME</p></div>
          </div>
          <div class="form-group row">
            <label class="profileForm" for="FormPhone">Phone:</label>
            <div class="col"><p>PHONE NO</p></div>
          </div>
          <div class="form-group row">
            <label class="profileForm" for="FormEmail">Email:</label>
            <div class="col"><p>EMAIL</p></div>
          </div>
          <div class="form-group row">
            <label class="profileForm" for="FormLocation">Location:</label>
            <div class="col"><p>LOCATION</p></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 d-flex justify-content-center">
          <img src="img/req.jpg" class="req-icon mx-auto" alt="Request icon">
        </div>
        <div class="col-6 d-flex justify-content-center">
          <img src="img/donate.jpg" class="req-icon" alt="Donate icon">
        </div>
        <div class="col-6 d-flex justify-content-center">
          <h5>[?] items requested</h5>
        </div>
        <div class="col-6 d-flex justify-content-center">
          <h5>[?] items donated</h5>
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
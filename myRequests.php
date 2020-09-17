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
    <title>My Requests</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time();?>">
  </head>
  <body>
  <?php include "navi.php"; ?>
  <br><br>
    <main>
      <div class="row mt-5">
        <div class="col text-center">
          <h2 class="headline">MY REQUESTS</h2>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 col-lg-4 d-flex justify-content-center mb-5">
          <div class="card">
            <div class="card-header text-right text-muted">
              <small>2 days ago</small>
            </div>
            <div class="card-body">
              <div class="text-center mb-2">
                <img src="img/item1.png" alt="item" class="myReq-img img-fluid">
              </div>
              <p>Item Name<br>
                Quantity<br>
                Locaiton<br>
                Last Date<br>
                Purpose</p>
            </div>
            <div class="card-footer text-right">
              <button type="button" class="btn btn-danger">DELETE</button>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-4 d-flex justify-content-center mb-5">
          <div class="card">
            <div class="card-header text-right text-muted">
              <small>4 days ago</small>
            </div>
            <div class="card-body">
              <div class="text-center mb-2">
                <img src="img/item2.jpg" alt="item" class="myReq-img img-fluid">
              </div>
              <p>Item Name<br>
                Quantity<br>
                Locaiton<br>
                Last Date<br>
                Purpose</p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <div class="my-auto">
                <a href="info.php"><b>Donator Found!</b></a>
              </div>
              <div class="d-flex">
                <button type="button" class="btn btn-danger mr-1">REJECT</button>
                <button type="button" class="btn btn-success">RECEIVED!</button>
              </div>
            </div>
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
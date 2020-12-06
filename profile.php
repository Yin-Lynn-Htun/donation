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
    <title>Profile</title>
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
        <div class="col-12 col-lg-4 mb-5">
          <div class="row">
            <div class="col-12 d-flex justify-content-center mb-5">
              <img src="img/man.png" alt="profile" class="profile-pic">
            </div>
            <div class="col-12" style="padding-left: 100px;">
              <input type="file" class="form-control-file">
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-7 ml-1 mb-5 my-auto">
          <div class="form-group row">
            <label class="profileForm" for="FormName">Name:</label>
            <div class="col"><input type="text" class="form-control" id="FormName" placeholder="Information"></div>
          </div>
          <div class="form-group row">
            <label class="profileForm" for="FormPhone">Phone:</label>
            <div class="col"><input type="tel" class="form-control" id="FormPhone" placeholder="Information"></div>
          </div>
          <div class="form-group row">
            <label class="profileForm" for="FormEmail">Email:</label>
            <div class="col"><input type="email" class="form-control" id="FormEmail" placeholder="Information"></div>
          </div>
          <div class="form-group row">
            <label class="profileForm" for="FormLocation">Location:</label>
            <div class="col"><textarea class="form-control" id="FormLocation" rows="3" placeholder="Information"></textarea></div>
          </div>
          <div class="form-group d-flex justify-content-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalCenter">
              Change Password
            </button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <label>Please re-enter your old password:</label>
                    <input type="password" name="" class="form-control">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1">Cancel</button>
            <button type="button" class="btn btn-success">Save Changes</button>
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
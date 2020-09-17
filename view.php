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
    <title>View</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time();?>">
  </head>
  <body>
  <?php include "navi.php"; ?>
  <br><br>
    <main>
      <div class="row mt-5">
        <div class="col text-center">
          <h2 class="headline">REQUESTS</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item1.png" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item2.jpg" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item1.png" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item1.png" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item2.jpg" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item1.png" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item1.png" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item2.jpg" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal">
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item1.png" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail">Item: <br>
              Location: <br>
              Last Date: </p>
            </div>
          </div>
        </div>

      </div>
      <!-- Modal -->
      <div class="modal fade" id="requestItemInfoModal" tabindex="-1" role="dialog" aria-labelledby="requestItemInfoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Item Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row mb-3">
                <div class="col">
                  <a href="info.php">
                    <img src="img/man2.png" class="profile" alt="profile">
                      <span>NAME NAME NAME</span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-11 mx-auto">
                  <img src="img/item1.png" class="img-fluid rounded">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <p class="detail">
                    <span>Item Name</span><br>
                    <span>Quantity</span><br>
                    <span>Location</span><br>
                    <span>Last date</span><br>
                    <span>Purpose</span>
                  </p>
                </div>
              </div>

              <div id="report-div">
                <div class="row">
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="reportCheck1">
                      <label class="form-check-label" for="reportCheck1">
                        Illegal item
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="reportCheck2">
                      <label class="form-check-label" for="reportCheck2">
                        Prank
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="reportCheck3">
                      <label class="form-check-label" for="reportCheck3">
                        Wrong Information
                      </label>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="reportCheck4">
                      <label class="form-check-label" for="reportCheck4">
                        Others
                      </label>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="modal-footer d-flex justify-content-between">
              <div>
                <button type="button" class="btn btn-danger" id="report-btn" onclick="reportFunction()">Report</button>
              </div>
              <div>
                <button type="button" class="btn btn-secondary" id="close-btn" onclick="reset()" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" id="donate-btn">DONATE</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary req-btn fixed-bottom" data-toggle="modal" data-target="#requestButtonModal">
      REQ
    </button>

    <!-- Modal -->
    <div class="modal fade" id="requestButtonModal" tabindex="-1" role="dialog" aria-labelledby="requestButtonModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Please Fill in the Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form>
            <div class="modal-body">
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormName">Item name<span class="red"> *</span></label>
                <div class="col"><input type="text" class="form-control" id="FormName"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormImage">Item image<span class="red"> *</span></label>
                <div class="col"><input type="file" class="form-control-file" id="FormImage"></div>
              </div>
              <!-- <div class="form-group row pl-3">
                <label class="reqFormName" for="FormLocation">Location<span class="red"> *</span></label>
                <div class="col"><input type="text" class="form-control" id="FormLocation"></div>
              </div> -->
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormQuantity">Quantity</label>
                <div class="col"><input type="text" class="form-control" id="FormQuantity"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormDate">Last date<span class="red"> *</span></label>
                <div class="col"><input type="date" class="form-control" id="FormDate"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormTextArea">Purpose<span class="red"> *</span></label>
                <div class="col"><textarea class="form-control" id="FormTextArea" rows="3"></textarea></div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Done</button>
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
    
    <script type="text/javascript" src="js/report.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>
  </body>
</html>
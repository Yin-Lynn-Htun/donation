<?php
include 'config.php';
?>

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

        <?php
          $sql = "SELECT * FROM request WHERE RFinish=0 AND expired = 0";
          $result = $conn->query($sql);
          if($result ->num_rows > 0){
            while($row = mysqli_fetch_array($result)){
            

        
         echo'
        <div class="col-12 col-md-6 col-lg-4 mb-5 mx-auto requests" data-toggle="modal" data-target="#requestItemInfoModal" data-name="'.$row['ReqPerson'] .'" data-itemname="'.$row['RName'] .'"  data-quantity="'.$row['RQuantity'] .'" data-location="'.$row['RLocation'] .'" data-lastdate="'.$row['RDate'] .'" data-purpose="'.$row['RPurpose'] .'" data-rid="'.$row['RID'] .'" data-reqid="'.$row['ID'] .'" data-image="img/donate.jpg">';
        ?>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <img src="img/item1.png" class="req-img img-fluid">
            </div>
          </div>
          <div class="row">
            <div class="col d-flex justify-content-center">
              <p class="detail"><?php echo 'Item: '.$row['RName'] .'<br>
              Location:'.$row['RLocation'].' <br>
              Last Date:'.$row['RDate']; ?></p>
            </div>
          </div>
        </div>
        <?php 
        
        }
        }else{
          echo "no result";
        }
        ?>

      
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
                      <span id="name"></span>
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col-11 mx-auto">
                  <img id="myimage" class="img-fluid rounded">
                </div>
              </div>
              <div class="row mt-2">
                <div class="col">
                  <p class="detail">
                    Item Name : <span id="itemname"></span><br>
                    Quantity : <span id="quantity"></span><br>
                    Location : <span id="location"></span><br>
                    Last date : <span id="lastdate"></span><br>
                    Purpose : <span id="purpose"></span>
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
                <button type="button" class="btn btn-success" id="donate-btn" onclick="donate(<?php echo $_SESSION['uid']; ?>)">DONATE</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Button trigger modal -->
    <?php 
      if(isset($_SESSION["auth"])){
        echo'
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
          <form action="request.php" method="POST">
          <input type="hidden" name="uid" value="'.$_SESSION['uid'].'">
          <input type="hidden" name="uname" value="'.$_SESSION['uname'].'">
            <div class="modal-body">
              <div class="form-group row pl-3">

                <label class="reqFormName" for="FormName">Item name<span class="red"> *</span></label>
                <div class="col"><input type="text" class="form-control" id="FormName" name="RName"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormImage">Item image<span class="red"> *</span></label>
                <div class="col"><input type="file" class="form-control-file" id="FormImage" name="RPhoto"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormLocation">Location<span class="red"> *</span></label>
                <div class="col"><input type="text" class="form-control" id="FormLocation" name="RLocation"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormQuantity">Quantity</label>
                <div class="col"><input type="text" class="form-control" id="FormQuantity" name="RQuantity"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormDate">Last date<span class="red"> *</span></label>
                <div class="col"><input type="date" class="form-control" id="FormDate" name="RDate"></div>
              </div>
              <div class="form-group row pl-3">
                <label class="reqFormName" for="FormTextArea">Purpose<span class="red"> *</span></label>
                <div class="col"><textarea class="form-control" id="FormTextArea" rows="3" name="RPurpose"></textarea></div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Done">
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
    ';
  } 
  else{
    $_SESSION['previous'] = 'view.php';
     echo'
     <a href ="login.php" >
    <button type="button" class="btn btn-primary req-btn fixed-bottom" data-toggle="modal">
      REQ
    </button>
    </a>';
  }

  ?>
<input type="hidden" name="'.$.'">

    </main>
  <?php include "footer.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="js/report.js"></script>
    <script type="text/javascript" src="js/datepicker.js"></script>

    <script type="text/javascript">
    
        function setCookie(cname,cvalue,exdays) {
          var d = new Date();
          d.setTime(d.getTime() + (exdays*24*60*60*1000));
          var expires = "expires=" + d.toGMTString();
          document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
          var name = cname + "=";
          var decodedCookie = decodeURIComponent(document.cookie);
          var ca = decodedCookie.split(';');
          for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
              c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
              return c.substring(name.length, c.length);
            }
          }
          return "";
        }

        function checkCookie() {
          var user=getCookie("username");
          if (user != "") {
            alert("Welcome again " + user);
          } else {
             user = prompt("Please enter your name:","");
             if (user != "" && user != null) {
               setCookie("username", user, 30);
             }
          }
        }

        function donate(uid){
          var rid = getCookie("rid");
          var reqid = getCookie("reqid");
          window.location.replace("donate.php?ReqPersonID="+ reqid +"&DonatePersonID=" + uid +"&RID="+ rid+"")
        }

      $('#requestItemInfoModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var name = button.data('name')
        var itemname = button.data('itemname')
        var quantity = button.data('quantity')
        var location = button.data('location')
        var lastdate = button.data('lastdate')
        var purpose = button.data('purpose')
        var image = button.data('image')
        var reqid = button.data('reqid')
        var rid = button.data('rid')

        setCookie("reqid", reqid, 30);
        setCookie("rid", rid, 30);

        var modal = $(this)

        modal.find('.modal-body #name').text(name)
        modal.find('.modal-body #itemname').text(itemname)
        modal.find('.modal-body #quantity').text(quantity)
        modal.find('.modal-body #location').text(location)
        modal.find('.modal-body #lastdate').text(lastdate)
        modal.find('.modal-body #purpose').text(purpose)
        modal.find('.modal-body #myimage').attr('src' , image)
      })

    </script>


  </body>
</html>
<?php 
  include 'config.php';
  if (!isset($_SESSION['auth'])){
    $_SESSION['previous'] = 'myRequests.php';
    header("location:login.php");
  }
?>

<!-- <script type="text/javascript">location.reload();</script>
 --><!-- <?php 
$conn = new mysqli("localhost","root","","donation");

if($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}


?> -->


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
  <?php include "Time.php"; ?>
  <br><br>
    <main>
      <div class="row mt-5">
        <div class="col text-center">
          <h2 class="headline">MY REQUESTS</h2>
        </div>
      </div>
      <div class="row mt-5">
        
        <?php
        $sql = "SELECT * FROM request WHERE ReqPerson='".$username."'";  //add user id
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            
        ?>

        <div class="col-12 col-lg-4 d-flex justify-content-center mb-5">
          <div class="card">
            <div class="card-header text-right text-muted">
              <small>
                <?php $phpdate = strtotime($row["RTime"]);
                     $mysqldate = date( 'Y-m-d H:i:s',$phpdate);
                     echo time_elapsed_string($mysqldate);?>
              </small>
            </div>
            <div class="card-body">
              <div class="text-center mb-2">
                           
                <img src="img/item1.png" alt="item" class="myReq-img img-fluid">  
              </div>
              <p><?php echo 'Item Name:'.$row['RName'].'<br>
                Quantity:'.$row['RQuantity'].'<br>
                Locaiton:'.$row['RLocation'].'<br>
                Last Date:'.$row['RDate'].'<br>
                Purpose:'.$row['RPurpose']; ?></p>
            </div>
            <?php
            $sql2 = "SELECT * FROM donate WHERE RID = '".$row['RID']."'";
            $result2 = $conn->query($sql2);
            if($result2->num_rows > 0){
                  while($row2 = $result2->fetch_assoc()){
                
            ?>
            <div class="card-footer d-flex justify-content-between">
              <div class="my-auto">
                <a href="info.php?ID=<?php echo $row2['ID2']; ?>"><b>Donator Found!</b></a>
              </div>
              <div class="d-flex">
                <a href="RejectReceive.php?n=1&RID=<?php echo $row2['RID']; ?>"><button type="button" class="btn btn-danger mr-1">REJECT</button></a>
                <a href="ejectReceive.php?n=0&RID=<?php echo $row2['RID']; ?>"><button type="button" class="btn btn-success">RECEIVED!</button></a>
              </div>
            </div>
            <?php

                
              }
            
              }else{
            ?>

            <div class="card-footer text-right">
              <a href="delete.php?RID=<?php echo $row['RID']; ?>"><button type="button" class="btn btn-danger">DELETE</button></a>
            </div>
            <?php 
              }
             ?>
          </div>
        </div>

        <?php 
          }
        }else{
              echo "no result";
          }
        ?>

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

<!-- <?php 
$conn->close();
?> -->
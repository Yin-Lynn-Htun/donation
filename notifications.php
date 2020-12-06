<?php 
  include 'config.php';
  if (!isset($_SESSION['auth'])){
    $_SESSION['previous'] = 'notifications.php';
    header("location:login.php");
  }
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
    <title>Notifications</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time();?>">
  </head>
  <body>
  <?php include "navi.php"; ?>
  <br><br>
    <main>
      <div class="row mt-5">
        <div class="col text-center">
          <h2 class="headline">NOTIFICATIONS</h2>
        </div>
      </div>
      <div class="row mt-5">


      <?php

      $uid = $_SESSION['uid'];
      $sql = "SELECT * FROM `log` WHERE uid = $uid";
      $result = $conn->query($sql);
          if($result ->num_rows > 0){
            while($row = mysqli_fetch_array($result)){

        echo '
        <div class="col-10 mx-auto"> 
          <small>Date: '. $row['date'] .'</small>
          ';

          if ($row['type'] == 'expire'){
            $temp = $row['time'] + ' UTC';
            $time = date("g:i a", strtotime($temp));
            echo'
          <div class="alert alert-dark" role="alert">
            <small class="d-flex justify-content-end">Time: '. $time. '</small>
            Your request <a href="#" class="alert-link">'.$row['itemname'].'</a> has expired.
          </div>'
          ;
        }
        elseif ($row['type'] == 'donate') {
          echo'
          <div class="alert alert-success" role="alert">
            <small class="d-flex justify-content-end">Time: 12:00AM</small>
            <a href="#" class="alert-link">'.$row['donor'].'</a> donated <a href="#" class="alert-link">'.$row['itemname'].'</a> to you!
          </div>';
        }
        elseif($row['type'] == 'cancel'){
          echo'
          <div class="alert alert-danger" role="alert">
            <small class="d-flex justify-content-end">Time: 12:00AM</small>
            <a href="#" class="alert-link">'.$row['donor'].'</a> cancelled your donation.
          </div>
        ';
        }
        echo '</div>';
          
      }
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
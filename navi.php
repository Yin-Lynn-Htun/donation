<?php
  include 'config.php';
    if(isset($_SESSION["auth"])){
        $uid = $_SESSION["uid"];
        $imgSel = "SELECT u.imagename,u.username FROM user u where u.id = $uid";
        $result = mysqli_query($conn,$imgSel);
        $count = mysqli_num_rows($result);
        if($count>0){
            $row = mysqli_fetch_assoc($result);
            $imgName = $row["imagename"];
            $username = $row["username"];
          }
      }
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="profile.php">
      <?php 
      if(isset($_SESSION["auth"])){ 
        echo'
        <img src="img/'.$imgName.'" class="profile" alt="Profile"> </a>' .$username ;
      }
      else{
        echo'
        <img src="img/man.png" class="profile" alt="Profile"></a> Name' ;
      }

      ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="view.php">View</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="notifications.php">Notifications</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myRequests.php">My Requests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pendingDonations.php">Pending Donations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="previousDonations.php">Previous Donations</a>
        </li>
        <?php 
          if(isset($_SESSION["auth"])){
            echo'
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>'; 
        }
        else{
          echo'
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li> 
          ';
        }
        ?>
      </ul>
    </div>

  </nav>
<!-- For pending Donation -->


<?php
	$conn = new mysqli("localhost","root","","donation");
  
    if ($conn->connect_error) {
      
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "DELETE FROM donate WHERE RID='".$_GET["RID"]."'";

    $sqlRName = "SELECT r.RName FROM `request` r WHERE r.RID = '". $RID ."'";
    $result = $conn->query($sqlRName);
    if($result ->num_rows > 0){
        $row = mysqli_fetch_array($result)
        $rname = $row['RName'];
    }

    $sql2 = "INSERT INTO `log`(`itemname`, `uid`, `type`, `time`, `date`, `donor`) VALUES ($rname,$_GET["uid"],'cancel',date('H:i:s'),date('Y-m-d'),$_GET['uname'])";
    $conn->query($sql2);

    if($conn->query($sql) === TRUE){
        echo '<script type="text/javascript">alert("Deleted");window.history.back();location.reload();</script>';        
    }
    else {
    	echo '<script type="text/javascript">alert("error in delete");window.history.back();</script>';

    }
    $conn->close();
?>
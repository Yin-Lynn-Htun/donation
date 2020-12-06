<?php
	$conn = new mysqli("localhost","root","","donation");
  
    if ($conn->connect_error) {
      
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "UPDATE request SET RFinish=1 WHERE RID='".$_GET["RID"]."'";
    if($conn->query($sql) === TRUE){
        header("location:PreviousDonations.php");
    }
    else {
    	echo '<script type="text/javascript">alert("error");window.history.back();</script>';

    }
    $conn->close();
 ?>
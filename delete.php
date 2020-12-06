<?php
	$conn = new mysqli("localhost","root","","donation");
  
    if ($conn->connect_error) {
      
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "DELETE FROM request WHERE RID='".$_GET["RID"]."'";
    if($conn->query($sql) === TRUE){
        echo '<script type="text/javascript">alert("Deleted");window.history.back();location.reload();</script>';        
    }
    else {
    	echo '<script type="text/javascript">alert("error in delete");window.history.back();</script>';

    }
    $conn->close();
 ?>
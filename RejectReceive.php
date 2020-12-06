<?php
$conn = new mysqli("localhost","root","","donation");

if($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}

// Reject
if($_GET['n']){
	$sql = "DELETE FROM donate WHERE RID='".$_GET['RID']."'";
    if($conn->query($sql) === TRUE){
        echo '<script type="text/javascript">alert("Rejected");window.history.back();location.reload();</script>';        
    }
    else {
    	echo '<script type="text/javascript">alert("error in Reject");window.history.back();</script>';
    }
}

// Receive
else{
	$sql2 = "UPDATE request SET RFinish = '1' WHERE RID='".$_GET["RID"]."'";
	if($conn->query($sql2) === TRUE){
		 echo '<script type="text/javascript">alert("Received");window.history.back();location.reload();</script>';
	}else {
    	echo '<script type="text/javascript">alert("error in Receive");window.history.back();</script>';
    }
}



$conn->close();
?>
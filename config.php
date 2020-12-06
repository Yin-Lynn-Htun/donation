<?php
@ob_start();
if(session_status()!=PHP_SESSION_ACTIVE)
	session_start();
$conn = mysqli_connect("localhost","root","","donation");
    if ($conn->connect_error) {
        
        die("Connection failed: " . $conn->connect_error);
    }
?>
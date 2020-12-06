

<!-- From View -->

<?php
$conn = new mysqli("localhost","root","","donation");

	if($conn->connect_error){
	die("connection failed: ".$conn->connect_error);
	}

	$RName = $_POST["RName"];
	//$RPhoto = $_POST["RPhoto"];
	$RQuantity = $_POST['RQuantity'];
	$RDate = $_POST['RDate'];
	$RPurpose = $_POST['RPurpose'];
	$ID = $_POST['uid'];
	$ReqPerson = $_POST['uname'];
	$RLocation = $_POST['RLocation'];
	

	$sql = "INSERT INTO `request`(`ID`, `RName`, `RQuantity`, `RDate`, `RPurpose`, `RLocation`, `RPhoto`, `RFinish` , `ReqPerson`, `RTime`) VALUES ('$ID','$RName','$RQuantity','$RDate','$RPurpose','$RLocation',null,'0' , '$ReqPerson',now())";

	if($conn->query($sql) === TRUE) {
		echo '<script>alert("Success!")</script>';
		header("location:view.php");
	}else{
		echo '<script>alert("Fail!")</script>';
		//header("location:signUp.php");

	}


$conn->close();
?>
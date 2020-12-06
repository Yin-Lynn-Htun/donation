<?php
    $conn = mysqli_connect("localhost","root","","donation");
    if ($conn->connect_error) {
        
        die("Connection failed: " . $conn->connect_error);
    }

    $userName = $_POST["username"];
    $email = $_POST["email"];
    $phoneNo = $_POST["phoneNo"];
    $password = $_POST["password"];
    // $confirm = $_POST["confirm"];
    $location = $_POST["location"];

  	$imageName = $_FILES['photo']['name'];  
  	$tmp = $_FILES['photo']['tmp_name'];

  	echo "$imageName";
    echo "$userName";

  	move_uploaded_file($tmp, "img/$imageName");

  	$sql = "INSERT INTO `user`(`username`, `password`,`email`, `phoneNo`, `location`, `imagename`,  `createDate` ) VALUES ('$userName','$password','$email','$phoneNo','$location' , '$imageName' ,now())";

  	$result = mysqli_query($conn, $sql);
  	if($result == 0){
  		echo "error";
  	}
  	else
  		header("location:login.php")


?>
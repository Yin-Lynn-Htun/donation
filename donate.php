<?php
	include 'config.php';
    
    $ID = $_GET['ReqPersonID'];
    $ID2 = $_GET['DonatePersonID'];
    $RID = $_GET['RID'];
    $donor = $_SESSION['uname'];


    $sqlRName = "SELECT r.RName FROM `request` r WHERE r.RID = '". $RID ."'";
    $result = $conn->query($sqlRName);
    if($result ->num_rows > 0){
        $row = mysqli_fetch_array($result);
        $rname = $row['RName'];
    }

    $sql = "INSERT INTO `donate`(`ID`, `ID2`, `RID`) VALUES ($ID,$ID2,$RID)";

    $time = date('H:i:s');
    $date = date('Y-m-d');
    $sql2 = "INSERT INTO `log`(`itemname`, `uid`, `type`, `time`, `date`, `donor`) VALUES ('$rname',$ID,'donate','$time','$date','$donor')";

    if($conn->query($sql2) === TRUE) {
        echo '<script>alert("Success1!");</script>';
    }else{
        echo '<script>alert("Fail1!");</script>';
    }

    // $conn->query($sql2);

    if($conn->query($sql) === TRUE) {
        $sql3 = "UPDATE request SET RFinish=1 WHERE RID='".$_GET["RID"]."'";
        $conn->query($sql3);
        echo '<script>alert("Success2!");</script>';
        header("location:pendingDonations.php");
    }else{
        echo '<script>alert("Fail2!");</script>';
        //  header("location:signUp.php");

    }

    $conn->close();
 ?>
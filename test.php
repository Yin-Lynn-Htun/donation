<?php 
include "Time.php";
$conn = new mysqli("localhost","root","","donation");

if($conn->connect_error){
die("connection failed: ".$conn->connect_error);
}

$sql = "SELECT RTime FROM request WHERE RID=7"; //user id
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$phpdate = strtotime($row["RTime"]);
$mysqldate = date( 'Y-m-d H:i:s',$phpdate);
echo time_elapsed_string($mysqldate);

?>


<a href="donate.php?ReqPersonID=<?php echo $_COOKIE['reqid']; ?>&DonatePersonID=<?php echo $_SESSION['uid']; ?>&RID=<?php echo $_COOKIE['rid']; ?>"><button type="button" class="btn btn-success" id="donate-btn">DONATE</button></a>
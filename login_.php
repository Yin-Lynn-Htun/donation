<?php
    include 'config.php';

    $username = $_POST["username"];
    $password = $_POST["password"];


    $sql = "SELECT g.id , g.username FROM user g WHERE g.username = \"$username\" AND g.password = \"$password\"";

    $result = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["auth"] = "true";
        $_SESSION["uid"] = $row["id"];
        $_SESSION['uname'] = $row["username"];

        echo "string";
        $sql1 = "SELECT RName FROM request WHERE RDate < CURRENT_DATE() AND expired = 0";
        $result1 = $conn->query($sql1);
          if($result1 ->num_rows > 0){
            while($row1 = mysqli_fetch_array($result1)){
                $itemname = $row1['rname'];
                $time = date('H:i:s');
                $date = date('Y-m-d');
                $uid = $row["id"];
                echo $itemname;
                echo $time;
                echo $date;

                $sql2 = "INSERT INTO `log`(`itemname`, `uid`, `type`, `time`, `date`, `donor`) VALUES ('$itemname',$uid,'expire','$time','$date', 'null' )";
                $conn->query($sql2);
            }
        }

        $sql3 = "UPDATE request SET expired=1 WHERE RDate < CURRENT_DATE() AND expired = 0";
        $conn->query($sql3);


        echo $_SESSION['auth'];
        echo $_SESSION['uid'];
        if (isset($_SESSION['previous'])){
            echo $_SESSION['previous'];
            header("location:".$_SESSION['previous']);
        }
        else{
            header("location:index.php");
        }
        
    }
    else{
        echo "<script>alert('Username and password do not match')</script>";
       header("location: login.php");
    }
    
?>
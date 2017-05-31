<?php include("function.php");
    session_start();
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $participate=$_GET['participate'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $theTime=date("Y-m-d H:i:s");
        $sql="INSERT INTO activityapply(applyID,activityID,memberID,applyTime,participate) VALUES ('','{$_COOKIE['activityID']}','{$_SESSION['memberID']}','{$theTime}','{$participate}');";
        $result=$conn->query($sql);
        if($result){
            header("location:/activityForm.php");
        }                       
    }
    $conn->close();      
?>
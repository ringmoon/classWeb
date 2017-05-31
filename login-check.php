<script src="/js/function.js"></script>

<?php include("function.php");
session_start();
$Username=$_POST['username'];
$Password=$_POST['password'];

$conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
if($conn->connect_error){
    die($conn->connect_error);
}

$sql ="SELECT * FROM authority WHERE memberAccount='{$Username}' AND memberPassword='{$Password}';";

$result = $conn->query($sql);


if($result->num_rows==0){
    echo "<script>loginFail();</script> ";
}
$user=$result->fetch_assoc();

if (strcmp($user['memberAccount'],$Username)==0&&strcmp($user['memberPassword'],$Password)==0){
    $_SESSION['memberID']=$user['memberID'];
    echo "<script>loginSuccess();</script> ";
}else{
    echo "<script>loginFail();</script> ";
}
?>  


<?php include_once("function.php");
session_start();

if(!isset($_SESSION['memberID'])){
    $_SESSION['memberID']=0;   

}

$action=$_COOKIE['action'];

switch ($action){
    case "createActivity":
        createActivity();     
        break;
    case "deleteActivity":
        deleteActivity();     
        break;
    case "updateActivity":
        updateActivity();
        break;
    case "deleteActivityApply":
        deleteActivityApply();
        break;
    case "participateActivity":
        participateActivity();
        break;
    case "insertMember":
        insertMember($_POST['name'],$_POST['account'],$_POST['password']);
        break;
    case "deleteMemberData":
        deleteMemberData();
        break;
    case "updateMember":
        updateMember($_POST['name'],$_POST['account'],$_POST['password']);
    case "memberEdit":
        memberEdit($_POST['memberAccount'],$_POST['memberPassword'],$_POST['name'],$_POST['sex'],$_POST['birthday'],$_POST['constellation'],$_POST['email'],$_POST['phone'],$_POST['skill'],$_POST['interest']);
    default:
        break;
}
?>
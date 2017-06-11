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
         break;
    case "memberEdit":
        memberEdit($_POST['memberAccount'],$_POST['memberPassword'],$_POST['name'],$_POST['sex'],$_POST['birthday'],$_POST['constellation'],$_POST['email'],$_POST['phone'],$_POST['skill'],$_POST['interest']);
        break;
    case "createPhotoDir":
        createPhotoDir($_POST['dirName']);
         break;
    case "createPhoto":
        createPhoto($_POST['imageName']);
         break;
    case "createVideo":
        createVideo($_POST['videoName'],$_POST['url']);
         break;
    case "createVideoDir":
        createVideoDir($_POST['dirName']);
        break;
    case "createAnnouncement": 
        createAnnouncement();
        break;
    case "updateAnnouncement":
        updateAnnouncement();
        break;
    case "deleteAnnouncement":
        deleteAnnouncement();     
        break;
    case "cancelUpdate":
        echo "<script>history.go(-2)</script>";
        break;
    case "createDiscuss":
        createDiscuss();     
        break;
    case "createDiscussMessage":
        createDiscussmessage();
        break;
    default:
        break;
}
setcookie("action","");
?>
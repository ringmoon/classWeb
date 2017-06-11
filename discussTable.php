<?php include("function.php");
session_start();
    if(!isset($_SESSION['memberID'])){
        $_SESSION['memberID']=0;   
    }
echo displayDiscussTable().displayDiscussPageNumbers();
?>
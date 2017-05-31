<?php  include("function.php");
    session_start();
     if(!isset($_SESSION['memberID'])){
        $_SESSION['memberID']=0;
     }   
     if($_SESSION['memberID']==0){
          header("location:/index.php"); 
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>台科大104級資訊管理系</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <link rel=stylesheet type="text/css" href="/css/HomepageStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src=/js/function.js></script>
</head>
<body>
    <div id="divheader">
        <nav class="navbar navbar-default">
            <div id="navb" class="container">
                <a href='index.php' ><p class="navbar-text nav navbar-left">104級資管系班網</p></a>
                <ul class="navbar-nav nav navbar-right">
                    <?php
                       locginCheck();                   
                    ?>        
                </ul>
            </div>
        </nav>
    </div>
    <div id="divcontent" class="container" >      
        <div class="row">
             <div class="col-md-3">
                 <div id="divleft">
                   <div id="menu">
                        <p>主選單</p>
                    </div>
                    <ul>   
                        <li>
                            <p><a href="index.php">學校公告</a></p>
                        </li>
                         <?php
                           leftMenuAuthorityCheck1();
                        ?> 
                        <li>
                            <p><a href="classIntroduction.php">班級介紹</a></p>
                        </li>
                        <?php
                           leftMenuAuthorityCheck2();
                        ?>                   
                        <li>
                            <p><a href="outsideLink.php">站外連結</a></p>
                        </li>
                        <?php
                           leftMenuAuthorityCheck3();
                        ?>   
                    </ul>
                 </div>
                 <div id="divleft">
                    <div id="menu">
                        <p>本月壽星</p>
                    </div>                 
                    <div id="theMonthBirthdayID">                          
                          <script>changeTheMonthBirthdayList(-1);</script>  
                    </div>            
                </div>               
             </div>
              <div class="col-md-9">    
                 <div id="divright">
                    <div id="menu">
                     <p style="text-align:center;font-size:200%;color:black;font-weight: bold;font-family: '微軟正黑體';">活動內容</p>
                    </div>  
                   <?php
                        displayActivityContent();           
                   ?> 
                </div>  
                <div id="divright">
                    <div id="menu">
                     <p style="text-align:center;font-size:200%;color:black;font-weight: bold;font-family: '微軟正黑體';">參與名單</p>
                    </div>  
                    
                    <div style="margin-left:20px;margin-right:20px">
                  <?php
                        insideActivity();
                  ?>
                </div>   
             </div>    
        </div>    
    </div></div>
    <div id="footer">
        <p> © Copyright Group5</p>
    </div>
    
</body>
</html>
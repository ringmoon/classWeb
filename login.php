<?php  include("function.php");
    session_start();
    if(!isset($_SESSION['memberID'])){
        $_SESSION['memberID']=0;   
    }
    if(($_SESSION['memberID']>0)){
        header("location:/index.php");
        exit();
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
                <div>
                    <br/>
                    <h1>登入</h1>
                    </br>
                </div>
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2">
                        <div class="panel">                                             
                            <div class="panel-body">
                                <br><br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form name="loginForm" id="loginForm" action="login-check.php" method="post" role="form">
                                            <div class="form-group">
                                                <input maxlength=9 type="text" name="username" id="username"  class="form-control" placeholder="Username">
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <input maxlength=12 onKeyPress="enterInPassword()" type="password" name="password" id="password" class="form-control" placeholder="Password">
                                            </div>         
                                            <br>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input onClick="loginCheck()" type="button" name="login-submit" id="login-submit"  class="form-control" value="登入">
                                                    </div>
                                                </div>
                                            </div>             
                                        </form>                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
             </div>  </div>    
        </div>    
    </div>
    <div id="footer">
        <p> © Copyright Group5</p>
    </div>
    
</body>
</html>
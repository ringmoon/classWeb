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
    <link rel=stylesheet type="text/css" href="/css/slideshowStyle.css">
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
                 <br><br>
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
                     <p style="text-align:center;font-size:200%;color:black;font-weight: bold;font-family: '微軟正黑體';">討論區</p>
                    </div>

                    <div style="margin-left:20px;margin-right:20px">

                    <div id="discussTable">
                        <script>goDiscuss(1)</script>
                     
                    </div>
                  
                </div>            
                </div>
                
                 <div id="divright" style="margin-top:5px;" >
                    <div id="menu">
                        <p style="text-align:center;font-size:200%;color:black;font-weight: bold;font-family: '微軟正黑體';">榮譽榜</p>
                    </div> 
                    <br>
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/honor/fourGear.jpg" style="width:600px;height:420px;">
                            <p style="text-align:center"><strong style="color:red">恭喜</strong><b style="color:blue">蒙奇D魯夫</b>同學獲得健美先生比賽冠軍</p>
                            <br><br>
                        </div>
                        <div class="item">
                            <img src="img/honor/dunkChampion.jpg" style="width:600px;height:420px;">
                             <p style="text-align:center"><strong style="color:red">恭喜</strong><b style="color:blue">櫻木花道</b>同學獲得灌籃比賽冠軍</p>
                             <br><br>
                        </div>
                        <div class="item">
                            <img src="img/honor/boast.jpg" style="width:600px;height:420px;">
                            <p style="text-align:center"><strong style="color:red">恭喜</strong><b style="color:blue">越前龍馬</b>同學獲得裝逼比賽冠軍</p>
                            <br><br>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


                </div>     
             </div>    

             
                
                   
             </div>    
        </div>    
    </div>
    <div id="footer">
        <p> © Copyright Group5</p>
    </div>
    
</body>
</html>
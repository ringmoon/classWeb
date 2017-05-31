<?php  include("function.php");
    session_start();
     if(!isset($_SESSION['memberID'])){
        $_SESSION['memberID']=0;   
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
    <style>
        #divright table th {        
            text-align:center;
            background-color: 	#FFA488;
            border: 1px solid 	#FF0000;
            padding: 10px; 
            font-size:130%;
            font-weight:bold;
        }
        #divright table td {        
            text-align:center;
            background-color:#FFC8B4;
            border: 1px solid 	#FF0000;
            padding: 10px; 
            font-size:130%;
            font-weight:bold;
        }
    </style>
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
                     <p style="text-align:center;font-size:200%;color:black;font-weight: bold;font-family: '微軟正黑體';">學期必修</p>
                    </div>
               
                <div style="margin-left:40px;margin-right:40px">
                </br>
                    <h2 style='text-align:center;color:	#E63F00'>第一學年</h2>
                   <table>
                        
                         <tr ><th style='width:50%'>第一學期</th><th style='width:50%'>第二學期</th></tr>
                        <tr>
                            <td>經濟學<br/>管理學<br/>微積分(上)<br/>計算機概論<br/>計算機概論實習<br/></td>
                            <td>職業倫理(0)<br/>會計學<br/>微積分(下)<br/>C程式設計<br/>C程式設計實習</td>
                        </tr>
                   </table><br/> <br/>                     
                    <h2 style='text-align:center;color:	#E63F00'>第二學年</h2> 
                    <table>
                        
                        <tr ><th style='width:50%'>第一學期</th><th style='width:50%'>第二學期</th></tr>
                        <tr>
                            <td>統計學(I)<br/>資料結構<br/>管理數學<br/></td>
                            <td>統計學(II)<br/>程式語言<br/>系統分析與設計</td>
                        </tr>
                   </table> 
                    <br/>     <br/>                
                    <h2 style='text-align:center;color:	#E63F00'>第三學年</h2> 
                     <table>
                        
                        <tr ><th style='width:50%'>第一學期</th><th style='width:50%'>第二學期</th></tr>
                        <tr>
                            <td>商事法<br/>資料庫管理系統<br/>資訊網路<br/></td>
                            <td>作業系統<br/>管理資訊系統<br/>作業研究<br/>實務專題</td>
                        </tr>
                   </table> 
                    <br/>     <br/>                 
                    <h2 style='text-align:center;color:	#E63F00'>第四學年</h2>           
                    <table>
                        
                        <tr ><th style='width:50%'>第一學期</th><th style='width:50%'>第二學期</th></tr>
                        <tr>
                            <td>實務專題</td>
                            <td>無</td>
                        </tr>
                   </table> <br/> <br/> <br/> <br/> <br/> <br/> 
              
                   
                    
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
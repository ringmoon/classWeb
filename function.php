<?php

$serverName="localhost";
$username="root";
$password="";
$dbName="class";
function locginCheck(){
     if($_SESSION['memberID']!=0){
        $id = $_SESSION['memberID'];
        $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
        if($conn){                           
            mysqli_set_charset($conn,"utf8");
            $sql="SELECT * FROM member WHERE memberID={$id} ; ";
            $result = $conn->query($sql);
            if($result->num_rows>0){
                $member =$result->fetch_assoc();  
                if($id==1){
                    echo "<li title='權限設定' style='font-size:200%;cursor: pointer;'><a onClick='goAuthorityDataTable(1)' href='authoritySet.php'><img src='{$member['picture']}' width=50px height=50px>&nbsp;&nbsp;{$member['name']}</img></a></li>";
                }else{
                    echo "<li title='個人資料' style='font-size:200%;cursor: pointer;'><a onClick='goMemberData({$member['memberID']})'><img src='{$member['picture']}' width=50px height=50px>&nbsp;&nbsp;{$member['name']}</img></a></li>";
                }                                  
                echo "<li style='font-size:200%;padding-top: 4.5%;'><a   onClick='logout()' href='logout.php'>登出</a></li>";
            }
        }
        $conn->close();
    }
    else{
        echo "<li style='font-size:200%;'><a href='login.php'><img src='img/member/picture/0.jpg' width=50px height=50px></img></a></li>";                 
        echo "<li style='font-size:200%;padding-top: 10%;'><a href='login.php'>登入</a></li>";
    }                     
}

function leftMenuAuthorityCheck1(){
    if($_SESSION['memberID']!=0){
        echo " <li><p><a onClick='goActivityNews(1)' href='activityNews.php'>活動消息</a></p></li>";
    }
}

function leftMenuAuthorityCheck2(){
    if($_SESSION['memberID']!=0){
        echo " <li><p><a href='discuss.php'>討論區</a></p></li>";
        echo "<li><p><a href='memory.php'>回憶剪影</a></p></li>";
        echo "<li><p><a href='obligatory.php'>學期必修</a></p></li>";
    }
}

function leftMenuAuthorityCheck3(){
    if($_SESSION['memberID']!=0){
        echo " <li><p><a onclick='displayFutureActivityCalendar(1);displayExpireActivityCalendar(1)' href='calendar.php'>活動行事曆</a></p></li>";    
    }
}
function theMonthBirthday(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $nowMonth=date('m');
    $page=$_COOKIE['theMonthBirthdayPage']!=-1?$_COOKIE['theMonthBirthdayPage']:1;
    if($conn){
        $num=0;
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM member;";
        $result=$conn->query($sql);
        if($result->num_rows>0){      
            while($member=$result->fetch_assoc()){
                if (substr($member['birthday'],5,2)==$nowMonth){
                    $num++;
                    if($num>($page-1)*2&&$num<=($page*2)){
                        $month=substr($member['birthday'],5,2);
                        $day=substr($member['birthday'],8,2);
                        echo "<div style='text-align:center;font-size:120%;padding-bottom:0px;'><p>{$month}月{$day}日</p>";  
                        echo "<img src={$member['picture']} width=200px height=120px></img>"; 
                        echo "<p>{$member['name']}</p><hr></div>";              
                    }                             
                }                       
            }
           echo "<div  style='font-size:120%;display:inline'>";
           echo "<div style='text-align:center;'>";
            for ($i=1;$i<=($num+1)/2;$i++){
                 echo " <button onClick='changeTheMonthBirthdayList({$i})' >{$i}</button>";             
            }    
            echo "</div></div>";      
        } 
    }
    $conn->close();
}

function displayActivityTable(){
    if($_SESSION['memberID']==1) echo "<div style='text-align:right;margin-right:5px;'><button class='btn btn-lg  btn-primary text-center' onClick='goActivityCreateForm()'>新增活動</button></div><p style='font-size:0px'><br></p>";
    else echo "<br><br>";
    echo "<table class='roundedCorners'><tr><th>主題</th><th style='width:60px'>種類</th><th style='width:180px'>發布日期</th></tr>";
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $array=[];
    $activityPage=$_COOKIE['activityPage']!=-1?$_COOKIE['activityPage']:1;
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM activity;";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($activity=$result->fetch_assoc()){
                 $array[]=$activity;                                                
            }
        }
        for($i=$result->num_rows-1-($activityPage-1)*7;$i>=0&&$i>=($result->num_rows-($activityPage-1)*7-7);$i--){                            
            echo "<tr><td><a onClick='goActivityForm({$array[$i]['activityID']})' href='activityForm.php'>{$array[$i]['title']}</a></td><td style='font-size:120%'> &nbsp;{$array[$i]['activityclass']}</td><td style='font-size:120%'>{$array[$i]['releaseTime']}</td></tr>";         
        }     
    }    
        echo "</table> ";
        $conn->close();      
    }

function displayActivityPageNumbers(){
        $activityPage=$_COOKIE['activityPage']!=-1?$_COOKIE['activityPage']:1;
        $lastPage=$activityPage-1>0? $activityPage-1:1;    
        echo " <div id='activityPage'>"             ;
        echo "<div class='text-center'><ul class='pagination'>";
        echo "<li><a style='cursor: pointer;'onClick='goActivityNews({$lastPage})'>&laquo;</a></li>";
        $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);    
        if($conn){
            mysqli_set_charset($conn,"utf8");
            $sql="SELECT * FROM activity;";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                for($i=1;$i<=(($result->num_rows-1)/7+1);$i++){
                    $page="activityPage".$i;
                    $func="goActivityNews(".$i.")";
                    if ($activityPage==$i)                              {
                        echo "<li id='{$page}' class='active'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }else{
                        echo "<li id='{$page}'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }                              
                }
                $nextPage=$activityPage+1>(($result->num_rows-1)/7+1)? $activityPage:$activityPage+1;
                echo "<li><a style='cursor: pointer;' onClick='goActivityNews({$nextPage})'>&raquo;</a></li>";
                echo "</ul>";
        }          
    }
    echo "</div>";
    $conn->close();
}

function displayActivityContent(){
    $activityID=$_COOKIE['activityID'];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM activity WHERE activityID= '{$activityID}';";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            $activity=$result->fetch_assoc();
            echo "<br><h4>{$activity['title']}</h4><br>";
            if ($_SESSION['memberID']==1){
                echo "<div style='text-align:right;margin-right:20px'><div style='display:inline'><button onClick='goActivityUpdateForm()' class='btn btn-lg  btn-success text-center' >修改</button>";
                echo "&nbsp;<button onClick='deleteActivity()' class='btn btn-lg  btn-danger text-center' >刪除</button></div></div>";
            }
            echo "<div style='margin-left:20px;margin-right:20px'><pre>{$activity['content']}</br><div><p style='text-align:right;font-size:80%'>開始時間：{$activity['startTime']}</p><p style='text-align:right;font-size:80%'>結束時間：{$activity['endTime']}</p></div></pre>";
            echo "<div><a href='' onclick='history.go(-1)'>回上一頁</a>";
            echo "</div><br><br>";
            if($activity['url']!=null){
                echo "<a href='{$activity['url']}'>報名網址</a><br>";
            }else{
                $sql="SELECT * FROM activityapply WHERE memberID= '{$_SESSION['memberID']}' AND activityID='{$_COOKIE['activityID']}';";
                $result=$conn->query($sql);
                if ($result->num_rows>0){
                    $apply=$result->fetch_assoc();
                    if($apply['participate']=='y'){
                        echo "<p>已參加</p>"; 
                    }else{
                        echo "<div style='display:inline'><p>不參加 <a style='color:red;cursor: pointer;' onClick='participateActivity()'>回心轉意!?</a></p></div>";
                    }                   
                }else{
                     echo "<form action='activityApply.php' method='get' name='applyForm'><input type='radio' name='participate' value='y'>參加&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='radio' name='participate' value='n'>不參加&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input onClick='post()' type='button' value=' 提交 '></form>";
                }              
                $sql="SELECT * FROM activityapply WHERE participate= 'y' AND activityID='{$_COOKIE['activityID']}';";
                $result=$conn->query($sql);
                echo "<p>目前參加人數 : {$result->num_rows}  人</p>";
            }    
            echo "</div>";
        }                       
    }
    $conn->close();      
}

function displayActivityJoinTable(){
    echo "<br><br><table class='roundedCorners'>";
    echo "<tr><th>參與人</th><th>回覆時間</th><th style='width:70px'>動作</th></tr>";
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $array=[];
    $activityJoinPage=$_COOKIE['activityJoinPage']!=-1?$_COOKIE['activityJoinPage']:1;
    $activityID=$_COOKIE['activityID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM activityapply WHERE activityID= {$activityID} AND participate='y';";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($activity=$result->fetch_assoc()){
                 $array[]=$activity;                                                
            }
        }
        $nowMemberID=$_SESSION['memberID'];
        for($i=$result->num_rows-1-($activityJoinPage-1)*7;$i>=0&&$i>=($result->num_rows-($activityJoinPage-1)*7-7);$i--){                            
            $sql="SELECT * FROM member WHERE memberID= {$array[$i]['memberID']};";
            $result=$conn->query($sql);
            $member=$result->fetch_assoc();
            if($member['memberID']==$nowMemberID||$nowMemberID==1){
                echo "<tr><td>{$member['name']}<td>{$array[$i]['applyTime']}</td><td><button onClick='deleteActivityApply({$array[$i]['applyID']})'>刪除</button></td></tr>";  
            } else{
                echo "<tr><td>{$member['name']}<td>{$array[$i]['applyTime']}</td><td>無</td></tr>";  
            }    
        }           
    }       
    echo "</table><br>";
    $conn->close();
}

 function displayActivityJoinPageNumbers(){
        $activityID=$_COOKIE['activityID'];
        $activityJoinPage=$_COOKIE['activityJoinPage']!=-1?$_COOKIE['activityJoinPage']:1;
        $lastPage=$activityJoinPage-1>0? $activityJoinPage-1:1;   
        $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
        if($conn){
            mysqli_set_charset($conn,"utf8");
            $sql="SELECT * FROM activityapply WHERE activityID={$activityID};";
            $result=$conn->query($sql);
            echo "<div class='text-center'><ul class='pagination'>";
            echo "<li><a style='cursor: pointer;'onClick='goActivityJoinTable({$lastPage})'>&laquo;</a></li>";
            if($result->num_rows>0){
                for($i=1;$i<=(($result->num_rows-1)/7+1);$i++){
                    $page="activityJoinPage".$i;
                    $func="goActivityJoinTable(".$i.")";
                    if ($activityJoinPage==$i)                              {
                        echo "<li id='{$page}' class='active'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }else{
                        echo "<li id='{$page}'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }                              
                }
                $nextPage=$activityJoinPage+1>(($result->num_rows-1)/7+1)? $activityJoinPage:$activityJoinPage+1;
                echo "<li><a style='cursor: pointer;' onClick='goActivityJoinTable({$nextPage})'>&raquo;</a></li>";
                echo "</ul>";
        }          
    }
    echo "</div>";
    $conn->close();
}

function insideActivity(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $activityID=$_COOKIE['activityID'];
    if($conn){
            mysqli_set_charset($conn,"utf8");
            $sql="SELECT * FROM activity WHERE activityID={$activityID};";
            $result=$conn->query($sql);
            $activity=$result->fetch_assoc();
            if ($activity['url']==""){
                 echo "<div id='activityJoinTable'><script> goActivityJoinTable(1);</script></div>";
            }
    }  
    $conn->close();
}

function createActivity(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $title=$_GET['title'];
    $class=$_GET['class'];
    $startTime=$_GET['startTime'];
    $endTime=$_GET['endTime'];
    $content=$_GET['content'];
    $url=$_GET['url'];
    $releaseTime=date("Y-m-d H:i:s");
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="INSERT INTO activity(title,activityclass,content,startTime,endTime,releaseTime,url) VALUES ('{$title}','{$class}','{$content}','{$startTime}','{$endTime}','{$releaseTime}','{$url}');";
        $result=$conn->query($sql);
        if ($result){
             echo "<script>alert('新增活動成功');window.location = '/activityNews.php';</script>";
        }
    }  
    $conn->close();
}

function deleteActivity(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $activityID=$_COOKIE['activityID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="DELETE FROM activity WHERE activityID={$activityID};";
        $result=$conn->query($sql);
        if ($conn->affected_rows>0){
            echo "<script>alert('刪除活動成功');window.location = '/activityNews.php';</script>";
        }
    }
    $conn->close();
}

function displayUpdateActionForm(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $activityID=$_COOKIE['activityID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM activity WHERE activityID={$activityID};";
        $result=$conn->query($sql);
        $activity=$result->fetch_assoc();
        $endt=explode(" ",$activity['endTime']);
        $startt=explode(" ",$activity['startTime']);
        echo "<div class='row'><div class='col-md-8'><label for='title' >活動標題： </label>";
        echo " <input required type='text' name='title' size=22 value='{$activity['title']}'><br><br> </div>";
        echo "<div class='col-md-4'><label for='class'>活動種類：</label><select name='class' ><option value='學校'>學校</option><option value='班級'>班級</option></select><br><br></div> </div> ";
        echo "<div class='row'> <div class='col-md-6'> <label for='startTime'>活動開始時間：</label><input required type='datetime-local' name='startTime' value='{$startt[0]}T{$startt[1]}'><br><br> </div>";
        echo "<div class='col-md-6'> <label for='EndTime'> 活動結束時間：</label><input required type='datetime-local' name='endTime' value='{$endt[0]}T{$endt[1]}'/><br><br></div>  </div> ";
        echo "<div class='row'><div class='col-md-12'><label for='content'>活動內容描述：</label> <textarea required  type='text' name='content' rows='6' cols='53'  Wrap='Soft'>{$activity['content']}</textarea><label for='url'>活動連結網址：</label>";
        echo "<div class='display:inline'><input type='url' size=32  name='url' value='{$activity['url']}' >&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-lg  btn-primary text-center'  type='submit' name='submit' onClick='updateActivity()'>修改活動</button>&nbsp;&nbsp;<button class='btn btn-lg  btn-warning text-center''  type='reset' name='reset'>重設</button> </div> </div></div></form>";      
    }
    $conn->close();
}

function updateActivity(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $title=$_GET['title'];
    $class=$_GET['class'];
    $startTime=$_GET['startTime'];
    $endTime=$_GET['endTime'];
    $content=$_GET['content'];
    $url=$_GET['url'];
    $releaseTime=date("Y-m-d H:i:s");
    $activityID=$_COOKIE['activityID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="UPDATE activity SET title='{$title}',activityclass='{$class}',startTime='{$startTime}',endTime='{$endTime}',content='{$content}',releaseTime='{$releaseTime}',url='{$url}' WHERE activityID='{$activityID}'";
        $result=$conn->query($sql);
        if ($conn->affected_rows>0){
             echo "<script>alert('修改活動成功');window.location = '/activityForm.php';</script>";
        }
    }  
    $conn->close();
}

function deleteActivityApply(){
    $applyID=$_COOKIE['ActivityApplyID'];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="DELETE FROM activityapply WHERE applyID={$applyID};";
        $result=$conn->query($sql);
        if ($conn->affected_rows>0){
             echo "<script>alert('刪除活動回覆成功!');window.location='/activityForm.php';</script>";
        }
    }
    $conn->close();
}

function participateActivity(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $participate="y";
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $theTime=date("Y-m-d H:i:s");
        $sql="UPDATE activityapply SET applyTime='{$theTime}',participate='{$participate}' WHERE memberID='{$_SESSION['memberID']}' AND activityID='{$_COOKIE['activityID']}';";
        $result=$conn->query($sql);
        if($result){
            echo "<script>alert('改變回覆完成');window.location='/activityForm.php';</script>";
        }                       
    }
    $conn->close();      
}

function displayAuthorityDataTable(){
    if($_SESSION['memberID']==1) echo "<div style='text-align:right;margin-right:5px;'><button class='btn btn-lg  btn-primary text-center' onClick='goMemberInsertForm()'>新增會員</button></div><p style='font-size:0px'><br></p>";
    else echo "<br><br>";
    echo "<table class='roundedCorners'><tr><th style='width:60px;text-align:center;'> ID </th><th style='width:150px;'>會員姓名</th><th>會員帳號</th><th>會員密碼</th><th style='width:200px;'>動作</th></tr>";
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $array=[];
    $authorityDataPage=$_COOKIE['authorityDataPage']!=-1?$_COOKIE['authorityDataPage']:1;
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM authority WHERE memberID > 1;";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($data=$result->fetch_assoc()){
                 $array[]=$data;                                                
            }
        }
        $count=$result->num_rows;
        for($i=7*($authorityDataPage-1);$i<$count&&$i<7*$authorityDataPage;$i++){                        
            $sql="SELECT * FROM member WHERE memberID = {$array[$i]['memberID']};";
            $result=$conn->query($sql);
            $member=$result->fetch_assoc();
            echo "<tr><td style='text-align:center;'>{$array[$i]['memberID']}</td><td style='font-size:120%'> &nbsp;{$member['name']}</td><td style='font-size:120%'>{$array[$i]['memberAccount']}</td><td style='font-size:120%'>{$array[$i]['memberPassword']}</td>
            <td style='font-size:120%'><button class='btn btn-default btn-primary' onClick='goMemberData({$array[$i]['memberID']})'>查看</button>
            <button class='btn btn-default btn-success' onClick='goMemberUpdateForm({$array[$i]['memberID']})'>修改</button> <button class='btn btn-default btn-danger' onClick='deleteMemberData({$array[$i]['memberID']})'>刪除</button></td>
            </tr>";         
        }     
    }    
        echo "</table> ";
        $conn->close();      
    }

function displayAuthorityDataPageNumbers(){
        $authorityDataPage=$_COOKIE['authorityDataPage']!=-1?$_COOKIE['authorityDataPage']:1;
        $lastPage=$authorityDataPage-1>0? $authorityDataPage-1:1;    
        echo " <div id='authorityDataPage'>"             ;
        echo "<div class='text-center'><ul class='pagination'>";
        echo "<li><a style='cursor: pointer;'onClick='goAuthorityDataTable({$lastPage})'>&laquo;</a></li>";
        $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);    
        if($conn){
            mysqli_set_charset($conn,"utf8");
            $sql="SELECT * FROM authority WHERE memberID > 1;";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                for($i=1;$i<=(($result->num_rows-1)/7+1);$i++){
                    $page="authorityDataPage".$i;
                    $func="goAuthorityDataTable(".$i.")";
                    if ($authorityDataPage==$i)                              {
                        echo "<li id='{$page}' class='active'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }else{
                        echo "<li id='{$page}'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }                              
                }
                $nextPage=$authorityDataPage+1>(($result->num_rows-1)/7+1)? $authorityDataPage:$authorityDataPage+1;
                echo "<li><a style='cursor: pointer;' onClick='goAuthorityDataTable({$nextPage})'>&raquo;</a></li>";
                echo "</ul>";
        }          
    }
    echo "</div>";
    $conn->close();
}

function insertMember($name,$account,$password){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);    
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="INSERT INTO authority(memberID,authorityIdentity,memberAccount,memberPassword) VALUES ('','member','{$account}','{$password}');";
        $result1=$conn->query($sql);
        $array=[];
        $sql="SELECT * FROM authority;";
        $result2=$conn->query($sql);
        if($result2->num_rows>0){
            while($data=$result2->fetch_assoc()){
                 $array[]=$data;                                                
            }
        }
        $sql="INSERT INTO member(memberID,name,sex,picture,birthday,constellation,skill,interest) VALUES ('{$array[$result2->num_rows-1]['memberID']}','{$name}','','img/member/picture/0.jpg','','','','');";
        $result3=$conn->query($sql);
        if ($result1&&$result3){
             echo "<script>alert('新增會員成功');window.location = '/authoritySet.php';</script>";
        }else{
            echo "<script>alert('新增會員失敗! 帳號已存在!');window.location = '/memberInsertForm.php';</script>";
        }
    }  
    $conn->close();
}

function deleteMemberData(){
    $memberDataID=$_COOKIE['memberDataID'];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="DELETE FROM authority WHERE memberID = {$memberDataID}";
        $result=$conn->query($sql);
        if ($conn->affected_rows>0){
             echo "<script>alert('刪除會員成功!');window.location='/authoritySet.php';</script>";
        }
    }
    $conn->close();
}

function displayMemberAuthorityData(){
    $id = $_COOKIE['memberDataID'];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM authority WHERE memberID = {$id}";
        $result1=$conn->query($sql);
        $sql="SELECT name FROM member WHERE memberID = {$id}";
        $result2=$conn->query($sql);
        if ($result1->num_rows>0&&$result2->num_rows>0){
            $member=$result1->fetch_assoc();
            $name =$result2->fetch_assoc();
            echo "<label for='name'>會員姓名：</label>";
            echo "<input value='{$name['name']}' maxlength=20 required type='text' size=20 placeholder='請填寫會員姓名' name='name' /><br/><br/><br/>";
            echo "<label for='account'>會員帳號：</label>";
            echo "<input value='{$member['memberAccount']}' maxlength=9 required type='text' size=20 placeholder='請填寫會員帳號' name='account' /><br/><br/><br/>";
            echo "<label for='password'>會員密碼：</label>";
            echo "<input value='{$member['memberPassword']}' maxlength=12 required type='text' size=20 placeholder='請填寫會員密碼' name='password' /><br/><br/><br/>";
        }     
    }
    $conn->close();
}

function updateMember($name,$account,$password){
    $id = $_COOKIE['memberDataID'];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="UPDATE authority SET memberAccount='{$account}',memberPassword='{$password}' WHERE memberID={$id};";
        $result1=$conn->query($sql);
        $c1=$conn->affected_rows;
        $sql="UPDATE member SET name='{$name}' WHERE memberID={$id};";
        $result2=$conn->query($sql);
        $c2=$conn->affected_rows;
        if ($c1>0||$c2>0){
            echo "<script>alert('會員資料修改成功!');window.location='/authoritySet.php';</script>";
        }else{
            echo "<script>alert('尚未修改會員資料內容!');window.location='/memberUpdateForm.php';</script>";
        }    
    }
    $conn->close();
}

function displayMemberData(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $id = $_COOKIE['memberDataID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM authority WHERE memberID={$id};";
        $result=$conn->query($sql);
        $memberAuthority=$result->fetch_assoc();
        $sql="SELECT * FROM member WHERE memberID={$id};";
        $result=$conn->query($sql);
        $member=$result->fetch_assoc();
        $interest=$member['interest'];
        $interest_count=0;
        for ($i=0;$i<strlen($interest);$i++){
            if($interest[$i]>0){
                $interest_count++;
            }
        }
        $interest_count=$interest_count>6? $interest_count:6;
        $skill=$member['skill'];
        $skill_count=0;
        for ($i=0;$i<strlen($skill);$i++){
            if($skill[$i]>0){
                $skill_count++;
            }
        }
        $skill_count=$skill_count>6? $skill_count:6;
        echo "<form name='memberDataForm' action='#' method='post'>";
        echo "<div class='row'><div class='col-md-6'>";
        if ($id==$_SESSION['memberID']||$_SESSION['memberID']==1) echo "<label for='memberAccount'>帳號：</label><input readonly name='memeberAccount' type='text' value='{$memberAuthority['memberAccount']}' size=12/><br/><br/>";
        echo "<div style='text-align:center;'> <img src='{$member['picture']}' width='300px' height='240px'/><br/> <b style='font-size:24px;'>個人照片</b><br/><br/></div></div> ";      
        echo "<div class='col-md-6'>";
        if ($id==$_SESSION['memberID']||$_SESSION['memberID']==1) echo "<label for='memberPassword'>密碼：</label><input readonly name='memeberPassword' type='text' value='{$memberAuthority['memberPassword']}'  size=12/><br/><br/>";
        echo "<label for='name'>姓名：</label><input readonly name='name' type='text' value='{$member['name']}'  size=12/><br/><br/><label for='sex'>性別：</label>";
        echo "<input name='sex' type='text' value='{$member['sex']}' size=12 readonly/><br/><br/>";
        echo "<label for='birthday'>生日：</label><input readonly value='{$member['birthday']}' name='birthday' type='date'  /><br/><br/><label for='constellation'>星座：</label>";
        echo "<input readonly size=12 value='{$member['constellation']}' name='constellation' type='text'/><br/><br/></div></div> ";
        echo "<div class='row'><div class='col-md-6'>";
        echo "<label for='email'>信箱：</label><br/><input  readonly size=22 type='email' name='email' value='{$member['email']}'/><br/><br/></div>";
        echo "<div class='col-md-6'><label for='email'>電話：</label><br/><input readonly  size=20 type='tel' name='email' value='{$member['phone']}'/><br/><br/></div></div>";
        echo "<div class='row'><div class='col-md-6'>";
        echo "<label for='skill'>專長：</label><br/><textarea  readonly wrap='hard' rows='{$skill_count}' cols='22' name='skill' type='text'>{$member['skill']}</textarea></div>";
        echo "<div class='col-md-6'><label for='interest'>興趣：</label><br/><textarea cols='22' readonly wrap='hard' rows='{$interest_count}' name='interest' type='text'>{$member['interest']}</textarea><br/><br/>";
        echo "</div></div></form>";
        if ($id==$_SESSION['memberID']){
            echo "<div class='text-right' style='margin-right:24px;'><button class='btn btn-lg btn-success' onClick='goMemberDataEditForm({$member['memberID']})'>編輯會員資料</button><br/><br/></div>";
        }
    }
    $conn->close();
}

function memberDataEditForm(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $id = $_COOKIE['memberDataID'];
    $constellation=['牡羊座','金牛座','雙子座','巨蟹座','獅子座','處女座','天秤座','天蠍座','射手座','魔蠍座','水瓶座','雙魚座'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM authority WHERE memberID={$id};";
        $result=$conn->query($sql);
        $memberAuthority=$result->fetch_assoc();
        $sql="SELECT * FROM member WHERE memberID={$id};";
        $result=$conn->query($sql);
        $member=$result->fetch_assoc();
        $interest=$member['interest'];
        $interest_count=0;
        for ($i=0;$i<strlen($interest);$i++){
            if($interest[$i]>0){
                $interest_count++;
            }
        }
        $interest_count=$interest_count>6? $interest_count:6;
        $skill=$member['skill'];
        $skill_count=0;
        for ($i=0;$i<strlen($skill);$i++){
            if($skill[$i]>0){
                $skill_count++;
            }
        }
        $skill_count=$skill_count>6? $skill_count:6;
        for ($i=0;$i<count($constellation);$i++){
            if ($member['constellation']==$constellation[$i]){
                $c=$constellation[$i];
                $constellation[$i]=$constellation[0];
                $constellation[0]=$c;
                break;
            }
        }
        $sexOption=$member['sex']=='男'? "<option value='男'>男</option><option value='女'>女</option></select>":"<option value='女'>女</option><option value='男'>男</option></select>";
        echo "<div class='row'><div class='col-md-6'><label for='memberAccount'>帳號：</label><input required readonly  name='memberAccount' type='text' value='{$memberAuthority['memberAccount']}' size=12/><br/><br/>";
        echo "<div style='text-align:center;'> <img src='{$member['picture']}' width='300px' height='240px'/><br/>"; 
        echo "<input id='file' name='file' type='file'  style='margin-top:2px;margin-left:40px;width:250px'/>";
        echo "<br/><br/></div></div>";
        echo "<div class='col-md-6'><label for='memberPassword'>密碼：</label><input required  name='memberPassword' type='text' value='{$memberAuthority['memberPassword']}'  size=12/><br/><br/>";
        echo "<label for='name'>姓名：</label><input required  name='name' type='text' value='{$member['name']}'  size=12/><br/><br/><label for='sex'>性別：</label>";
        echo "<select style='width:200px' name='sex'>$sexOption</select><br/><br/>";
        echo "<label for='birthday'>生日：</label><input value='{$member['birthday']}' name='birthday' type='date'  /><br/><br/><label for='constellation'>星座：</label>"; 
        echo "<select style='width:200px' name='constellation'>";
        for ($i=0;$i<count($constellation);$i++){
            echo "<option  value='{$constellation[$i]}'>{$constellation[$i]}</option>";
        }
        echo "</select>";
        echo "<br/><br/></div></div> ";
        echo "<div class='row'><div class='col-md-6'>";
        echo "<label for='email'>信箱：</label><br/><input required  size=22 type='email' name='email' value='{$member['email']}'/><br/><br/></div>";
        echo "<div class='col-md-6'><label for='email'>電話：(09XXXXXXXX)</label><br/><input required maxlength=10  size=20 type='tel' name='phone' value='{$member['phone']}'/><br/><br/></div></div>";
        echo "<div class='row'><div class='col-md-6'>";
        echo "<label for='skill'>專長：</label><br/><textarea required  wrap='hard' rows='{$skill_count}' cols='22' name='skill' type='text'>{$member['skill']}</textarea></div>";
        echo "<div class='col-md-6'><label for='interest'>興趣：</label><br/><textarea required cols='22'  wrap='hard' rows='{$interest_count}' name='interest' type='text'>{$member['interest']}</textarea><br/><br/>";
        if ($id==$_SESSION['memberID']){
            echo "<div class='text-right' style='margin-right:24px;'><button class='btn btn-lg btn-success' onClick='checkEditMember()'>確定修改</button>";
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class='btn btn-lg btn-warning' type='reset'>重設</button></div><br><br>";
        }
        echo "</div></div>";
    }
}

function memberEdit($memberAccount,$memberPassword,$name,$sex,$birthday,$constellation,$email,$phone,$skill,$interest){
    $id=$_SESSION['memberID'];
    if (strlen($memberPassword)<4) {
        echo "<script>alert('密碼字數至少4個!');window.history.go(-1);</script>";
        return ;
    }
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM member WHERE memberID={$id}";
        $result=$conn->query($sql);
        $member=$result->fetch_assoc();
        $sql="UPDATE authority SET memberPassword={$memberPassword}";
        $result=$conn->query($sql);
        $c1=$conn->affected_rows;
        $fileName=uploadPersonalPicture($member['picture']);
        $upload=false;
        if ($fileName!="noFile"&&$fileName!="error" ){
             $sql="UPDATE member SET name='{$name}',sex='{$sex}',birthday='{$birthday}',constellation='{$constellation}',email='{$email}',phone='{$phone}',skill='{$skill}',interest='{$interest}',picture='{$fileName}' WHERE memberID={$id};";           
             $upload=true;
        }else{
             $sql="UPDATE member SET name='{$name}',sex='{$sex}',birthday='{$birthday}',constellation='{$constellation}',email='{$email}',phone='{$phone}',skill='{$skill}',interest='{$interest}' WHERE memberID={$id};";
        }
        $result=$conn->query($sql);
        $c2=$conn->affected_rows;   
        if ($fileName=="error"){
            echo "<script>alert('檔案上傳失敗!請選擇圖片檔案(jpg/png)');</script>";
        }
        if ($c1>0||$c2>0||$upload){
            echo "<script>alert('修改資料完成');window.location='/memberData.php';</script>";
        }else{
            echo "<script>alert('尚未修改資料');window.history.go(-1);</script>";
        }     
    }
    $conn->close();
}

function uploadPersonalPicture($picture){
    if ($_FILES['file']['name']=="") return "noFile";
    if($_FILES['file']['error']>0) return "error" ;
    $id=$_SESSION['memberID'];
    $f=explode(".",$_FILES['file']['name']);
    $type=$f[1];
    if ($type=="JPG"||$type=="PNG"||$type=="jpg"||$type=="png"){
        $fileName='img/member/picture/'.$id.".".$type;
        if ($picture!="img/member/picture/0.jpg") unlink($picture);
        move_uploaded_file($_FILES['file']['tmp_name'],$fileName);//複製檔案      
        return $fileName;
    }else{
        return "error";
    }
}
function displayClassMembers(){
    $page=$_COOKIE['membersPage']!=-1?$_COOKIE['membersPage']:1;
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM member WHERE memberID>1";
        $result1=$conn->query($sql);
        $sql="SELECT * FROM authority WHERE memberID>1";
        $result2=$conn->query($sql);
        while($member=$result1->fetch_assoc()){
                 $members[]=$member;                                                
        }       
        while($authority=$result2->fetch_assoc()){
                 $authoritys[]=$authority;                                                
        }       
        echo "<table class='roundedCorners' ><tr><th style='width:125px'>學號</th><th style='width:125px'>姓名</th><th style='width:250px'>信箱</th><th>照片</th><th>詳細資料</th></tr>";
        for ($i=($page-1)*5;$i<$page*5&&$i<($result1->num_rows);$i++){
            echo "<tr><td>{$authoritys[$i]['memberAccount']}</td><td>{$members[$i]['name']}</td><td>{$members[$i]['email']}</td>";
            echo "<td><img src='{$members[$i]['picture']}' style='width:120px;height:90px'></img></td><td><button onclick='goMemberData({$members[$i]['memberID']})' class='btn btn-default btn-primary'>查看更多</button></td></tr>";
        }
        echo '</table>';
    }
    $conn->close();
}

function displayClassMemberPage(){
      $membersPage=$_COOKIE['membersPage']!=-1?$_COOKIE['membersPage']:1;
      $lastPage=$membersPage-1>0? $membersPage-1:1;    
      echo " <div id='classMemberPage'>"             ;
      echo "<div class='text-center'><ul class='pagination'>";
      echo "<li><a style='cursor: pointer;'onClick='displayClassMembers({$lastPage})'>&laquo;</a></li>";
      $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);    
      if($conn){
          mysqli_set_charset($conn,"utf8");
          $sql="SELECT * FROM member WHERE memberID>1;";
          $result=$conn->query($sql);
          if($result->num_rows>0){
            for($i=1;$i<=(($result->num_rows-1)/5+1);$i++){
                $page="membersPage".$i;
                $func="displayClassMembers(".$i.")";
                if ($membersPage==$i)                              {
                    echo "<li id='{$page}' class='active'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                }else{
                    echo "<li id='{$page}'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                }                              
            }
            $nextPage=$membersPage+1>(($result->num_rows-1)/5+1)? $membersPage:$membersPage+1;
            echo "<li><a style='cursor: pointer;' onClick='displayClassMembers({$nextPage})'>&raquo;</a></li>";
            echo "</ul>";
        }          
    }
    echo "</div>";
    $conn->close();
}

function getBoolExpireActivity($datetime){
    $temp=explode(" ",$datetime);
    $dateTemp=$temp[0];
    $timeTemp=$temp[1];
    $date=explode("-",$dateTemp);
    $time=explode(":",$timeTemp);
    $nowDatetime=date("Y-m-d H:i:s");
    $temp=explode(" ",$nowDatetime);
    $nowDateTemp=$temp[0];
    $nowTimeTemp=$temp[1];
    $nowDate=explode("-",$nowDateTemp);
    $nowTime=explode(":",$nowTimeTemp);
    for ($i=0;$i<3;$i++){
        if($nowDate[$i]>$date[$i]) return true;
        else if($nowDate[$i]<$date[$i]) return false;
    }
    for ($i=0;$i<3;$i++){
        if($nowTime[$i]>$time[$i]) return true;
        else if($nowTime[$i]<$time[$i]) return false;
    }
    return false;
}

function displayActivityCalendar($isExpired){
    if ($isExpired) $str="expireActivityCalendarPage";
    else $str= "futureActivityCalendarPage";
    $page=$_COOKIE[$str]!=-1?$_COOKIE[$str]:1;
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM activityapply WHERE memberID={$_SESSION['memberID']} and participate='y';";
        $result1=$conn->query($sql);
        $rows=0;
        if($result1->num_rows==0) return;
        while($activityApply=$result1->fetch_assoc()){
           if ($isExpired){
                $sql="SELECT * FROM activity WHERE activityID={$activityApply['activityID']};";
                $result4=$conn->query($sql);
                $activity=$result4->fetch_assoc();
                if(getBoolExpireActivity($activity['endTime'])){
                    $rows++;
                    $activityApplys[]=$activityApply;
                }
            }else{
                $sql="SELECT * FROM activity WHERE activityID={$activityApply['activityID']};";
                $result5=$conn->query($sql);
                $activity=$result5->fetch_assoc();
                if(!getBoolExpireActivity($activity['endTime'])){
                    $rows++;
                    $activityApplys[]=$activityApply;
                }
            }           
        } 
        $expireCount=$futureCount=0;
        if($result1->num_rows>0){
            for ($i=($page-1)*5;$i<$page*5&&$i<$rows;$i++){
                $sql="SELECT * FROM activity WHERE activityID={$activityApplys[$i]['activityID']};";
                $result2=$conn->query($sql);
                $activity=$result2->fetch_assoc();
                $sql="SELECT * FROM activityapply WHERE activityID={$activityApplys[$i]['activityID']} and participate='y';";
                $result3=$conn->query($sql);
                $count=$result3->num_rows;
                if ($isExpired){
                    $expireCount++;
                    if($expireCount==1)  echo "<h2 style='color:red;font-weight:bold;text-align:center'>已到期活動</h2><table><tr><th>活動名稱</th><th>活動時間</th><th style='width:120px'>參加人數</th><th>詳細內容</th></tr>";
                    echo "<tr style='color:red;'><td>{$activity['title']}</td><td>{$activity['startTime']} 至 {$activity['endTime']}</td>";
                    echo "<td>$count</td><td><button onclick='goActivityForm({$activity['activityID']})' class='btn btn-default btn-primary'>查看更多</button></td></tr>";               
                }
                else{
                    $futureCount++;
                    if ($futureCount==1) echo "<h2 style='color:blue;font-weight:bold;text-align:center'>未到期活動</h2><table><tr><th>活動名稱</th><th>活動時間</th><th style='width:120px'>參加人數</th><th>詳細內容</th></tr>";
                    echo "<tr style=''><td>{$activity['title']}</td><td>{$activity['startTime']} 至 {$activity['endTime']}</td>";
                    echo "<td>$count</td><td><button onclick='goActivityForm({$activity['activityID']})' class='btn btn-default btn-primary'>查看更多</button></td></tr>";
                   
                }
            }
        }
        echo "</table>";
        if ($expireCount>0) echo displayActivityCalendarPage("expire",$rows);
        if ($futureCount>0) echo displayActivityCalendarPage("future",$rows);
    }
    $conn->close();
}

function displayActivityCalendarPage($type,$rows){
      $str=$type."ActivityCalendarPage";
      $id =$type."CalendarPage";
      if ($type=="expire") $func="displayExpireActivityCalendar";
      else $func="displayFutureActivityCalendar";
      $calendarPage=$_COOKIE[$str]!=-1?$_COOKIE[$str]:1;
      $lastPage=$calendarPage-1>0? $calendarPage-1:1;    
      echo " <div id='{$id}'>"             ;
      echo "<div class='text-center'><ul class='pagination'>";
      echo "<li><a style='cursor: pointer;'onClick='{$func}({$lastPage})'>&laquo;</a></li>";
      $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);    
      if($conn){
          mysqli_set_charset($conn,"utf8");
          $sql="SELECT * FROM activityapply WHERE memberID={$_SESSION['memberID']};";
          $result=$conn->query($sql);
          if($result->num_rows>0){
            for($i=1;$i<=(($rows-1)/5+1);$i++){
                $page=$str.$i;
                if ($calendarPage==$i)                              {
                    echo "<li id='{$page}' class='active'><a style='cursor: pointer;' onClick='{$func}({$i})'>{$i}</a></li>";
                }else{
                    echo "<li id='{$page}'><a style='cursor: pointer;' onClick='{$func}({$i})'>{$i}</a></li>";
                }                              
            }
            $nextPage=$calendarPage+1>(($rows-1)/5+1)? $calendarPage:$calendarPage+1;
            echo "<li><a style='cursor: pointer;' onClick='{$func}({$nextPage})'>&raquo;</a></li>";
            echo "</ul>";
        }          
    }
    echo "</div>";
    $conn->close();
}

function displayImageDir(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM imagedir;";
        $result1=$conn->query($sql);
        $imageDirCount=$result1->num_rows;
        
        for ($i=0;$i<(int)($imageDirCount/4)+1;$i++){
            echo "<div class='row'>";
            for($j=0;$j<4;$j++){
                if ($i==(int)($imageDirCount/4)&&$j==($imageDirCount)%4) break;
                $dir=$result1->fetch_assoc();
                echo "<div onclick='displayImage({$dir['imageDirID']})' class='col-md-3'><a href='memoryPhoto.php'><img  style='width:100%'src='img/photo.png'></a></img><p style='text-align:center'>{$dir['dirName']}</p></div>";
            }
            echo "</div><hr>";
        }
    }
    $conn->close();
}

function createPhotoDir($dirName){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
    mysqli_set_charset($conn,"utf8");
    $sql="SELECT * FROM imagedir;";
    $result1=$conn->query($sql);
    $imageDirCount=$result1->num_rows;
    $id=$imageDirCount+1;
    mkdir('img/memory/'.$id);
    $sql="INSERT INTO imagedir(dirName) VALUES('{$dirName}');";
    $result2=$conn->query($sql);
    if ($result2) echo "<script>window.location='memory.php'</script>"; 

    }
    $conn->close();
}

function displayImage(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        $dirID=$_COOKIE['imageDirID'];
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM imagedir WHERE imageDirID={$dirID};";
        $result=$conn->query($sql);
        $dir=$result->fetch_assoc();
        $sql="SELECT * FROM image WHERE imageDirID={$dirID};";
        $result1=$conn->query($sql);
        $imageCount=$result1->num_rows;
        echo "<ol style='background:#FFE4C4;text-align:left;font-size:16px' class='breadcrumb'><li><a href='memory.php'>回憶剪影</a></li>";
        echo "<li><a href='memoryPhoto.php'>{$dir['dirName']}</a></li></ol>";
        for ($i=0;$i<(int)($imageCount/4)+1;$i++){
            echo "<div class='row'>";
            for($j=0;$j<4;$j++){
                if ($i==(int)($imageCount/4)&&$j==($imageCount)%4) break;
                $image=$result1->fetch_assoc();
                echo "<div class='col-md-3'><img  style='width:100%;height:100%'src='{$image['url']}'></img><p style='text-align:center'>{$image['title']}</p></div>";
            }
            echo "</div><hr>";
        }
    }
    $conn->close();
}

function createPhoto($title){
    if ($_FILES['file']['name']=="") echo "<script>alert('尚未選擇上傳檔案');window.location='createPhoto.php'</script>";
    if($_FILES['file']['error']>0) echo "<script>alert('上傳檔案失敗');window.location='createPhoto.php'</script>";
    $f=explode(".",$_FILES['file']['name']);
    $type=$f[1];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        $dirID=$_COOKIE['imageDirID'];
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM image WHERE imageDirID={$dirID};";
        $result1=$conn->query($sql);
        $count=$result1->num_rows;
        $id=$count+1;
        if ($type=="JPG"||$type=="PNG"||$type=="jpg"||$type=="png"){
            $fileName='img/memory/'.$dirID."/".$id.".".$type;
            move_uploaded_file($_FILES['file']['tmp_name'],$fileName);//複製檔案      
            $sql="INSERT INTO image(imageID,imageDirID,title,url,releaseTime) VALUES('',{$dirID},'{$title}','{$fileName}','');";
            $result2=$conn->query($sql);
            echo "<script>alert('上傳檔案成功');window.location='memoryPhoto.php'</script>";;
        }else{
            echo "<script>alert('上傳檔案失敗');window.location='createPhoto.php'</script>";
        }
    }
    $conn->close();
}

function displayVideoDir(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM videodir;";
        $result1=$conn->query($sql);
        $videoDirCount=$result1->num_rows;
        
        for ($i=0;$i<(int)($videoDirCount/4)+1;$i++){
            echo "<div class='row'>";
            for($j=0;$j<4;$j++){
                if ($i==(int)($videoDirCount/4)&&$j==($videoDirCount)%4) break;
                $dir=$result1->fetch_assoc();
                echo "<div onclick='displayVideo({$dir['videoDirID']})' class='col-md-3'><a href='memoryVideo.php'><img  style='width:100%'src='img/video.png'></a></img><p style='text-align:center'>{$dir['dirName']}</p></div>";
            }
            echo "</div><hr>";
        }
    }
    $conn->close();
}

function displayVideo(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        $dirID=$_COOKIE['videoDirID'];
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM videodir WHERE videoDirID={$dirID};";
        $result=$conn->query($sql);
        $dir=$result->fetch_assoc();
        $sql="SELECT * FROM video WHERE videoDirID={$dirID};";
        $result1=$conn->query($sql);
        $videoCount=$result1->num_rows;
        echo "<ol style='background:#FFE4C4;text-align:left;font-size:16px' class='breadcrumb'><li><a href='memory.php'>回憶剪影</a></li>";
        echo "<li><a href='memoryVideo.php'>{$dir['dirName']}</a></li></ol>";
        for ($i=0;$i<(int)($videoCount/2)+1;$i++){
            echo "<div class='row'>";
            for($j=0;$j<2;$j++){
                if ($i==(int)($videoCount/2)&&$j==($videoCount)%2) break;
                $video=$result1->fetch_assoc();
                echo "<div class='col-md-6'><iframe width=100% height='250px' src='{$video['url']}'></iframe><p style='text-align:center'>{$video['title']}</p></div>";
            }
            echo "</div><hr>";
        }
    }
    $conn->close();
}

function createVideo($name,$url){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        $dirID=$_COOKIE['videoDirID'];
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM video WHERE videoDirID={$dirID};";
        $result1=$conn->query($sql);
        move_uploaded_file($_FILES['file']['tmp_name'],$fileName);//複製檔案      
        $sql="INSERT INTO video(videoID,videoDirID,title,url,releaseTime) VALUES('',{$dirID},'{$name}','{$url}','');";
        $result2=$conn->query($sql);
        echo "<script>alert('上傳影片連結成功');window.location='memoryVideo.php'</script>";;
    }
    $conn->close();
}

function createVideoDir($dirName){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM videodir;";
        $result1=$conn->query($sql);
        $videoDirCount=$result1->num_rows;
        $id=$videoDirCount+1;
        $sql="INSERT INTO videodir(dirName) VALUES('{$dirName}');";
        $result2=$conn->query($sql);
        if ($result2) echo "<script>window.location='memory.php'</script>"; 

    }
    $conn->close();
}




/*<--公告-->*/
function displayAnnouncementTable(){
    if($_SESSION['memberID']==1) echo "<div style='text-align:right;margin-right:5px;'><button class='btn btn-lg  btn-primary text-center' onClick='goAnnouncementCreateForm()'>新增公告</button></div><p style='font-size:0px'><br></p>";//
    else echo "<br><br>";
    echo "<table class='roundedCorners'><tr><th>主題</th><th style='width:100px'>種類</th><th style='width:180px'>發布日期</th></tr>";
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $array=[];
    $announcementPage=$_COOKIE['announcementPage'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM announcement;";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($announcement=$result->fetch_assoc()){
                 $array[]=$announcement;                                                
            }
        }
        for($i=$result->num_rows-1-($announcementPage-1)*7;$i>=0&&$i>=($result->num_rows-($announcementPage-1)*7-7);$i--){                              
            echo "<tr><td><a onClick='goAnnouncementForm({$array[$i]['announcementID']})' href='announcementForm.php'>{$array[$i]['title']}</a></td><td style='font-size:120%'>{$array[$i]['announcementclass']}</td><td style='font-size:120%'>{$array[$i]['releaseTime']}</td></tr>";         
        }     
    }    
        echo "</table> ";
        $conn->close();      
}

function displayAnnouncementPageNumbers(){
    $announcementPage=$_COOKIE['announcementPage']==null? 1:$_COOKIE['announcementPage'] ;
    $lastPage=$announcementPage-1>0? $announcementPage-1:1;    
    echo " <div id='announcementPage'>"             ;
    echo "<div class='text-center'><ul class='pagination'>";
    echo "<li><a style='cursor: pointer;'onClick='goAnnouncement({$lastPage})'>&laquo;</a></li>";
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);     
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM announcement;";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            for($i=1;$i<=(($result->num_rows-1)/7+1);$i++){
                $page="announcementPage".$i;
                $func="goAnnouncement(".$i.")";
                if ($announcementPage==$i)                              {
                    echo "<li id='{$page}' class='active'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                }else{
                    echo "<li id='{$page}'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                }                              
            }
            $nextPage=$announcementPage+1>$result->num_rows-1/7+1? $announcementPage:$announcementPage+1;
            echo "<li><a style='cursor: pointer;' onClick='goAnnouncement({$nextPage})'>&raquo;</a></li>";
            echo "</ul>";
        }          
    }
    echo "</div>";
    $conn->close();
}

function displayAnnouncementContent(){
    $announcementID=$_COOKIE['announcementID'];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM announcement WHERE announcementID= '{$announcementID}';";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            $announcement=$result->fetch_assoc();
            echo "<br><h4>{$announcement['title']}</h4><br>";
            if ($_SESSION['memberID']==1){
                echo "<div style='text-align:right;margin-right:20px'><div style='display:inline'><button onClick='goAnnouncementUpdateForm()' class='btn btn-lg  btn-success text-center' >修改</button>";//
                echo "&nbsp;<button onClick='deleteAnnouncement()' class='btn btn-lg  btn-danger text-center' >刪除</button></div></div>";//
            }
            echo "<div style='margin-left:20px;margin-right:20px'><pre style='white-space:pre-wrap'>{$announcement['content']}</pre>";//
            echo "<div><a href='index.php'>回上一頁</a>";
            echo "</div><br><br></div>";
            
        }                       
    }
    $conn->close();      
}
function createAnnouncement(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);  
    $title=$_GET['title'];
    $class=$_GET['class'];
    $content=$_GET['content'];
    $releaseTime=date("Y-m-d H:i:s");
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="INSERT INTO announcement(title,announcementclass,content,releaseTime) VALUES ('{$title}','{$class}','{$content}','{$releaseTime}');";
        $result=$conn->query($sql);
        if ($result){
             echo "<script>alert('新增公告成功');window.location = '/index.php';</script>";
        }
    }  
    $conn->close();
}

function deleteAnnouncement(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $announcementID=$_COOKIE['announcementID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="DELETE FROM announcement WHERE announcementID={$announcementID};";
        $result=$conn->query($sql);
        if ($conn->affected_rows>0){
            echo "<script>alert('刪除公告成功');window.location = '/index.php';</script>";
        }
    }
    $conn->close();
}

function displayUpdateAnnouncementForm(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $announcementID=$_COOKIE['announcementID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM announcement WHERE announcementID={$announcementID};";
        $result=$conn->query($sql);
        $announcement=$result->fetch_assoc();
        
        echo "<div class='row'><div class='col-md-8'><label for='title' >公告標題： </label>";
        echo "<input required type='text' name='title' size=22 value='{$announcement['title']}'><br><br> </div>";
        echo "<div class='col-md-4'><label for='class'>公告種類：</label><select name='class' ><option value='註冊組'>註冊組</option><option value='總務處'>總務處</option><option value='學生議會'>學生議會</option><option value='電算中心'>電算中心</option></select><br><br></div> </div> ";
        echo "<div class='row'><div class='col-md-12'><label for='content'>公告內容描述：</label> <textarea required  type='text' name='content' rows='6' cols='53'  Wrap='Soft'>{$announcement['content']}</textarea>";
        echo "<div class='display:inline'>&nbsp;&nbsp;<button class='btn btn-lg  btn-primary text-center'  type='submit' name='submit' onClick='updateAnnouncement()'>修改公告</button>&nbsp;&nbsp;<button class='btn btn-lg  btn-warning text-center''  type='reset' name='reset'>重設</button>&nbsp;&nbsp;<button class='btn btn-lg  btn-danger text-center' onClick='clearAction()'>取消修改</button> </div> </div></div></form><br>";      
    }
    $conn->close();
}

function updateAnnouncement(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);  
    $title=$_GET['title'];
    $class=$_GET['class'];
    $content=$_GET['content'];
    $releaseTime=date("Y-m-d H:i:s");
    $announcementID=$_COOKIE['announcementID'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="UPDATE announcement SET title='{$title}',announcementclass='{$class}',content='{$content}',releaseTime='{$releaseTime}' WHERE announcementID='{$announcementID}'";
        $result=$conn->query($sql);
        if ($conn->affected_rows>0){
             echo "<script>alert('修改公告成功');window.location = '/announcementForm.php';</script>";
        }
    }  
    $conn->close();
}


function createDiscuss(){
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);  
    $title=$_GET['title'];
    $class=$_GET['class'];
    $content=$_GET['content'];
    $memberID=$_SESSION['memberID'];

    
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="INSERT INTO discuss(title,discussclass,content,memberID) VALUES ('{$title}','{$class}','{$content}','{$memberID}');";
        $result=$conn->query($sql);
        if ($result){
             echo "<script>alert('新增話題成功');window.location = '/discuss.php';</script>";
        }
    }  
    $conn->close();
}

function displayDiscussTable(){
    if($_SESSION['memberID']>0) echo "<div style='text-align:right;margin-right:5px;'><button class='btn btn-lg  btn-primary text-center' onClick='goDiscussCreateForm()'>新增話題</button></div><p style='font-size:0px'><br></p>";
    else echo "<br><br>";
    echo "<table class='roundedCorners'><tr><th>主題</th><th>種類</th><th>發布日期</th><th>發布人</th></tr>";
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    $array=[];
    $discussPage=$_COOKIE['discussPage'];
    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="SELECT * FROM discuss,member WHERE member.memberID=discuss.memberID;";

        $result=$conn->query($sql);
        if($result->num_rows>0){
            while($discuss=$result->fetch_assoc()){
                 $array[]=$discuss;                                                
            }
        }
        for($i=$result->num_rows-1-($discussPage-1)*7;$i>=0&&$i>=($result->num_rows-($discussPage-1)*7-7);$i--){                            
            echo "<tr><td><a onClick='goDiscussForm({$array[$i]['discussID']})' href='discussForm.php'>{$array[$i]['title']}</a></td><td style='font-size:120%'>{$array[$i]['discussclass']}</td><td style='font-size:120%'>{$array[$i]['releaseTime']}</td><td style='font-size:120%'>{$array[$i]['name']}</td></tr>";         
        }     
    }    
        echo "</table> ";
        $conn->close();      
    }

 function displayDiscussPageNumbers(){
        $discussPage=$_COOKIE['discussPage']==null? 1:$_COOKIE['discussPage'] ;
        $lastPage=$discussPage-1>0? $discussPage-1:1;    
        echo " <div id='discussPage'>"             ;
        echo "<div class='text-center'><ul class='pagination'>";
        echo "<li><a style='cursor: pointer;'onClick='goDiscuss({$lastPage})'>&laquo;</a></li>";
        $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);     
        if($conn){
            mysqli_set_charset($conn,"utf8");
            $sql="SELECT * FROM discuss;";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                for($i=1;$i<=($result->num_rows-1)/7+1;$i++){
                    $page="discussPage".$i;
                    $func="goDiscuss(".$i.")";
                    if ($discussPage==$i)                              {
                        echo "<li id='{$page}' class='active'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }else{
                        echo "<li id='{$page}'><a style='cursor: pointer;' onClick='{$func}'>{$i}</a></li>";
                    }                              
                }
                $nextPage=$discussPage+1>$result->num_rows/7+1? $discussPage:$discussPage+1;
                echo "<li><a style='cursor: pointer;' onClick='goDiscuss({$nextPage})'>&raquo;</a></li>";
                echo "</ul>";
        }          
    }
    echo "</div>";
    $conn->close();
}

function displayDiscussContent(){
    $discussID=$_COOKIE['discussID'];
    $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);
    if($conn){
        mysqli_set_charset($conn,"utf8");
        //$sql="SELECT * FROM discuss WHERE discussID= '{$discussID}';";
        $sql="SELECT * FROM discuss,member WHERE member.memberID=discuss.memberID AND discussID= '{$discussID}';";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            $discuss=$result->fetch_assoc();

            
            
            echo "<br><h4>{$discuss['title']}</h4></br>";
            
            echo "<div style='margin-left:20px;margin-right:20px'><pre>{$discuss['content']}</br><div></div></pre>";
            echo "<div><a href='discuss.php'>回上一頁</a>";
            echo "</div><br><br>";
                $result=$conn->query($sql);
            echo "</div>";
        }                       
    }
    $conn->close();      
}

function displayMessageTool(){
    echo "<div class='row'><div class='col-md-12'><form action='action.php' method='post'>";
    echo "<textarea required name='content' placeholder='請輸入留言' rows=5 style='width:100%'></textarea>";
    echo "<div class=text-right><button onclick='createDiscussMessage()' class='btn btn-lg btn-primary'>送出</button>";
    echo " <button class='btn btn-lg btn-warning'>重設</button>";
    echo "</div>";
    echo "<form></div></div>";
}

function displayMessages(){
      $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);  
      if($conn){
           mysqli_set_charset($conn,"utf8");
           $sql="SELECT * FROM discussmessage WHERE discussID={$_COOKIE['discussID']};";
           $result=$conn->query($sql);
           if($result->num_rows==0) return;
           echo "<div id='menu'><p style='text-align:center;font-size:200%;color:black;font-weight: bold;font-family: '微軟正黑體';'>留言區</p> </div>";
          echo "<div id='messages' style='margin-top:20px;;margin-left:60px;margin-right:60px'>";
           while($row=$result->fetch_assoc()){
               $sql="SELECT * FROM member WHERE memberID={$row['memberID']};";
               $result2=$conn->query($sql);
               $member=$result2->fetch_assoc();
               echo "<div class='row'><div class='col-md-3'><img style='width:100%;height:120px;margin-top:10px;' src={$member['picture']}></img>";
               echo "<p style='text-align:center;'>{$member['name']}</p></div>";
               echo "<div class='col-md-9'><textarea readonly style='width:100%;height:150px;font-size:20px;background:white;'>{$row['content']}</textarea>";
               echo "</div></div><hr>";
           }
         echo "</div>";
      }
       $conn->close();  
}

function createDiscussmessage(){
   $conn=new mysqli($GLOBALS['serverName'], $GLOBALS['username'], $GLOBALS['password'],$GLOBALS['dbName']);  
    
    $content=$_POST['content'];
    $memberID=$_SESSION['memberID'];

    if($conn){
        mysqli_set_charset($conn,"utf8");
        $sql="INSERT INTO discussmessage(messageID,memberID,discussID,content,releaseTime) VALUES ('','{$memberID}','{$_COOKIE['discussID']}','{$content}','');";
        $result=$conn->query($sql);
        if ($result){
             echo "<script>alert('留言成功');window.location = '/discussForm.php';</script>";
        }
    }  
    $conn->close();
}
?>
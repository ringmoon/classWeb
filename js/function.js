
function logout(){
    alert("順利登出");
}

function post(){
    if(applyForm.participate.value==""){
        alert("未選擇是否參與");
    }else{              
        applyForm.submit();
        alert("提交完成");
    }
}

function goActivityForm(id){
    document.cookie = "activityID="+id;
    window.location='/activityForm.php';
}

function goActivityNews(id){
    $("#activityPage"+getCookie('activityPage')).removeClass(' active');
    if (getCookie("activityPage")!=""&&id==-1){}
    else document.cookie = "activityPage="+id;        
    pageID="#activityPage"+id;
    $(pageID).addClass("active");
    $.get('/activityTable.php',function(result,statu){
        $("#activityTable").html(result);
    });
}

function loginCheck(){
    if(loginForm.username.value==""&&loginForm.password.value==""){
        alert("未輸入使用者名稱和密碼");
    }else if(loginForm.username.value==""){
        alert("未輸入使用者名稱");
    }else if(loginForm.password.value==""){
        alert("未輸入使用者密碼");
    }else if(loginForm.password.value.length<4){
        alert("輸入密碼小於4個字元");
    }else{
        loginForm.submit();
    }
}

function enterInPassword(){
    var keycode = event.which || event.keyCode;
    if(keycode==13){
        loginCheck();
    }
}

function loginFail(){
    alert("輸入帳密錯誤!!");
    window.location = '/login.php';
}

function loginSuccess(){
    alert("登入成功!!");
    window.location = '/index.php';
}

 function changeTheMonthBirthdayList(page){
     if (getCookie("theMonthBirthdayPage")!=""&&page==-1){}
     else document.cookie = "theMonthBirthdayPage="+page;         
    $.get('/theMonthBirthdayPeople.php',function(result,statu){
        $("#theMonthBirthdayID").html(result);
    });
}     


function getCookie(cookieName) {
  var name = cookieName + "=";
  var ca = document.cookie.split(';');
  for(var i=0; i<ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1);
      if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
  }
  return "";
}

function goActivityJoinTable(id){
    $("#activityJoinPage"+getCookie('activityJoinPage')).removeClass(' active');
    document.cookie = "activityJoinPage="+id;         
    pageID="#activityJoinPage"+id;
    $(pageID).addClass("active");
    $.get('/activityJoinTable.php',function(result,statu){
        $("#activityJoinTable").html(result);
    });
}

function goActivityCreateForm(){
    window.location = '/activityCreateForm.php';
}

function createActivity(){  
    document.cookie="action="+"createActivity";
}

function deleteActivity(){
   document.cookie="action="+"deleteActivity";
   window.location = '/action.php';
}

function goActivityUpdateForm(){
    window.location = '/activityUpdateForm.php';
}

function updateActivity(){  
    document.cookie="action="+"updateActivity";
}

function deleteActivityApply(id){
    document.cookie="action="+"deleteActivityApply";
    document.cookie="ActivityApplyID="+id;
    window.location='/action.php';
}

function participateActivity(){
    document.cookie="action="+"participateActivity";
    window.location = '/action.php';
}

function goAuthorityDataTable(id){    
    $("#authorityDataPage"+getCookie('authorityDataPage')).removeClass(' active');
    if (getCookie('authorityDataPage')!=""&&id==-1){}
    else document.cookie = "authorityDataPage="+id; 
    pageID="#authorityDataPage"+id;
    $(pageID).addClass("active");
    $.get('/authorityDataTable.php',function(result,statu){
        $("#authorityDataTable").html(result);
    });
}
//****************************************************** */
function goMemberData(id){
    document.cookie = "memberDataID="+id;
    window.location='/memberData.php';
}

function goMemberUpdateForm(id){  
    document.cookie = "memberDataID="+id;
    window.location='/memberUpdateForm.php';
}

function deleteMemberData(id){
    if (!confirm('是否確定刪除')) return; 
    document.cookie="action="+"deleteMemberData";
    document.cookie = "memberDataID="+id;
    window.location='/action.php';
}

function updateMember(){
    document.cookie="action="+"updateMember";
    window.location='/action.php';
}

function goMemberInsertForm(){
    window.location='/memberInsertForm.php';
}

function insertMember(){
   document.cookie="action="+"insertMember";  
}

function goMemberDataEditForm(id){
    document.cookie = "memberDataID="+id;
    window.location='/memberDataEditForm.php';
}

function checkEditMember(){
    document.cookie = "action="+"memberEdit";
}

function displayClassMembers(id){
    $("#membersPage"+getCookie('membersPage')).removeClass(' active');
    if (getCookie("membersPage")!=""&&id==-1){}
    else document.cookie = "membersPage="+id;       
    pageID="#membersPage"+id;
    $(pageID).addClass("active");
    $.get('/classMembers.php',function(result,statu){
        $("#classMemberTable").html(result);
    });
}     

function displayExpireActivityCalendar(id){
    $("#expireActivityCalendarPage"+getCookie('expireActivityCalendarPage')).removeClass(' active');
    if (getCookie("expireActivityCalendarPage")!=""&&id==-1){}
    else document.cookie = "expireActivityCalendarPage="+id;       
    pageID="#expireActivityCalendarPage"+id;
    $(pageID).addClass("active");
    $.get('/expireActivityCalendar.php',function(result,statu){
        $("#expireCalendar").html(result);
    });
}

function displayFutureActivityCalendar(id){
    $("#futureActivityCalendarPage"+getCookie('futureActivityCalendarPage')).removeClass(' active');
    if (getCookie("futureActivityCalendarPage")!=""&&id==-1){}
    else document.cookie = "futureActivityCalendarPage="+id;       
    pageID="#futureActivityCalendarPage"+id;
    $(pageID).addClass("active");
    $.get('/futureActivityCalendar.php',function(result,statu){
        $("#futureCalendar").html(result);
    });
}
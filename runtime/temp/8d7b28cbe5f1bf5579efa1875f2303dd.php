<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"/www/wwwroot/company/public/../application/admin/view/login/login.html";i:1558325126;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<title>后台管理</title>
  <link rel="alternate icon" type="http://www.aisanhui.com/static/index/img/ashlogo.png" href="http://www.aisanhui.com/static/index/img/ashlogo.png">
<link href="http://www.aisanhui.com/static/admin/css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="login_box">
      <div class="login_l_img"><img src="http://www.aisanhui.com/static/admin/images/login-img.png" /></div>
      <div class="login">
          <div class="login_logo"><a href="#"><img src="http://www.aisanhui.com/static/admin/images/login_logo.png" /></a></div>
          <div class="login_name">
               <p>三晖科技后台管理系统</p>
          </div>
          <form method="post">
              <input name="username" type="text"  value="用户名" onfocus="this.value=''" onblur="if(this.value==''){this.value='用户名'}">
              <span id="password_text" onclick="this.style.display='none';document.getElementById('password').style.display='block';document.getElementById('password').focus().select();" >密码</span>
              <input name="password" type="password" id="password" style="display:none;" onblur="if(this.value==''){document.getElementById('password_text').style.display='block';this.style.display='none'};"/>
              <input value="登录" style="width:100%;" type="submit">
          </form>
      </div>
      <div class="copyright">
        Copyright ©2019 苏州三晖信息科技有限公司 版权所有备案号：苏ICP备18055553号-1
      </div>
</div>

</body>
</html>

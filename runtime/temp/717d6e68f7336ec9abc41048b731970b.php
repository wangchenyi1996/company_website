<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"/www/wwwroot/company/public/../application/index/view/news/newsdetail.html";i:1558424745;s:62:"/www/wwwroot/company/application/index/view/common/header.html";i:1558401077;s:62:"/www/wwwroot/company/application/index/view/common/footer.html";i:1558423112;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新闻详情</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="http://www.aisanhui.com/static/index/img/ashlogo.png" href="http://www.aisanhui.com/static/index/img/ashlogo.png">
  <link rel="stylesheet" href="http://www.aisanhui.com/static/index/css/amazeui.css"/>
  <link rel="stylesheet" href="http://www.aisanhui.com/static/index/css/style.css"/>
</head>
<body>
<header class="am-topbar header">
	<div class="am-container-1">
	    <!-- 引入模板文件 -->
    ﻿<div class="left hw-logo">
   <a href="<?php echo url('admin/login/index'); ?>">
      <img class="logo" src="http://www.aisanhui.com/static/index/img/sanhui1.png" style="height: 70px;margin-left: -20px;margin-top: -13px;"></img>
      <img class="word" src="http://www.aisanhui.com/static/index/img/sanhui2.png" style="left:70px;"></img>
    </a>
</div>

<button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}">
  <span class="am-sr-only">导航切换</span> 
  <span class="am-icon-bars"></span>
</button>

 <div class="am-collapse am-topbar-collapse right" id="doc-topbar-collapse">
  <div class="am-topbar-left am-form-inline am-topbar-right" role="search">
    <ul class="am-nav am-nav-pills am-topbar-nav hw-menu" id="shlist">
      <li class="hw-menu-active"><a href="<?php echo url('index/index/index'); ?>">首页</a></li>
      <li><a href="<?php echo url('index/product/index'); ?>">产品展示 </a></li>
      <li><a href="<?php echo url('index/custormcase/index'); ?>">客户案例</a></li>
      <li><a href="<?php echo url('index/news/index'); ?>">新闻动态 </a></li>
      <li><a href="<?php echo url('index/about/index'); ?>">关于我们</a></li>
      <li><a href="<?php echo url('index/recruit/index'); ?>">招贤纳士</a></li>
    </ul>
  </div>
</div>


  </div>
</header>
<div class="toppic">
	 <div class="am-container-1">
	 <div class="toppic-title left">
    <div style="margin-top:8px;margin-bottom: 5px;">
        <!-- <i class="am-icon-paper-plane toppic-title-i"></i> -->
        <img src="http://www.aisanhui.com/static/index/img/newsinform.png" class="toppic-title-i" style="position: relative;top:5px;height: 37px;" />
			<span class="toppic-title-span">新闻详情</span>
      </div>
			<p>News Information</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('index/news/index'); ?>" class="w-white">新闻动态</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('index/newsdetail/index'); ?>" class="w-white">新闻详情</a></span>
		</div>
	</div>
</div>

<div class="am-container-1 margin-t30">
	<div class="words-title ">
		<span><?php echo $newsdetail['newstitle']; ?></span>
		<div><?php echo substr($newsdetail['newstime'],0,10); ?></div>
	</div>
</div>
		
<div class="solution-inform" style="background-color: #fff;">
	<div class=" solution-inform-content-all">
		<div class="solution-inform-content">
		    <p class="inform-content-p">
          <?php echo $newsdetail['newscontent']; ?>
        </p>
	      <div class="solution-inform-content-img">
          <?php if($newsdetail['newsimg'] != ''): ?>
              <img src="http://www.aisanhui.com/static/<?php echo $newsdetail['newsimg']; ?>">
          <?php endif; ?>
	      	<div class="clear"></div>
	      </div>
	      <p class="solution-inform-content-words">
          <?php echo $newsdetail['newsdetail']; ?>
	      </p>
	
		</div>
	</div>
</div>

<!-- 引入模板文件 -->
  ﻿
<footer class="footer ">
    <ul>  
      <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
          <div class="part-5-title">联系我们</div>
          <div class="part-5-words2">
            <?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
              <span>地址:<?php echo $vo['address']; ?></span>
              <span>电话:<?php echo $vo['phone']; ?></span>
              <span>传真:<?php echo $vo['telphone']; ?></span>
              <span>邮箱:<?php echo $vo['email']; ?></span>
              <span><i class="am-icon-phone"></i><em ><?php echo $vo['telphone']; ?></em></span>
        <?php endforeach; endif; else: echo "" ;endif; ?>
             
          </div>
      </li>
      <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 ">
          <div class="part-5-title">相关链接</div>
          <div class="part-5-words2">
              <ul class="part-5-words2-ul">
                  <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('index/index/index'); ?>">首页</a></li>
                  <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('index/product/index'); ?>">产品展示</a></li>
                  <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('index/custormcase/index'); ?>">客户案例</a></li>
                  <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('index/news/index'); ?>">新闻动态</a></li>
                  <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('index/about/index'); ?>">关于我们</a></li>
                  <li class="am-u-lg-4 am-u-md-6 am-u-sm-4"><a href="<?php echo url('index/recruit/index'); ?>">招贤纳士</a></li>
                  <div class="clear"></div>
              </ul>
          </div>
      </li>
      <!-- 联系我们表单 -->
      <li class="am-u-lg-4 am-u-md-4 am-u-sm-12">
        <div class="part-5-title">用户留言</div>

        <form class="am-form-inline" role="form">
          <div class="am-form-group" style="box-sizing: border-box;">
             <p>Full Name</p>
            <input type="text" class="am-form-field" style="border-radius: 9px;margin-top: 5px;background: rgba(0, 0, 0, -0.5);color: #fff;" id="user">
          </div>

          <span style="display:inline-block;margin: 0 3px;height: 1px;"></span>

          <div class="am-form-group" style="box-sizing: border-box">
            <p>Email</p>
            <input type="email" class="am-form-field" style="border-radius: 9px;margin-top: 5px;background: rgba(0, 0, 0, -0.5);color: #fff;" id="email">
          </div>

          <div class="am-form-group" style="margin-top: 10px;box-sizing: border-box">
            <p>User Message</p>
            <textarea rows="4" style="border-radius: 9px;margin-top: 5px;width: 403px;background: rgba(0, 0, 0, -0.5);color: #fff;" id="msg"></textarea>
          </div>

            <div class="am-form-group" style="margin-top: 10px;box-sizing: border-box">
                <buttong  type="submit" class="am-btn am-btn-default js-alert" style="background: rgba(0, 0, 0, -0.5);color: #f1f1f1;border-radius: 9px;box-sizing: border-box;">提交留言</buttong>
            </div>
        </form>
      </li>

      <a href="#" title="返回顶部" style="position: relative;right: -630px;top: 100px;">
        <img src="http://www.aisanhui.com/static/index/img/top.png" />
      </a>
      <div class="clear"></div>
    </ul>
   
    
</footer>


</body>
<script type="text/javascript">
	//点击导航栏样式切换
	var header=document.getElementById('shlist');
	var aLi=header.getElementsByTagName('a');
	var all=header.getElementsByTagName('li');

	//循环div下面所有的链接，
	for(var i=0;i<aLi.length;i++){
	  //获取每一个a标签的herf属性
	  var links = aLi[i].getAttribute("href");
	  var myurl = document.location.href;
	  //查看li下的链接是否包含当前窗口，如果存在，则给其添加样式
	  if(myurl.indexOf(links) != -1){
	  	for (var j = 0; j < all.length; j++) {
			all[j].className="";
		}
	    all[i].className="hw-menu-active";
	  }
	}
</script>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://www.aisanhui.com/static/index/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="http://www.aisanhui.com/static/index/js/amazeui.min.js"></script>
<script src="http://www.aisanhui.com/static/index/js/amazeui.dialog.min.js"></script>
<script>
  $('.js-alert').on('click', function(){
    var users=document.getElementById('user').value;
    var email=document.getElementById('email').value;
    var msg=document.getElementById('msg').value;
    if (users!=''&&email!=''&&msg!='') {
       AMUI.dialog.alert({
        title: '提示信息',
        content: '提交成功，感谢您的留言！'
      });
       document.getElementById('user').value=""
      document.getElementById('email').value=""
      document.getElementById('msg').value=""
       
    }else{
      AMUI.dialog.alert({
        title: '提示信息',
        content: '留言信息不可以为空，请认真填写！'
      });
    }
  });
</script>
</html>

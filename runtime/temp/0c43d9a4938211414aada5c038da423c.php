<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/www/wwwroot/company/public/../application/index/view/about/about.html";i:1558424679;s:62:"/www/wwwroot/company/application/index/view/common/header.html";i:1558401077;s:62:"/www/wwwroot/company/application/index/view/common/footer.html";i:1558423112;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>关于我们</title>
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
				<img src="http://www.aisanhui.com/static/index/img/about.png" class="toppic-title-i" style="position: relative;top:5px;" />
				<span class="toppic-title-span">关于我们</span>
			</div>
			<p>About Us</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('index/index/index'); ?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('index/about/index'); ?>" class="w-white">关于我们</a></span>
		</div>
	</div>
</div>

<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="#">
			<span class="part-title-span">关于三晖</span>
			<p>About Sanhui</p>
			</a>
		</div>
	<div class="company-intro" style="text-align: left;">
		<?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;
                $datas=explode('。',$vo['jianjie']);
                foreach ($datas as  $val){ ?>
                    <p class="jianjiep" style="text-indent: 2em;">
                    <?php echo $val.'。'; ?>
                    </p>
            <?php } endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
<div class="gray-li company-thought-all" >
	<div class=" am-container-1">
			<ul class="company-thought">
				<li >
				  <div class="thought-all">
				  	<div style="position: relative;top:6px;">
				  		<img src="http://www.aisanhui.com/static/index/img/idea.png" height="44" style="margin-bottom: 6px;">
					  	<span>企业理念</span>
					  	<div class="thought-all-none">
					  	    <h5>专注 专业</h5>
					    </div>
				  	</div>
				  </div>
				  
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-hand-o-right"></i>
				  	<span>服务理念</span>
				  	<div class="thought-all-none">
				  	    <h5>实务 用心</h5>
				    </div>
				  </div>	
				</li>
				<li >
				  <div class="thought-all">
				  	<i class="am-icon-bar-chart"></i>
				  	<span>发展方向</span>
				  	<div class="thought-all-none">
				  	    <h5>精益求精</h5>
				    </div>
				  </div>	
				</li>
				<div class="clear"></div>
			</ul>
		</div>
</div>

	

<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-home part-title-i"></i>
			<span class="part-title-span">办公环境</span>
			<p>Office Space</p>
			</a>
		</div>
	<div class="office-space">
		<?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	    	<div class="cam-u-lg-6 am-u-md-6 am-u-sm-12">
				<img class="news-ul-liimg" src="http://www.aisanhui.com/static<?php echo $vo['officeimg']; ?>"/>
			</div>
			<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
				<img src="http://www.aisanhui.com/static<?php echo $vo['officeimg2']; ?>"/>
			</div>
			<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
				<img src="http://www.aisanhui.com/static<?php echo $vo['officeimg3']; ?>"/>
			</div>
			<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
				<img src="http://www.aisanhui.com/static<?php echo $vo['officeimg4']; ?>"/>
			</div>
			<div class="cam-u-lg-3 am-u-md-3 am-u-sm-6">
				<img src="http://www.aisanhui.com/static<?php echo $vo['officeimg5']; ?>"/>
			</div>
		<?php endforeach; endif; else: echo "" ;endif; ?>
		<div class="clear"></div>
	</div>
	
</div>
</div>
<div class=" am-container-1">
	<div class="part-title part-title-mar">
			<a href="customer-case.html">
			<i class=" am-icon-comments-o part-title-i"></i>
			<span class="part-title-span">联系我们</span>
			<p>Contact Us</p>
			</a>
		</div>
</div>
<div class="gray-li">
<div class=" am-container-1">
	<div class="contact-us">
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	<a href="https://map.baidu.com/search/%E6%96%B9%E6%AD%A3%E6%99%BA%E8%B0%B7/@13445923.658236545,3655869.4279751186,18.93z?querytype=s&da_src=shareurl&wd=%E6%96%B9%E6%AD%A3%E6%99%BA%E8%B0%B7&c=224&src=0&wd2=%E8%8B%8F%E5%B7%9E%E5%B8%82%E8%8B%8F%E5%B7%9E%E5%B7%A5%E4%B8%9A%E5%9B%AD%E5%8C%BA&pn=0&sug=1&l=12&b=(13362680.33,3619945.01;13485560.33,3679977.01)&from=webmap&biz_forward=%7B%22scaler%22:1,%22styles%22:%22pl%22%7D&sug_forward=b7f6a94f25aea40a1ce99905&device_ratio=1">
		 		<img src="http://www.aisanhui.com/static/index/img/map.png" />
		 	</a>
		 </div>
		 <div class="am-u-lg-6 am-u-md-6 am-u-sm-12">
		 	 <ul class="contact-add">
		 	 	<?php if(is_array($about) || $about instanceof \think\Collection || $about instanceof \think\Paginator): $i = 0; $__LIST__ = $about;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
		 	 	<li>
		 	 		<div><i class=" am-icon-map-marker"></i><span class="contact-add-1"><?php echo $vo['address']; ?></span></div>
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-phone"></i><span><?php echo $vo['phone']; ?></span></div>		 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-mobile mobile"></i><span><?php echo $vo['telphone']; ?></span></div>	 	 		
		 	 	</li>
		 	 	<li>
		 	 		<div><i class=" am-icon-envelope-o"></i><span><?php echo $vo['email']; ?></span></div>		 	 		
		 	 	</li>
		 	 	<?php endforeach; endif; else: echo "" ;endif; ?>
		 	 </ul>	 	
		 </div>
		 <div class="clear"></div>
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
	var jianjiep=document.getElementsByClassName('jianjiep');
	var lastp=jianjiep[jianjiep.length-1];
	lastp.remove();
</script>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="http://www.aisanhui.com/static/index/js/jquery.min.js"></script>
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

<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"/www/wwwroot/company/public/../application/index/view/index/index.html";i:1558424697;s:62:"/www/wwwroot/company/application/index/view/common/header.html";i:1558401077;s:62:"/www/wwwroot/company/application/index/view/common/footer.html";i:1558423112;}*/ ?>
﻿<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>首页</title>
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
<style type="text/css">
  #product1,#product2,#product3,#product4{
    width: 170px;
    height: :170px;
    vertical-align: middle;
    border-radius: 6px;
    box-sizing: border-box;
  }
</style>

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


<div class="rollpic">
	 <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
	  <ul class="am-slides">
        <?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
	        <li><img src="http://www.aisanhui.com/static<?php echo $vo['imgurl']; ?>"/></li>
	      <?php endforeach; endif; else: echo "" ;endif; ?>
	  </ul>
    </div>
</div>

<div class="am-container-1">
	<div class="solutions part-all">
		<div class="part-title">
			<a href="solutions.html">
			<i class="am-icon-lightbulb-o part-title-i"></i>
			<span class="part-title-span">产品展示</span>
			<p>Product display</p>
			</a>
		</div>

		<ul class="am-g part-content solutions-content">
      <?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
  		  <li class="am-u-sm-6 am-u-md-3 am-u-lg-3">
          <img src="http://www.aisanhui.com/static<?php echo $vo['caseimg']; ?>" id="product1" class="solution-circle" style="border: 6px solid #f0f0f0;" />
  		  	<span class="solutions-title"><?php echo $vo['casename']; ?></span>
  		  	<p class="solutions-way"><?php echo $vo['casetype']; ?></p>
  		  </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		
	</div>
	</div>
	<div class="gray-li">
	<div class="customer-case part-all ">
		<div class="part-title">
			<a href="customer-case.html">
			<i class="am-icon-briefcase part-title-i"></i>
			<span class="part-title-span">客户案例</span>
			<p>Customer Case</p>
			</a>
		</div>
	
	
		 <ul data-am-widget="gallery" class=" am-avg-sm-1
  am-avg-md-4 am-avg-lg-4 am-gallery-bordered customer-case-content">
       <?php if(is_array($products) || $products instanceof \think\Collection || $products instanceof \think\Paginator): $i = 0; $__LIST__ = $products;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
          <li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
            <div class="am-gallery-item case-img1">
                <a href="#" >
                   <img src="http://www.aisanhui.com/static<?php echo $vo['caseimg']; ?>"/>
                </a>
            </div>
            <div class="case-li-mengban">
            	<div class="case-word" style="bottom:0;top:190px;">
                  <h3 class="am-gallery-title"><?php echo $vo['casename']; ?></h3>
                  <p class="am-gallery-title" style="color:#f1f1f1;"><?php echo substr($vo['createtime'],0,10); ?></p>
                  <p class="am-gallery-title" style="color:#f1f1f1;"><?php echo $vo['companyname']; ?></p>
               </div>
            </div>
          </li>
       <?php endforeach; endif; else: echo "" ;endif; ?>
       
      <!-- 下面数据是为了填充，显示页面效果 -->
      <li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
        <div class="am-gallery-item case-img1">
            <a href="#" >
              <img src="http://www.aisanhui.com/static/index/img/app5.png"  />              
            </a>
        </div>
        <div class="case-li-mengban">
        	<div class=" case-word">
              <h3 class="am-gallery-title">智众商城</h3>
              <p>2015-06-11</p>
              <p class="am-gallery-title" style="color:#f1f1f1;">苏州某某xxxx公司</p>
           </div>
        </div>
      </li>
      <li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
        <div class="am-gallery-item case-img1">
            <a href="#" >
              <img src="http://www.aisanhui.com/static/index/img/app6.png"  />                
            </a>
        </div>
        <div class="case-li-mengban">
        	<div class=" case-word">
              <h3 class="am-gallery-title">汇众商城</h3>
              <p>2015-06-11</p>
                <p class="am-gallery-title" style="color:#f1f1f1;">苏州某某xxxx公司</p>
           </div>
        </div>
      </li>
      <li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
        <div class="am-gallery-item case-img1">
            <a href="#" >
              <img src="http://www.aisanhui.com/static/index/img/app7.png"  />                
            </a>
        </div>
        <div class="case-li-mengban">
        	<div class=" case-word">
              <h3 class="am-gallery-title">无鞋网</h3>
              <p>2015-06-11</p>
              <p class="am-gallery-title" style="color:#f1f1f1;">苏州某某xxxx公司</p>
           </div>
        </div>
      </li>
      <li class="case-li am-u-sm-6 am-u-md-6 am-u-lg-3">
        <div class="am-gallery-item case-img1">
            <a href="#" >
              <img src="http://www.aisanhui.com/static/index/img/app8.png"  />               
            </a>
        </div>
        <div class="case-li-mengban">
        	<div class=" case-word">
              <h3 class="am-gallery-title">响应式商城</h3>
              <p>2015-06-11</p>
               <p class="am-gallery-title" style="color:#f1f1f1;">苏州某某xxxx公司</p>
           </div>
        </div>
      </li>

  </ul>

		<div class="lan-bott">
			<div class="left"><span>全方位解决方案,为您轻松解决不同问题</span>
				<p>A full range of solutions for you to solve different problems</p>
			</div>
			<div class="right">
				<a href="<?php echo url('index/custormcase/index'); ?>">
					<span class="see-more">查看更多<i class="am-icon-angle-double-right"></i></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="part-title">
		    	
		</div>
		</div>
</div>	
		
		
<div class=" news-all">
	<div class="am-container-1">
<div class="news part-all">
		<div class="part-title">
			<a href="news.html">
			   <div style="margin-top:9px;margin-bottom: 12px;">
        <img src="http://www.aisanhui.com/static/index/img/newsinfo2.png" style="height: 50px;width: 48px;position: relative;top:-4px;">
        <span class="toppic-title-span">新闻动态</span>
      </div>
			<p>Sanhui News</p>
			</a>
		</div>
		<div class="news-content ">
				<ul class="news-content-ul">
          <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li class="am-u-sm-12 am-u-md-6 am-u-lg-6">
						<a href="<?php echo url('index/newsdetail/index',array('id'=>$vo['id'])); ?>">
						    <div class=" am-u-sm-12 am-u-md-12 am-u-lg-5">
						    	<div class="news-img" style="width: 196px;height: 196px;">
						    	  <img src="http://www.aisanhui.com/static<?php echo $vo['newsimg']; ?>" style="width: 196px;height: 196px;border-radius: 4px;box-sizing: border-box;"/>
						    	</div>
						    </div>
						    <div  class=" am-u-sm-12 am-u-md-12 am-u-lg-7">
										<span class="news-right-title"><?php echo $vo['newstitle']; ?></span>
										<p class="news-right-time"><?php echo substr($vo['newstime'],0,10); ?></p>
										<p class="news-right-words">
                       <a href="#" title="<?php echo $vo['newscontent']; ?>"> <?php echo mb_substr($vo['newscontent'],0,50) ?>...</a>
                    </p>
										<a href="<?php echo url('index/newsdetail/index',array('id'=>$vo['id'])); ?>"><span class="see-more2">查看更多<i class="am-icon-angle-double-right"></i></span></a>
								</div>	
						    <div class="clear"></div>
						</a>
					</li>
				  <?php endforeach; endif; else: echo "" ;endif; ?>
					<div class="clear"></div>
				</ul>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>


<div class="part-all gray-li">
  <div class="customer  am-container-1">
  		<div class="part-title">
  			<i class="am-icon-users part-title-i"></i>
  			<span class="part-title-span">服务客户</span>
  			<p>Serve Customers</p>
  		</div>
  		
  		<div class="am-slider am-slider-default am-slider-carousel" data-am-flexslider="{itemWidth: 168, itemMargin: 10, slideshow: true,slideshowSpeed:2500}" style="background-color: #f0eeed; box-shadow:none;">
        <ul class="am-slides">
           <?php if(is_array($products2) || $products2 instanceof \think\Collection || $products2 instanceof \think\Paginator): $i = 0; $__LIST__ = $products2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><img src="http://www.aisanhui.com/static<?php echo $vo; ?>" style="width:168px;height:90px;"/></li>
           <?php endforeach; endif; else: echo "" ;endif; ?> 
           
        </ul>
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
      for (var j = all.length; j >0; j--){
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
<script src="http://www.aisanhui.com/static/index/js/scroll.js"></script>
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

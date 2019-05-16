<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:97:"D:\phpstudy\PHPTutorial\WWW\company\public/../application/index\view\custormcase\custormcase.html";i:1557972777;s:77:"D:\phpstudy\PHPTutorial\WWW\company\application\index\view\common\header.html";i:1557970862;s:77:"D:\phpstudy\PHPTutorial\WWW\company\application\index\view\common\footer.html";i:1557899793;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>客户案例</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=0,user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  
 <link rel="alternate icon" type="http://127.0.0.1/company/public/static/index/img/ashlogo.png" href="http://127.0.0.1/company/public/static/index/img/ashlogo.png">
  <link rel="stylesheet" href="http://127.0.0.1/company/public/static/index/css/amazeui.css"/>
  <link rel="stylesheet" href="http://127.0.0.1/company/public/static/index/css/style.css"/>
  
</head>
<style type="text/css">
          ul.pagination{
            margin: 20px;
          }
         ul.pagination li{
            display: inline-block;
            width: 40px;
            background-color: #fff;
            height: 30px;
             line-height: 30px;
             color: #fff;
             font-size: 16px;
             text-align: center;
             border: 1px solid #f1f1f1;
        }
         ul.pagination li.active{
             background-color: #199F93;
         }
        ul.pagination li.disabled{
            display: none;
        }
        div.current{
            display: block;
        }
</style>
<body>
<header class="am-topbar header">
	<div class="am-container-1">
	 <!-- 引入模板文件 -->
  <div class="left hw-logo">
  <img class="logo" src="http://127.0.0.1/company/public/static/index/img/sanhui1.png" style="height: 70px;margin-left: -40px;margin-top: -13px;"></img>
  <img class="word" src="http://127.0.0.1/company/public/static/index/img/sanhui2.png"></img>
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
			<i class="am-icon-briefcase toppic-title-i"></i>
			<span class="toppic-title-span">客户案例</span>
			<p>Customer Case</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('index/index/index'); ?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('index/custormcase/index'); ?>" class="w-white">客户案例</a></span>
		</div>
	</div>
</div>

<div class="am-container-1">
	 <ul data-am-widget="gallery" class="am-gallery am-avg-sm-1
  am-avg-md-3 am-avg-lg-4 am-gallery-bordered customer-case-ul" data-am-gallery="{  }" >
    <?php if(is_array($caselist) || $caselist instanceof \think\Collection || $caselist instanceof \think\Paginator): $i = 0; $__LIST__ = $caselist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      <li>
        <div class="am-gallery-item" style="height: 480px;">
            <a href="<?php echo url('index/casedetail/index',array('id'=>$vo['id'])); ?>">
            	<div class="customer-case-img" style="width: 227px;height: 227px;">
                <img class="product-img" src="http://127.0.0.1/company/public/static<?php echo $vo['caseimg']; ?>"/>
              </div>
                <h3 class="am-gallery-title"><?php echo $vo['casetype']; ?></h3>
                <div class="am-gallery-desc gallery-words">
                  <a href="<?php echo url('index/casedetail/index',array('id'=>$vo['id'])); ?>" title="<?php echo $vo['casecontent']; ?>"> <?php echo mb_substr($vo['casecontent'],0,70) ?>...</a>
                </div>
            </a>
        </div>
      </li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  <?php echo $page; ?>
	
</div>

<div class="part-all gray-li">
  <div class="customer  am-container-1">
  		<div class="part-title">
  			<i class="am-icon-users part-title-i"></i>
  			<span class="part-title-span">服务客户</span>
  			<p>Serve Customers</p>
  		</div>
  		
  		<div class="am-slider am-slider-default am-slider-carousel" data-am-flexslider="{itemWidth: 200, itemMargin: 10, slideshow: true,slideshowSpeed:2500}" style="background-color: #f0eeed; box-shadow:none;">
        <ul class="am-slides">
           <?php if(is_array($products2) || $products2 instanceof \think\Collection || $products2 instanceof \think\Paginator): $i = 0; $__LIST__ = $products2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li><img src="http://127.0.0.1/company/public/static<?php echo $vo; ?>" style="display: flex;justify-content: center;" /></li>
           <?php endforeach; endif; else: echo "" ;endif; ?> 
           
            <li><img src="http://127.0.0.1/company/public/static<?php echo $vo; ?>" style="flex: 1" /></li>
            <li><img src="http://127.0.0.1/company/public/static<?php echo $vo; ?>" style="flex: 1" /></li>
            <li><img src="http://127.0.0.1/company/public/static<?php echo $vo; ?>" style="flex: 1" /></li>
            <li><img src="http://127.0.0.1/company/public/static<?php echo $vo; ?>" style="flex: 1" /></li>
        </ul>
      </div>
  </div>
</div>

<!-- 引入模板文件 -->

<footer class="footer ">
    <ul>  
      <li class="am-u-lg-4 am-u-md-4 am-u-sm-12 part-5-li2">
          <div class="part-5-title">联系我们</div>
          <div class="part-5-words2">
              <span>地址:苏州市工业园区方正智谷1栋709</span>
              <span>电话:18238765101</span>
              <span>传真:(123) 456-7890</span>
              <span>邮箱:support@vectorlab.com</span>
              <span><i class="am-icon-phone"></i><em >027-82671661</em></span>
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
<script src="http://127.0.0.1/company/public/static/index/js/jquery.min.js"></script>
<script src="http://127.0.0.1/company/public/static/index/js/amazeui.min.js"></script>

</html>

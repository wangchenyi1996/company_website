<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"D:\phpstudy\PHPTutorial\WWW\company\public/../application/index\view\news\news.html";i:1557972898;s:77:"D:\phpstudy\PHPTutorial\WWW\company\application\index\view\common\header.html";i:1557970862;s:77:"D:\phpstudy\PHPTutorial\WWW\company\application\index\view\common\footer.html";i:1557899793;}*/ ?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>新闻动态</title>
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
  </div>
</header>
<div class="toppic">
	 <div class="am-container-1">
	 	<div class="toppic-title left">
			<!-- <i class="am-icon-newspaper-o toppic-title-i"></i> -->
			<div style="margin-top:9px;margin-bottom: 5px;">
				<img src="http://127.0.0.1/company/public/static/index/img/newsinfo.png" class="toppic-title-i" style="height:28px;">
				<span class="toppic-title-span">新闻动态</span>
			</div>
			<p>Hengwang News</p>
		</div>
		<div class="right toppic-progress">
			<span><a href="<?php echo url('index/index/index'); ?>" class="w-white">首页</a></span>
			<i class=" am-icon-arrow-circle-right w-white"></i>
			<span><a href="<?php echo url('index/news/index'); ?>" class="w-white">新闻动态</a></span>
		</div>
	</div>
</div>

	
<div class="am-container-1 news-content-all">
	<div class="left am-u-sm-12 am-u-md-8 am-u-lg-9 ">
	  <ul class="news-ul">

      <?php if(is_array($news) || $news instanceof \think\Collection || $news instanceof \think\Paginator): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($vo['newsimg'] != ''): ?>
  	  	<li class="am-u-sm-12 am-u-md-6 am-u-lg-4" style="height: 401px">
  	  		<a href="<?php echo url('index/newsdetail/index',array('id'=>$vo['id'])); ?>">
    	  		<div class="news-ul-liall">
              <img class="news-ul-liimg" src="http://127.0.0.1/company/public/static<?php echo $vo['newsimg']; ?>" style="height: 243px;width: 243px;border-radius: 4px;box-sizing: border-box;" />
    	  		  <span><?php echo $vo['newstitle']; ?></span>
    	  		  <p><?php echo mb_substr($vo['newscontent'],0,40); ?>...</p>
    	  	    <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
    	  	  </div>
  	  	  </a>
  	  	</li>
      <?php else: ?>
        <li class="am-u-sm-12 am-u-md-6 am-u-lg-4" style="height: 401px">
            <a href="<?php echo url('index/newsdetail/index',array('id'=>$vo['id'])); ?>">
              <div class="news-ul-liall">
                <span><?php echo $vo['newstitle']; ?></span>
                <p><?php echo mb_substr($vo['newscontent'],0,40); ?>...</p>
                <span class="see-more3">查看更多<i class="am-icon-angle-double-right"></i></span>
              </div>
            </a>
        </li>
      <?php endif; endforeach; endif; else: echo "" ;endif; ?>
	  	<div class="clear"></div>
		</ul>
    <?php echo $page; ?>
	
	</div>	  

<div class="left am-u-sm-12 am-u-md-4 am-u-lg-3">
	
	<section data-am-widget="accordion" class="am-accordion am-accordion-gapped" data-am-accordion='{  }'>
		<div class="hot-title"><i class="am-icon-thumbs-o-up"></i>最新动态</div>
      <?php if(is_array($hot) || $hot instanceof \think\Collection || $hot instanceof \think\Paginator): $k = 0; $__LIST__ = $hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;if($k == 1): ?>
       <dl class="am-accordion-item am-active">
        <dt class="am-accordion-title">
          <?php echo $vo['newstitle']; ?>
        </dt>
        <dd class="am-accordion-bd am-collapse am-in">
          <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
          <div class="am-accordion-content">
           <a href="<?php echo url('index/newsdetail/index',array('id'=>$vo['id'])); ?>" title="<?php echo $vo['newscontent']; ?>"> <?php echo mb_substr($vo['newscontent'],0,50) ?>...</a>
          </div>
        </dd>
      </dl>

         <?php else: ?>
          <dl class="am-accordion-item">
            <dt class="am-accordion-title">
              <?php echo $vo['newstitle']; ?>
            </dt>
            <dd class="am-accordion-bd am-collapse ">
              <!-- 规避 Collapase 处理有 padding 的折叠内容计算计算有误问题， 加一个容器 -->
              <div class="am-accordion-content">
                <a href="<?php echo url('index/newsdetail/index',array('id'=>$vo['id'])); ?>" title="<?php echo $vo['newscontent']; ?>"> <?php echo mb_substr($vo['newscontent'],0,50) ?>...</a>
              </div>
            </dd>
          </dl>

         <?php endif; endforeach; endif; else: echo "" ;endif; ?>
  </section>
	
</div>

<div class="clear"></div>
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
<!--<![endif]-->
<script src="http://127.0.0.1/company/public/static/index/js/amazeui.min.js"></script>

</html>

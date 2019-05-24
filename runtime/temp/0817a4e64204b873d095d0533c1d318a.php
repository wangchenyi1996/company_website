<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"/www/wwwroot/company/public/../application/admin/view/banner/banner-list.html";i:1558325124;s:62:"/www/wwwroot/company/application/admin/view/common/header.html";i:1558333979;}*/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
三晖科技后台管理系统        </title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="format-detection" content="telephone=no">
          <link rel="alternate icon" type="http://www.aisanhui.com/static/index/img/ashlogo.png" href="http://www.aisanhui.com/static/index/img/ashlogo.png">
        <link rel="stylesheet" href="http://www.aisanhui.com/static/admin/css/x-admin.css" media="all">
    </head>
    <style type="text/css">
         body{
            overflow: hidden;
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
        #img0 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
         
        #img0:hover {opacity: 0.7;}
         
        a{
            cursor: pointer;
        }
    </style>
    <body>
         <div class="layui-layout layui-layout-admin">
            ﻿<div class="layui-header header header-demo" style="height: 80px">
    <div class="layui-main">
        <a class="logo" href="<?php echo url('admin/index/index'); ?>" style="line-height: 75px">
            三晖科技后台管理系统 
         </a>
        <ul class="layui-nav" lay-filter="" style="line-height: 75px">
          <li class="layui-nav-item"><img src="http://www.aisanhui.com/static/admin/images/adminer.png" class="layui-circle" style="border: 2px solid #A9B7B7;" width="35px" alt=""></li>
          <li class="layui-nav-item">
            <a href="javascript:;"><?php echo \think\Request::instance()->session('username'); ?></a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
               <dd><a href="<?php echo url('index/index/index'); ?>">前台首页</a></dd>
               <dd><a href="<?php echo url('admin/adminer/edit',array('id'=>\think\Request::instance()->session('uid'))); ?>">修改密码</a></dd>
              <dd><a href="<?php echo url('admin/adminer/logout'); ?>">退出</a></dd>
            </dl>
          </li>
        
        </ul>
    </div>
</div>

 <div class="layui-side layui-bg-black x-side" style="top:99px">
    <div class="layui-side-scroll">
        <ul class="layui-nav layui-nav-tree site-demo-nav" lay-filter="side">

             <li class="layui-nav-item">
                <a class="javascript:;" >
                    <i class="layui-icon" style="top: 3px;font-size: 14px;">&#xe613;</i><cite>管理员管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="<?php echo url('admin/adminer/index'); ?>" _href="<?php echo url('admin/adminer/index'); ?>">
                            <cite>管理员列表</cite>
                        </a>
                    </dd>
                  
                </dl>
            </li>
           
            <li class="layui-nav-item">
                <a class="javascript:;" >
                    <i class="layui-icon" style="top: 3px;">&#xe634;</i><cite>轮播管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <dd class="">
                            <a href="<?php echo url('admin/banner/index'); ?>" _href="<?php echo url('admin/banner/index'); ?>">
                                <cite>轮播列表</cite>
                            </a>
                        </dd>
                    </dd>
                </dl>
            </li>
            
            <li class="layui-nav-item">
                <a class="javascript:;" >
                    <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>新闻管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="<?php echo url('admin/newsinfo/index'); ?>" _href="<?php echo url('admin/newsinfo/index'); ?>">
                            <cite>新闻列表</cite>
                        </a>
                    </dd>
                </dl>
            </li>

            <li class="layui-nav-item">
                <a class="javascript:;" >
                    <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>招聘管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="<?php echo url('admin/job/index'); ?>" _href="<?php echo url('admin/cases/index'); ?>">
                            <cite>招聘列表</cite>
                        </a>
                    </dd>
                </dl>
            </li>

            <li class="layui-nav-item">
                <a class="javascript:;" >
                    <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>产品案列管理</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="<?php echo url('admin/cases/index'); ?>" _href="<?php echo url('admin/cases/index'); ?>">
                            <cite>产品案列列表</cite>
                        </a>
                    </dd>
                </dl>
            </li>

            <li class="layui-nav-item">
                <a class="javascript:;" >
                    <i class="layui-icon" style="top: 3px;">&#xe630;</i><cite>关于我们</cite>
                </a>
                <dl class="layui-nav-child">
                    <dd class="">
                        <a href="<?php echo url('admin/aboutcompany/index'); ?>">
                            <cite>关于我们</cite>
                        </a>
                    </dd>
                </dl>
            </li>
            
            <li class="layui-nav-item" style="height: 30px; text-align: center">
            </li>
        </ul>
    </div>
</div>

            <div style="margin-left:220px;">
                <div class="x-nav">
                  <span class="layui-breadcrumb">
                      <a href="<?php echo url('admin/index/index'); ?>">首页</a>
                      <a href="<?php echo url('admin/banner/index'); ?>">轮播图列表</a>
                    </span>
                    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right"  href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
                </div>
                <div class="x-body">
                    <xblock><button class="layui-btn" onclick="window.location.href='<?php echo url('admin/banner/add'); ?>'"><i class="layui-icon">&#xe608;</i>添加</button><span class="x-right" style="line-height:40px">共有数据：<?php echo $count; ?> 条</span></xblock>
                    <table class="layui-table">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    缩略图
                                </th>
                               
                                <th>
                                    描述
                                </th>
                               
                                <th>
                                    操作
                                </th>
                            </tr>
                        </thead>
                        <tbody id="x-img">
                            <?php if(is_array($bannerlist) || $bannerlist instanceof \think\Collection || $bannerlist instanceof \think\Paginator): $i = 0; $__LIST__ = $bannerlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td>
                                       <?php echo $vo['id']; ?>
                                    </td>
                                    <td>                     
                                        <img src="http://www.aisanhui.com/static<?php echo $vo['imgurl']; ?>" width="200" height="80" id="img0">
                                    </td>
                                   
                                    <td >
                                       <?php echo $vo['imgcontent']; ?>
                                    </td>
                                  
                                    <td class="td-manage">
                                        <a title="编辑" href="<?php echo url('admin/banner/edit',array('id'=>$vo['id'])); ?>"
                                        class="ml-5" style="text-decoration:none;margin-right: 20px;">
                                            <i class="layui-icon">&#xe642;</i>编辑
                                        </a>

                                        <a title="删除" style="text-decoration:none" onclick="admin_del('<?php echo url('admin/banner/del',array('id'=>$vo['id'])); ?>')">
                                            <i class="layui-icon">&#xe640;</i>删除
                                        </a>
                                    </td>
                                </tr>
                           <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>

                    <!-- 分页 -->
                    <?php echo $page; ?>
                </div>
            </div>
            
            <div class="site-mobile-shade">
            </div>
        </div>
        
        <script src="http://www.aisanhui.com/static/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="http://www.aisanhui.com/static/admin/js/x-layui.js" charset="utf-8"></script>
        <script>
            layui.use(['laydate','element','laypage','layer'], function(){
              $ = layui.jquery;//jquery
              laydate = layui.laydate;//日期插件
              lement = layui.element();//面包导航
              layer = layui.layer;//弹出层

              //以上模块根据需要引入

                layer.ready(function(){ //为了layer.ext.js加载完毕再执行
                      layer.photos({
                        photos: '#x-img'
                        ,shift: 5 //0-6的选择，指定弹出图片动画类型，默认随机
                      });
                }); 
              
              
            });
           
           function admin_del(url){
                layer.confirm('确认要删除吗？',function(index){
                    window.location.href=url;
                    layer.close(index);
                    // return true;
                });
            }

        </script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>
    </body>
</html>
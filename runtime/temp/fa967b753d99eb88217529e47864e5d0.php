<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"/www/wwwroot/company/public/../application/admin/view/job/job-add.html";i:1558325125;s:62:"/www/wwwroot/company/application/admin/view/common/header.html";i:1558333979;}*/ ?>
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
             
            <div class="x-nav" style="margin-left:220px;">
                   <span class="layui-breadcrumb">
                      <a href="<?php echo url('admin/index/index'); ?>">首页</a>
                      <a href="<?php echo url('admin/job/index'); ?>">招聘列表</a>
                      <a href="<?php echo url('admin/job/add'); ?>">新增招聘岗位</a>
                    </span>
                    <a class="layui-btn layui-btn-small" style="line-height:1.6em;margin-top:3px;float:right" href="javascript:location.replace(location.href);" title="刷新"><i class="layui-icon" style="line-height:30px">ဂ</i></a>
            </div>

            <div class="x-body" style="margin-left:220px;">
                <form class="layui-form" method="post" action="">
                    <div class="layui-form-item">
                        <label for="link" class="layui-form-label">
                            <span class="x-red">*</span>招聘岗位
                        </label>
                        <div class="layui-input-inline" style="width:400px;">
                            <input type="text" id="title" name="jobtype" required="" lay-verify="required"
                            autocomplete="off" class="layui-input"  placeholder="请输入招聘岗位" oninput="newtitle()">
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label for="desc" class="layui-form-label">
                            <span class="x-red">*</span>招聘要求
                        </label>
                        <div class="layui-input-inline" style="width:400px;">
                            <textarea  id="desc" name="jobrequire" required="" lay-verify="required"
                            autocomplete="off" class="layui-input" style="height: 100px;line-height: 20px;"  placeholder="请输入招聘要求"></textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label for="desc" class="layui-form-label">
                            <span class="x-red">*</span>招聘描述
                        </label>
                        <div class="layui-input-inline" style="width:400px;">
                            <textarea  id="detail" name="jobtypedes" required="" lay-verify="required"
                            autocomplete="off" class="layui-input" style="height: 100px;line-height: 20px;"  placeholder="请输入招聘描述"></textarea>
                        </div>
                    </div>

                     <div class="layui-form-item">
                        <label for="link" class="layui-form-label">
                            <span class="x-red">*</span>招聘时间
                        </label>
                        <div class="layui-input-inline" style="width:400px;">
                          <input class="layui-input" placeholder="请选择时间" id="LAY_demorange_s" name="createtime" required="" lay-verify="required" autocomplete="off">
                        </div>
                       
                      </div>

                    <div class="layui-form-item">
                        <label for="desc" class="layui-form-label">
                            <span class="x-red">*</span>薪资
                        </label>
                        <div class="layui-input-inline" style="width:400px;">
                            <input name="money" required="" lay-verify="required"
                            autocomplete="off" class="layui-input" placeholder="请输入薪资"></input>
                        </div>
                    </div>

                     <div class="layui-form-item">
                        <label for="desc" class="layui-form-label">
                            <span class="x-red">*</span>福利待遇
                        </label>
                        <div class="layui-input-inline" style="width:400px;">
                            <textarea name="welfare" required="" lay-verify="required"
                            autocomplete="off" class="layui-input" placeholder="请输入福利待遇内容" style="height: 150px;line-height: 20px;">1.享有每周双休。
2.年终奖。
3.项目奖金/产品提成。
4.调休。
5.五险（养老、医疗、失业、工伤和生育保险）。
6.公司每1-2月举行聚餐。
7.工作时间 早上9:00-11:30下午1:00-5:30。
                            </textarea>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label for="L_repass" class="layui-form-label">
                        </label>
                        <button type="submit"  class="layui-btn" lay-filter="add" lay-submit="">
                            增加
                        </button>
                    </div>
                </form>
            </div>
            
            <div class="site-mobile-shade">
            </div>
        </div>
        
        <script src="http://www.aisanhui.com/static/admin/lib/layui/layui.js" charset="utf-8"></script>
        <script src="http://www.aisanhui.com/static/admin/js/x-layui.js" charset="utf-8"></script>
        <script src="http://www.aisanhui.com/static/admin/js/x-admin.js"></script>
        <script>
            layui.use(['form','layer','upload','laydate'], function(){
                $ = layui.jquery;
              var form = layui.form()
              ,layer = layui.layer,
               laydate = layui.laydate;//日期插件

               var start = {
                max: '2099-06-16 23:59:59'
                ,istoday: false
                ,choose: function(datas){
                  end.min = datas; //开始日选好后，重置结束日的最小日期
                  end.start = datas //将结束日的初始值设定为开始日
                }
              };
         
              document.getElementById('LAY_demorange_s').onclick = function(){
                start.elem = this;
                laydate(start);
              }
             
              
            });

            function newtitle(){
                var title=document.getElementById('title').value;
                if(title.length>30){
                    alert('新闻标题长度不可以大于30位')
                }
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
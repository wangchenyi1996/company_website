<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------



// Route::rule('路由表达式','路由地址','请求类型','路由参数（数组）','变量规则（数组）');


//参数路由
// Route::rule('test2/:name/[:age]','admin/index/test2');
//全动态路由(加$就是完全匹配路由)
// Route::rule(':name/:age$','admin/index/test3');

use think\Route;

//前台路由
	//前台首页
	Route::rule('/','index/index/index');
	//关于我们
	Route::rule('about','index/about/index');
	//产品展示
	Route::rule('product','index/product/index');
	//客户案例
	Route::rule('case','index/custormcase/index');
	//新闻动态
	Route::rule('news','index/news/index');
	//招贤纳士
	Route::rule('recruit','index/recruit/index');
	//案例详情
	Route::rule('newsdetail2','index/newsdetail/index');
	//新闻详情
	Route::rule('newsinform','index/newsinform/index');
	//案例详情
	Route::rule('casedetail','index/casedetail/index');


//后台路由
	//后台登陆
	Route::rule('login','admin/login/index');
	//退出登陆
	Route::rule('logout','admin/adminer/logout');
	//后台首页
	Route::rule('admin','admin/index/index');
	//后台欢迎页
	Route::rule('welcome','admin/index/welcome');

	//管理员列表
	Route::rule('adminlist','admin/adminer/index');
	//添加管理员
	Route::rule('adminadd','admin/adminer/add');
	//编辑管理员
	Route::rule('adminedit','admin/adminer/edit');
	//删除管理员
	Route::rule('admindel','admin/adminer/del');

	//轮播图列表
	Route::rule('bannerlist','admin/banner/index');
	//添加轮播图
	Route::rule('banneradd','admin/banner/add');
	//编辑轮播图
	Route::rule('banneredit','admin/banner/edit');
	//删除管理员
	Route::rule('bannerdel','admin/banner/del');

	//新闻列表
	Route::rule('newslist','admin/newsinfo/index');
	//添加新闻
	Route::rule('newsadd','admin/newsinfo/add');
	//编辑新闻
	Route::rule('newsedit','admin/newsinfo/edit');
	//删除新闻
	Route::rule('newsdel','admin/newsinfo/del');
	//新闻详情
	Route::rule('newsdetail','admin/newsinfo/newsdetail');

	//招聘信息列表
	Route::rule('joblist','admin/job/index');
	//添加招聘信息
	Route::rule('jobadd','admin/job/add');
	//编辑招聘信息
	Route::rule('jobedit','admin/job/edit');
	//删除招聘信息
	Route::rule('jobdel','admin/job/del');

	//产品案例列表
	Route::rule('caselist','admin/cases/index');
	//添加产品案例
	Route::rule('caseadd','admin/cases/add');
	//编辑产品案例
	Route::rule('caseedit','admin/cases/edit');
	//删除产品案例
	Route::rule('casedel','admin/cases/del');

	//关于公司信息
	Route::rule('aboutlist','admin/aboutcompany/index');
	//添加公司信息
	Route::rule('aboutadd','admin/aboutcompany/add');
	//编辑公司信息
	Route::rule('aboutedit','admin/aboutcompany/edit');
	//删除公司信息
	Route::rule('aboutdel','admin/aboutcompany/del');
	

<?php

namespace app\index\controller;
use think\Controller;
use think\Db;


class Product extends Controller
{
    public function index()
    {
    	//产品展示
        $productlist=Db::table('products')->select();
       	//渲染数据
        $this->assign('productlist',$productlist);
		 // 公司介绍
        $about=Db::table('aboutus')->order('ctime desc')->limit(1)->select();
        $this->assign('about',$about);

      	return $this->fetch('product');
    }

}

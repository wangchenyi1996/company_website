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

      	return $this->fetch('product');
    }

}

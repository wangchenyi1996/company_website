<?php
namespace app\index\controller;
use think\Controller;
use think\Db;


class Index extends Controller
{
    public function index()
    {
    	//轮播图
    	$banner=Db::table('slider')->order('id desc')->limit(3)->select();
       	//渲染数据
        $this->assign('banner',$banner);

        //产品展示1
        $products=Db::table('products')->order('createtime desc')->limit(4)->select();
       	//渲染数据
        $this->assign('products',$products);

        //最新l两条新闻动态
        $news=Db::table('news')->order('newstime desc')->limit(2)->select();
       	//渲染数据
        $this->assign('news',$news);

        //产品展示2(包括图标)
        $products2=Db::table('products')->column('caselogo');
        //渲染数据
        $this->assign('products2',$products2);

        // 公司介绍
        $about=Db::table('aboutus')->order('ctime desc')->limit(1)->select();
        $this->assign('about',$about);
        
     	return $this->fetch('index');
    }

}

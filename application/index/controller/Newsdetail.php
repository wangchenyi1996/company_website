<?php
namespace app\index\controller;
use think\Controller;
use think\Db;


class Newsdetail extends Controller
{
    public function index()
    {
    	//新闻详情
    	$id=input('id');
        $newsdetail=db('news')->find($id);
		
       	//渲染数据
        $this->assign('newsdetail',$newsdetail);
      	return $this->fetch('news/newsdetail');
    }

}

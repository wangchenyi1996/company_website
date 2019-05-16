<?php

namespace app\index\controller;
use think\Controller;
use think\Db;


class News extends Controller
{
    public function index()
    {
    	$news=Db::table('news')->order('newstime desc')->paginate(6);
        //获取总数
        $count= db('news')->count('id');
        $page = $news->render();
        $this->assign('page', $page);
        $this->assign('count', $count);
        $this->assign('news',$news);

        $hot=Db::table('news')->order('newstime desc')->limit(5)->select();
        $this->assign('hot', $hot);
        
      	return $this->fetch('news');
    }

}

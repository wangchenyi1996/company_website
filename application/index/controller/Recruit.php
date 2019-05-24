<?php

namespace app\index\controller;
use think\Controller;
use think\Db;


class Recruit extends Controller
{
    public function index()
    {
    	//招聘信息
        $joblist=Db::table('job')->select();
        //获取福利待遇内容
        $fuli=Db::table('job')->order('createtime desc')->limit(1)->column('welfare');
       	//渲染数据
        $this->assign('joblist',$joblist);
        $this->assign('fuli',$fuli);
		// 公司介绍
        $about=Db::table('aboutus')->order('ctime desc')->limit(1)->select();
        $this->assign('about',$about);
		
      	return $this->fetch('recruit');
    }

}

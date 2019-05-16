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
       	//渲染数据
        $this->assign('joblist',$joblist);
      	return $this->fetch('recruit');
    }

}

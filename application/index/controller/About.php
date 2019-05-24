<?php

namespace app\index\controller;
use think\Controller;
use think\Db;


class About extends Controller
{
    public function index()
    {
    	$about=Db::table('aboutus')->order('ctime desc')->limit(1)->select();
        $this->assign('about',$about);
      	return $this->fetch('about');
    }

}

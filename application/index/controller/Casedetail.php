<?php

namespace app\index\controller;
use think\Controller;
use think\Db;


class Casedetail extends Controller
{
    public function index()
    {
    	$id=input('id');
        $detail=db('products')->find($id);
		$this->assign('detail',$detail);
		 // 公司介绍
        $about=Db::table('aboutus')->order('ctime desc')->limit(1)->select();
        $this->assign('about',$about);
      	return $this->fetch('custormcase/casedetail');
    }

    
}

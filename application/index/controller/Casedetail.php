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
      	return $this->fetch('custormcase/casedetail');
    }

    
}

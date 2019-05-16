<?php

namespace app\index\controller;
use think\Controller;
use think\Db;


class Custormcase extends Controller
{
    public function index()
    {
    	//产品案列
        // $caselist=Db::table('products')->select();
        $caselist=Db::table('products')->order('createtime desc')->paginate(4);
        $page = $caselist->render();
        $this->assign('page', $page);
       	//渲染数据
        $this->assign('caselist',$caselist);


        //产品展示2(包括图标)
        $products2=Db::table('products')->column('caselogo');
        //渲染数据
        $this->assign('products2',$products2);

      	return $this->fetch('custormcase');
    }

}

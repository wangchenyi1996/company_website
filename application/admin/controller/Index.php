<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;

class Index extends Base
{
	//后台首页
    public function index()
    {
       return $this->fetch('index');
    }


    //后台欢迎页面
    public function welcome()
    {
       return $this->fetch('welcome');
    }

    

}

<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
    public function _initialize(){
        if(!session('username')){
            $this->error('请先登录后台管理系统！',url('admin/login/index'));
        }
    }
}

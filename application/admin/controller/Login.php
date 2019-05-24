<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Adminer;

class Login extends Controller
{
    public function index()
    {
    	if(request()->isPost()){
            $admin=new Adminer();
            $data=input('post.');
            // dump($data);
            $num=$admin->login($data);
            if($num==3){
                $this->success('登陆成功，请点击确定跳转...','admin/index/index');
            }
            else{
                $this->error('用户名或者密码错误');
            }

        }

    	return $this->fetch('login');
    }
}

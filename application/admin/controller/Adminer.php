<?php
namespace app\admin\controller;
use app\admin\model\Adminer as Adminers;
use app\admin\controller\Base;
use think\Db;

class Adminer extends Base
{	
	//管理员列表
    public function index()
    {   
       $adminlist=Db::table('users')->order('id')->paginate(5);
       //获取总数
       $count= db('users')->count('id');
       // dump($count);
       // 获取分页显示
        $page = $adminlist->render();
       $this->assign('adminlist',$adminlist);
       
        $this->assign('page', $page);
        $this->assign('count', $count);
       return $this->fetch('admin-list');
    }

    //新增管理员
    public function add()
    {
        
        if(request()->isPost()){

            $data=[
                'username'=>input('username'),
                'password'=>md5(input('password'))
            ];
            $validate = \think\Loader::validate('Adminer');
            if(!$validate->scene('add')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('users')->insert($data)){
                return $this->success('添加管理员成功！',url('admin/adminer/index'));
            }else{
                return $this->error('添加管理员失败！');
            }
            return;
        }
        return $this->fetch('admin-add');
    }

    //修改管理员
    public function edit()
    {
        $id=input('id');
        $admins=db('users')->find($id);
        // dump($admins);
        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'username'=>input('username')
            ];
            if(input('password')){
                $data['password']=md5(input('password'));
            }else{
                $data['password']=$admins['password'];
            }
           
		    $validate = \think\Loader::validate('Adminer');
            if(!$validate->scene('edit')->check($data)){
               $this->error($validate->getError()); die;
            }
			
            $save=Db::table('users')->update($data);
            // echo $save;
            if($save !== false){
                $this->success('修改管理员成功！',url('admin/adminer/index'));
            }else{
                $this->error('修改管理员失败！');
            }
        }
        $this->assign('admins',$admins);
        return $this->fetch('admin-edit');
    }

    //删除管理员
    public function del()
    {
    	$id=input('id');
        // echo $id;
       
        if(db('users')->delete($id)){
            $this->success('删除管理员成功！',url('admin/adminer/index'));
        }else{
            $this->error('删除管理员失败！');
        }
    }

     public function logout(){
        session(null);
        $this->success('退出登陆成功！',url('admin/login/index'));
    }

}

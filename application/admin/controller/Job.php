<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;

class Job extends Base
{	
	//招聘列表
    public function index()
    {
       $joblist=Db::table('job')->order('id')->paginate(3);
       //获取总数
       $count= db('job')->count('id');
       // 获取分页显示
       $page = $joblist->render();
       $this->assign('page', $page);
       $this->assign('joblist',$joblist);
       $this->assign('count', $count);
       return $this->fetch('job-list');
    }

    //新增招聘信息
    public function add()
    {
        if(request()->isPost()){
            $data=[
                'jobtype'=>input('jobtype'),
                'jobrequire'=>input('jobrequire'),
                'jobtypedes'=>input('jobtypedes'),
                'createtime'=>input('createtime'),
                'money'=>input('money')
            ];
            // dump($data);
            $validate = \think\Loader::validate('Job');
            if(!$validate->scene('add')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('job')->insert($data)){
                return $this->success('添加招聘岗位成功！',url('admin/job/index'));
            }else{
                return $this->error('添加招聘岗位失败！');
            }
            return;
        }
       return $this->fetch('job-add');
    }

    //修改招聘信息
    public function edit()
    {
        $id=input('id');
        $job=db('job')->find($id);

        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'jobtype'=>input('jobtype'),
                'jobrequire'=>input('jobrequire'),
                'jobtypedes'=>input('jobtypedes'),
                'createtime'=>input('createtime'),
                'money'=>input('money')
            ];
           
            $validate = \think\Loader::validate('Job');
            if(!$validate->scene('edit')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('job')->update($data)){
                 return $this->success('修改招聘信息成功！',url('admin/job/index'));
            }else{
                $this->error('修改招聘信息！');
            }
        }
        $this->assign('job',$job);
        return $this->fetch('job-edit');
    }

    //删除招聘信息
    public function del()
    {
       $id=input('id');
       
        if(db('job')->delete($id)){
            $this->success('删除招聘信息成功！',url('admin/job/index'));
        }else{
            $this->error('删除招聘信息失败！');
        }
    }


}

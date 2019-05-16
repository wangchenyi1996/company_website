<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;

class Banner extends Base
{	
	//轮播图列表
    public function index()
    {
       $bannerlist=Db::table('slider')->order('id')->paginate(3);
       //获取总数
       $count= db('slider')->count('id');
       // dump($count);
       // 获取分页显示
       $page = $bannerlist->render();
       $this->assign('page', $page);
       $this->assign('bannerlist',$bannerlist);
       $this->assign('count', $count);

       return $this->fetch('banner-list');
    }

    //新增轮播图
    public function add()
    {
        if(request()->isPost()){
            
            $data=[
                'imgcontent'=>input('desc')
            ];
           
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['imgurl']='/uploads/'.$info->getSaveName();
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getSaveName()."<br>";
                    
                    $validate = \think\Loader::validate('Banner');
                    if(!$validate->scene('add')->check($data)){
                       $this->error($validate->getError()); die;
                    }
                    if(db('slider')->insert($data)){
                        return $this->success('添加轮播图成功！',url('admin/banner/index'));
                    }else{
                        return $this->error('添加轮播图失败！');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }   
        }

        return $this->fetch('banner-add');
    }

    //修改轮播图
    public function edit()
    {
        $id=input('id');
        $banner=db('slider')->find($id);
        // dump($banner);

        if(request()->isPost()){
            $data=[
                'id'=>input('id'),
                'imgcontent'=>input('desc')
            ];
           
            if($_FILES['pic']['tmp_name']){
                $file = request()->file('pic');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['imgurl']='/uploads/'.$info->getSaveName();
            }
            $validate = \think\Loader::validate('Banner');
            if(!$validate->scene('edit')->check($data)){
               $this->error($validate->getError()); die;
            }
            if(db('slider')->update($data)){
                 return $this->success('修改轮播图成功！',url('admin/banner/index'));
            }else{
                $this->error('修改失败！');
            }
        }
        $this->assign('banner',$banner);
        return $this->fetch('banner-edit');
    }

    //删除轮播图
    public function del()
    {
    	$id=input('id');
       
        if(db('slider')->delete($id)){
            $this->success('删除轮播图成功！',url('admin/banner/index'));
        }else{
            $this->error('删除轮播图失败！');
        }
    }


}

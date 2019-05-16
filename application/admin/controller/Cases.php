<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;

class Cases extends Base
{	
	//产品案列列表
    public function index()
    {

       $caselist=Db::table('products')->order('id')->paginate(3);
       //获取总数
       $count= db('products')->count('id');
       $this->assign('count', $count);

       // 获取分页显示
       $page = $caselist->render();
       $this->assign('page', $page);

       $this->assign('caselist',$caselist);
      
       return $this->fetch('case-list');
    }

    //新增产品案列
    public function add()
    {
        if(request()->isPost()){      
            $data=[
                'casename'  =>input('casename'),
                'casetype'  =>input('casetype'),
                'caseurl'   =>input('caseurl'),
                'createtime' =>input('createtime'),
                'companyname' =>input('companyname'),
                'custormname' =>input('custormname'),
                'telphone' =>input('telphone'),
                'casecontent' =>input('casecontent')
            ];
           
            if($_FILES['photo']['tmp_name']){
                $files = request()->file('photo');
                foreach($files as $file){
                    // 移动到框架应用根目录/public/uploads/ 目录下
                    $info = $file->validate(['size'=>8192000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                    // $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                    //获取上传图片的文件名
                    if($info){
                        $hz=$info->getExtension(); 
                        if(in_array($hz, ['gif', 'jpg', 'jpeg', 'png'])){
                            $img[]='/uploads/'.$info->getSaveName();
                            if(count($img)>=2){
                                $data['caselogo']=$img[0];
                                $data['caseimg']=$img[1];
                            }
                        }
                    }else{
                       return $this->error('不支持上传此文件类型，请选择正确的图片类型！',url('admin/cases/add'));
                    }
                }
               
                $validate = \think\Loader::validate('Cases');
                if(!$validate->scene('add')->check($data)){
                   $this->error($validate->getError()); die;
                }
                if(db('products')->insert($data)){
                    return $this->success('添加产品案列成功！',url('admin/cases/index'));
                }else{
                    return $this->error('添加产品案列失败！');
                }
            }
        }
        return $this->fetch('case-add');
    }

    //修改产品案列
    public function edit()
    {
        $id=input('id');
        $caseitem=db('products')->find($id);
    
        if(request()->isPost()){
             $data=[
                'id'  =>input('id'),
                'casename'  =>input('casename'),
                'casetype'  =>input('casetype'),
                'caseurl'   =>input('caseurl'),
                'createtime' =>input('createtime'),
                'companyname' =>input('companyname'),
                'custormname' =>input('custormname'),
                'telphone' =>input('telphone'),
                'casecontent' =>input('casecontent')
            ];
           
            if($_FILES['photo']['tmp_name']){
                $files = request()->file('photo');
                foreach($files as $file){
                    // 移动到框架应用根目录/public/uploads/ 目录下
                    $info = $file->validate(['size'=>8192000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                    // $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                    //获取上传图片的文件名
                    if($info){
                        $hz=$info->getExtension(); 
                        if(in_array($hz, ['gif', 'jpg', 'jpeg', 'png'])){
                            $img[]='/uploads/'.$info->getSaveName();
                            if(count($img)>=2){
                                $data['caselogo']=$img[0];
                                $data['caseimg']=$img[1];
                            }
                        }
                    }else{
                       return $this->error('不支持上传此文件类型，请选择正确的图片类型！',url('admin/cases/add'));
                    }
                }
               
                $validate = \think\Loader::validate('Cases');
                if(!$validate->scene('edit')->check($data)){
                   $this->error($validate->getError()); die;
                }
                if(db('products')->update($data)){
                    return $this->success('修改案列成功！',url('admin/cases/index'));
                }else{
                    return $this->error('修改案列失败！');
                }
            }else{
                $data['caselogo']=$caseitem['caselogo'];
                $data['caseimg']=$caseitem['caseimg'];
                 $validate = \think\Loader::validate('Cases');
                if(!$validate->scene('edit')->check($data)){
                   $this->error($validate->getError()); die;
                }
                if(db('products')->update($data)){
                    return $this->success('修改案列成功！',url('admin/cases/index'));
                }else{
                    return $this->error('修改案列失败！');
                }

            }
        }
        $this->assign('caseitem',$caseitem);
       return $this->fetch('case-edit');
    }

    //删除产品案列
    public function del()
    {
    	
        $id=input('id');
       
        if(db('products')->delete($id)){
            $this->success('删除案列成功！',url('admin/cases/index'));
        }else{
            $this->error('删除案列失败！');
        }
    }


}

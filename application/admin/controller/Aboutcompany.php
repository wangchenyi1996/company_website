<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;

class Aboutcompany extends Base
{	
    public function index()
    { 

       $aboutlist=Db::table('aboutus')->order('id')->paginate(1);
       //获取总数
       $count= db('aboutus')->count('id');
       $this->assign('count', $count);

       // 获取分页显示
       $page = $aboutlist->render();
       $this->assign('page', $page);

       $this->assign('aboutlist',$aboutlist);
       return $this->fetch('aboutc-list');
    }

    public function add()
    {
        if(request()->isPost()){      
            $data=[
                'companyname'  =>input('companyname'),
                'persons'  =>input('persons'),
                'telphone'   =>input('telphone'),
                'phone' =>input('phone'),
                'address' =>input('address'),
                'email' =>input('email'),
                'jianjie' =>input('jianjie'),
                'ctime' =>input('ctime')
            ];
           
            if($_FILES['img']['tmp_name']){
                $files = request()->file('img');
                foreach($files as $file){
                    // 移动到框架应用根目录/public/uploads/ 目录下
                    $info = $file->validate(['size'=>8192000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'static/uploads');

                    //获取上传图片的文件名
                    if($info){
                        $hz=$info->getExtension(); 
                        if(in_array($hz, ['gif', 'jpg', 'jpeg', 'png'])){
                            $img[]='/uploads/'.$info->getSaveName();
                            if(count($img)>=5){
                                $data['officeimg']=$img[0];
                                $data['officeimg2']=$img[1];
                                $data['officeimg3']=$img[2];
                                $data['officeimg4']=$img[3];
                                $data['officeimg5']=$img[4];
                            }
                        }
                    }else{
                       return $this->error('不支持上传此文件类型，请选择正确的图片类型！',url('admin/aboutcompany/add'));
                    }
                }
               
              
                if(db('aboutus')->insert($data)){
                    return $this->success('添加公司信息成功！',url('admin/aboutcompany/index'));
                }else{
                    return $this->error('添加公司信息失败！');
                }
            }
        }
       
       return $this->fetch('aboutc-add');
    }

    public function edit()
    {
        $id=input('id');
        $aboutitem=db('aboutus')->find($id);
    
        if(request()->isPost()){
             $data=[
                'id'  =>input('id'),
                'companyname'  =>input('companyname'),
                'persons'  =>input('persons'),
                'telphone'   =>input('telphone'),
                'phone' =>input('phone'),
                'address' =>input('address'),
                'email' =>input('email'),
                'jianjie' =>input('jianjie'),
                'ctime' =>input('ctime')
            ];
           
            if($_FILES['img']['tmp_name']){
                $files = request()->file('img');
                foreach($files as $file){
                    $info = $file->validate(['size'=>8192000,'ext'=>'jpg,png,gif,jpeg'])->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                    if($info){
                        $hz=$info->getExtension(); 
                        if(in_array($hz, ['gif', 'jpg', 'jpeg', 'png'])){
                            $img[]='/uploads/'.$info->getSaveName();
                            if(count($img)>=5){
                                $data['officeimg']=$img[0];
                                $data['officeimg2']=$img[1];
                                $data['officeimg3']=$img[2];
                                $data['officeimg4']=$img[3];
                                $data['officeimg5']=$img[4];
                            }
                        }
                    }else{
                       return $this->error('不支持上传此文件类型，请选择正确的图片类型！',url('admin/aboutcompany/add'));
                    }
                }
               
              
                if(db('aboutus')->update($data)){
                    return $this->success('修改公司信息成功！',url('admin/aboutcompany/index'));
                }else{
                    return $this->error('修改公司信息失败！');
                }
            }else{
                $data['officeimg']=$aboutitem['officeimg'];
                $data['officeimg2']=$aboutitem['officeimg2'];
                $data['officeimg3']=$aboutitem['officeimg3'];
                $data['officeimg4']=$aboutitem['officeimg4'];
                $data['officeimg5']=$aboutitem['officeimg5'];
                
                if(db('abouts')->update($data)){
                     return $this->success('修改公司信息成功！',url('admin/aboutcompany/index'));
                }else{
                    return $this->error('修改案列失败！');
                }

            }
        }
        $this->assign('aboutitem',$aboutitem);

        return $this->fetch('aboutc-edit');
    }

    public function del()
    {
       $id=input('id');
       
        if(db('aboutus')->delete($id)){
            $this->success('删除公司信息成功！',url('admin/aboutcompany/index'));
        }else{
            $this->error('删除公司信息失败！');
        }
    }


}

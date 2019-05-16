<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use think\Db;

class Newsinfo extends Base
{	
	//新闻列表
    public function index()
    {
       date('Y-m-d',time());
       $newslist=Db::table('news')->order('id')->paginate(3);
       //获取总数
       $count= db('news')->count('id');
       // 获取分页显示
       $page = $newslist->render();
       $this->assign('page', $page);

       $this->assign('newslist',$newslist);
       $this->assign('count', $count);

       return $this->fetch('news-list');
    }

    //新增新闻
    public function add()
    {
        if(request()->isPost()){      
            $data=[
                'newstitle'  =>input('newstitle'),
                'newstime'   =>input('newstime'),
                'newscontent'=>input('newscontent'),
                'newsdetail' =>input('newsdetail')
            ];
            // dump($data);
           
            if($_FILES['newsimg']['tmp_name']){
                $file = request()->file('newsimg');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['newsimg']='/uploads/'.$info->getSaveName();
                if($info){
                    // 成功上传后 获取上传信息
                    // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                    // echo $info->getSaveName()."<br>";
                    $validate = \think\Loader::validate('Newsinfo');
                    if(!$validate->scene('add')->check($data)){
                       $this->error($validate->getError()); die;
                    }
                    if(db('news')->insert($data)){
                        return $this->success('添加新闻成功！',url('admin/newsinfo/index'));
                    }else{
                        return $this->error('添加新闻失败！');
                    }
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }else{
                $validate = \think\Loader::validate('Newsinfo');
                if(!$validate->scene('add')->check($data)){
                   $this->error($validate->getError()); die;
                }
                if(db('news')->insert($data)){
                    return $this->success('添加新闻成功！',url('admin/newsinfo/index'));
                }else{
                    return $this->error('添加新闻失败！');
                }
            }
        }
        return $this->fetch('news-add');
    }

    //修改新闻
    public function edit()
    {
        $id=input('id');
        $newslist=db('news')->find($id);
       
       if(request()->isPost()){      
            $data=[
                'id'         =>input('id'),
                'newstitle'  =>input('newstitle'),
                'newstime'   =>input('newstime'),
                'newscontent'=>input('newscontent'),
                'newsdetail' =>input('newsdetail')
            ];
            
            if($_FILES['newsimg']['tmp_name']){
                $file = request()->file('newsimg');
                $info = $file->move(ROOT_PATH . 'public' . DS . 'static/uploads');
                $data['newsimg']='/uploads/'.$info->getSaveName();
         
                // 成功上传后 获取上传信息
                // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                // echo $info->getSaveName()."<br>";
                $validate = \think\Loader::validate('Newsinfo');
                if(!$validate->scene('edit')->check($data)){
                   $this->error($validate->getError()); die;
                }
                if(db('news')->update($data)){
                    return $this->success('修改新闻成功！',url('admin/newsinfo/index'));
                }else{
                    return $this->error('修改新闻失败！');
                }
            }else{
                $data['newsimg']=$newslist['newsimg'];
                $validate = \think\Loader::validate('Newsinfo');
                if(!$validate->scene('edit')->check($data)){
                   $this->error($validate->getError()); die;
                }
                if(db('news')->update($data)){
                    return $this->success('修改新闻成功！',url('admin/newsinfo/index'));
                }else{
                    return $this->error('修改新闻失败！');
                }
            }
        }
          
        $this->assign('newslist',$newslist);
        return $this->fetch('news-edit');
    }

    //删除新闻
    public function del()
    {
    	$id=input('id');
       
        if(db('news')->delete($id)){
            $this->success('删除新闻成功！',url('admin/newsinfo/index'));
        }else{
            $this->error('删除新闻失败！');
        }
    }

    //新闻详情
    public function newsdetail()
    {   
       $id=input('id');
       $newsdetail=db('news')->find($id);
       $this->assign('newsdetail',$newsdetail);

       return $this->fetch('newsdetail');
    }


}

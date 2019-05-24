<?php
namespace app\admin\validate;
use think\Validate;
class Newsinfo extends Validate
{
    protected $rule = [
        'newstitle'   =>  'require|max:30|unique:news',
        'newscontent' =>  'require|max:256',
        'newsdetail'  =>  'require',
    ];

    protected $message  =   [
        'newstitle.require' => '新闻标题必须填写',
        'newstitle.max' => '新闻标题长度不得大于30位',
        'newstitle.unique' => '新闻标题名称不得重复',
        'newscontent.require' => '新闻简介必须填写',
         'newscontent.max' => '新闻简介长度不得大于256位',
        'newsdetail.require' => '新闻详情必须填写',

    ];

    protected $scene = [
        'add'  =>  ['newstitle'=>'require|max:30|unique:news','newscontent'=>'require|max:256','newsdetail'=>'require'],
        'edit'  => ['newstitle'=>'require|max:30|unique:news','newscontent'=>'require|max:256','newsdetail'=>'require']
    ];




}

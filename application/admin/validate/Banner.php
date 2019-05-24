<?php
namespace app\admin\validate;
use think\Validate;
class Banner extends Validate
{
   protected $rule = [
        'imgcontent'  =>  'require|max:30'
    ];

    protected $message  =   [
        'imgcontent.require' => '描述内容必须填写',
        'imgcontent.max' => '描述内容不能超过256字'
    ];

    protected $scene = [
        'add'  =>  ['imgcontent'=>'require|max:256'],
        'edit'  =>  ['imgcontent'=>'require|max:256']
    ];




}

<?php
namespace app\admin\validate;
use think\Validate;
class Banner extends Validate
{
    protected $rule = [
        'imgcontent'  =>  'require'
    ];

    protected $message  =   [
        'imgcontent.require' => '描述内容必须填写'
    ];

    protected $scene = [
        'add'  =>  ['imgcontent'],
        'edit'  =>  ['imgcontent']
    ];




}

<?php
namespace app\admin\validate;
use think\Validate;
class Cases extends Validate
{
    protected $rule = [
        'casename'   =>  'require|max:30|unique:products',
        'casetype' =>  'require|max:30',
        'companyname' =>  'require|max:30',
        'custormname' =>  'require|max:30',
        'telphone' =>  'require|max:20'
    ];

    protected $message  =   [
        'casename.require' => '案例名称必须填写',
        'casename.max' => '案例名称长度不得大于30位',
        'casename.unique' => '案例名称名称不得重复',
        'casetype.require' => '案例类型必须填写',
        'casetype.max' => '案例类型长度不得大于30位',
        'companyname.require' => '案例公司名称必须填写',
        'companyname.max' => '案例公司名称长度不得大于30位',
        'custormname.require' => '客户姓名必须填写',
        'custormname.max' => '客户姓名长度不得大于30位',
        'telphone.require' => '客户手机号码必须填写',
        'telphone.max' => '客户手机号码长度不得大于20位',

    ];

    protected $scene = [
        'add'  =>  ['casename'=>'require|max:30|unique:products','casetype'=>'require|max:30','companyname'=>'require|max:30','custormname'=>'require|max:30','telphone'=>'require|max:20'],
        'edit'  => ['casename'=>'require|max:30|unique:products','casetype'=>'require|max:30','companyname'=>'require|max:30','custormname'=>'require|max:30','telphone'=>'require|max:20']
    ];




}

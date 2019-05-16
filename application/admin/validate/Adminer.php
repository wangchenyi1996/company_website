<?php
namespace app\admin\validate;
use think\Validate;
class Adminer extends Validate
{
    protected $rule = [
        'username'  =>  'require|max:25|unique:users',
        'password' =>  'require|min:6',
    ];

    protected $message  =   [
        'username.require' => '管理员名称必须填写',
        'username.max' => '管理员名称长度不得大于25位',
        'username.unique' => '管理员名称不得重复',
        'password.require' => '管理员密码必须填写',
        'password.min' => '管理员密码最少为6位',

    ];

    protected $scene = [
        'add'  =>  ['username'=>'require|unique:users','password'],
        'edit'  =>  ['username'=>'require|unique:users','password'],
    ];




}

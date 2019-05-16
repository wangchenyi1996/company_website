<?php
namespace app\admin\validate;
use think\Validate;
class Job extends Validate
{
    protected $rule = [
        'jobtype'     =>  'require|max:30|unique:job',
        'jobrequire' =>  'require',
        'jobtypedes'  =>  'require',
    ];

    protected $message  =   [
        'jobtype.require' => '招聘岗位必须填写',
        'jobtype.max' => '招聘岗位长度不得大于30位',
        'jobtype.unique' => '招聘岗位名称不得重复',
        'jobrequire.require' => '招聘岗位要求必须填写',
        'jobtypedes.require' => '招聘岗位描述必须填写'

    ];

    protected $scene = [
        'add'  =>  ['jobtype'=>'require|max:30|unique:job','jobrequire'=>'require','jobtypedes'=>'require'],
        'edit'  => ['jobtype'=>'require|max:30|unique:job','jobrequire'=>'require','jobtypedes'=>'require']
    ];




}

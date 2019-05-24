<?php
return [

   'view_replace_str'  =>  [
	    '__PUBLIC__'=>SITE_URL.'/static/admin',
	    '__PUBLICI__'=>SITE_URL.'/static/index',
	    '__IMG__'=>SITE_URL.'/static'
    ],
	 // 默认跳转页面对应的模板文件
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => THINK_PATH . 'tpl' . DS . 'success.tpl',
    'dispatch_error_tmpl'    => THINK_PATH . 'tpl' . DS . 'error.tpl',

    
];

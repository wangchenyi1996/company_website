<?php

namespace app\index\controller;
use think\Controller;
use think\Db;


class About extends Controller
{
    public function index()
    {
      	return $this->fetch('about');
    }

}

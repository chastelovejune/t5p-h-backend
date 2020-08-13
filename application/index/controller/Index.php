<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        echo "你访问的是index模块下的index控制器index方法，你可以进行开发了！";
        return $this->fetch('index');
    }


}

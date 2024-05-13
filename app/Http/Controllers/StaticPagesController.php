<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    // 使用路由跳转至静态页面控制器传回主页视图
    public function home(){
        return view('static_pages/home');
    }
    // 使用路由跳转至静态页面控制器传回帮助视图
    public function help(){
        return view('static_pages/help');
    }
    // 使用路由跳转至静态页面控制器传回关于视图
    public function about(){
        return view('static_pages/about');
    }
}

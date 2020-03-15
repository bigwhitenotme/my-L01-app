<?php
/*
 * @Author: your name
 * @Date: 2020-03-15 08:59:36
 * @LastEditTime: 2020-03-15 09:28:07
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \Code\my-L01-app\app\Http\Controllers\StaticPagesController.php
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
        //return '这是主页';
        return view('static_pages/home');
    }
    public function help(){
        //return '这是帮助页面';
        return view('static_pages/help');
    }
    public function about(){
        //return '这是关于页';
        return view('static_pages/about');
    }
    public function test(){
        return '这是测试页';
    }
}

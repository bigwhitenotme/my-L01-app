<?php
/*
 * @Author: your name
 * @Date: 2020-03-15 13:03:10
 * @LastEditTime: 2020-03-15 13:04:20
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \Code\my-L01-app\app\Http\Controllers\UsersController.php
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function create(){
        return view('users.create');
    }
}

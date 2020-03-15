<?php
/*
 * @Author: your name
 * @Date: 2020-03-15 13:03:10
 * @LastEditTime: 2020-03-15 16:46:00
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \Code\my-L01-app\app\Http\Controllers\UsersController.php
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}

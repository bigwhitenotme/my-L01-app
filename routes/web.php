<?php
/*
 * @Author: your name
 * @Date: 2020-03-14 19:04:47
 * @LastEditTime: 2020-03-15 16:42:25
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \Code\my-L01-app\routes\web.php
 */
Route::get('/',    'StaticPagesController@home')->name('home');
Route::get('help', 'StaticPagesController@help')->name('help');
Route::get('about', 'StaticPagesController@about')->name('about');
//添加测试
Route::get('/test', 'StaticPagesController@test');
//
Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');

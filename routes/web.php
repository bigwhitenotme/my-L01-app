<?php
/*
 * @Author: your name
 * @Date: 2020-03-14 19:04:47
 * @LastEditTime: 2020-03-15 09:07:33
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \Code\my-L01-app\routes\web.php
 */
Route::get('/',    'StaticPagesController@home');
Route::get('help', 'StaticPagesController@help');
Route::get('about','StaticPagesController@about');
//添加测试
Route::get('/test','StaticPagesController@test');
//

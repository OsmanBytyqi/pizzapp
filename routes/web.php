<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizza', function () {

    $param=[
        'name'=>'Osman',
        'surname'=>'Bytyqi',
        'price'=>10
    ];
    
    return view('pizza',$param);
});

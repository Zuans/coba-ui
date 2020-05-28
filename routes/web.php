<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/greet', function(){
//     $nama = 'Juan Ewaldo';
//     return view('greet',[ 'nama' => $nama ]);
// });

// Route::get('/registrasi',function(){
//     return view('user.register');
// });

Route::get('/',function(){
    $halaman = 'Home';
    return view('index.home',[ 'halaman' => $halaman,]);
});

Route::get('/about',function(){
    $nama = request('nama');
    return view('index.about',compact('nama'));
});

Route::get('/contact',function(){
    return view('index.contact');
});
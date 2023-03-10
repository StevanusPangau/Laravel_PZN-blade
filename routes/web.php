<?php

use Illuminate\Http\Request;
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

// tes

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['name' => 'Laravel']);
});

Route::get('/world', function () {
    return view('hello.world', ['name' => 'World']);
});

Route::get('/html-encoding', function (Request $request) {
    return view('html-encoding', ['name' => $request->input('name')]);
});

Route::get('/disabled-blade', function () {
    return view('disabled', ['name' => "Evan"]);
});

Route::get('/each-once', function () {
    return view('each-once.each', ["users" => [
        [
            "name" => "Evan",
            "hobbies" => ["Coding", "Gaming"]
        ],
        [
            "name" => "Stevanus",
            "hobbies" => ["Coding", "Gaming"]
        ]
    ]]);
});

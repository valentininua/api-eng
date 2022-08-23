<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\DeskController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::get('/list/{message?}', function ($message = null) {
//    $msg = 'Example: /vn/good-bye';
//    if ($message != null) {
//        $msg = 'Hello, ' . $message;
//    }
//    // resources/views/hello.blade.php
//    return view('web', ['message' => $msg]);
//});


// Route::get('/desk/{message?}', 'DeskController@show');

Route::get('/', [DeskController::class, 'index']);

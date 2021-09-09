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

use App\Http\Controllers\UserController;
use App\Http\Controllers\SignUpController;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('signup', [SignUpController::class, 'get']);
Route::post('signup', [SignUpController::class, 'post']);
Route::get('user', [UserController::class, 'index']);
Route::get('user/{id}', [UserController::class, 'index']);

/*
Route::get('/', function () {
    $array[] = 'Ugur';
    $array[] = 'Can';
    $array[] = 'Yamurz';

    $array2['names'] = $array;
    return view('welcome', $array2);
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/user/{id}/{product}', function ($id,$product) {

    $arr['id'] = $id;
    $arr['product'] = $product;
    return view('user', $arr);
});

//Route::view('user', 'user');

Route::get('/user', function () {
    return redirect('/');
});
*/

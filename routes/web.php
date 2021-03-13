<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Contollers\Procontrol;

use App\Http\Controllers\ProControl;


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
    return view('hello');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('addpro',function () {
	return view('addproduct');
});

Route::get('allpro',function () {
	return view('allproducts');
});

// Inserting data in products table
// Route::post('submit,[Procontrol::class,'insertpro'])
Route::get('submit',[Procontrol::class,'insertpro']);

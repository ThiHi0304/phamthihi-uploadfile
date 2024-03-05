<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

//Bài 1:
// Route::post('/post', [FormController::class, 'post']);
// Route::get('/', function (){
//     return view('FormLogin');
//  });
//Bài 2:
Route::get('/', function (){
    return view('formUpload');
 });
Route::post('/',[FormController::class,'upload'])->name('form');

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OfficialController;
use App\User;
use App\Role;
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
     return view('official.index');
 });
 Route::get('/home', 'OfficialController@index')->name('home');
 Route::get('/resume', 'OfficialController@resume')->name('resume');
 Route::get('/projects', [OfficialController::class, 'projects'])->name('projects'); 
 Route::get('/insertproject', [OfficialController::class, 'insertproject'])->name('insertproject'); 
 Route::post('/saveproject', [OfficialController::class, 'saveproject'])->name('saveproject'); 


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
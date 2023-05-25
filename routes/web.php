<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\testFinalController;
use App\Http\Controllers\nameController;
use App\Http\Controllers\EAVERIFIER;
use App\Http\Controllers\ageController;
use App\Http\Controllers\yearverification;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PayerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;




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

Route::get('/P', function () {
    return view('welcome');
})->name('welcome');



Route::get('/name', function () {
    return 'Angelo';
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/gallery', function () {
    return view('gallery');
})->name('welcome');




    
Route::get('testing', [testFinalController::class, 'testFunction']);

Route::post('inputName',[nameController::class, 'Name']);
Route::get('inputName',[nameController::class, 'Name']);

Route::post('age',[ageController::class, 'age']);
Route::get('age',[ageController::class, 'age']);

Route::get('login2',[App\http\Controllers\yearverification::class, 'yearCheck'])-> middleware('check_year');






Route::get('/login', [LoginController::class,"showLogin"])->name('login');
Route::post('/login', [LoginController::class, "login"])->middleware('checklogin');

Route::get('/dashboard', function(){
    return view('dashboard');

})->name('dashboards');



Route::resource('employees',EmployeeController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', function () {
    return view('employees.index');

})->name('dashboard');
<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;

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
// Route::get('/login', function () {
//     return view('/auth/login');
// });
Route::get('/register', function () {
    return view('/auth/register');
});

Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::resource('employee', EmployeeController::class);
Route::get('/employeelist', [EmployeeController::class, 'show']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'login'])->name('login.custom');
Route::get('register', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'Register'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout'); 
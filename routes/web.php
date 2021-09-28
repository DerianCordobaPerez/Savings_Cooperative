<?php

use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRoleController;
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

Route::get('/login', [EmployeeAuthController::class, 'render_login'])->name('auth.employee.login');

Route::group([
    'prefix' => 'dev',
    'middleware' => ['auth']
], function() {

    Route::get('/', [HomeController::class, 'home'])->name('home');

    Route::resource('userRoles', UserRoleController::class);

    Route::resource('roles', RoleController::class);

    Route::resource('partners', PartnerController::class);

    Route::resource('requests', RequestController::class);

});

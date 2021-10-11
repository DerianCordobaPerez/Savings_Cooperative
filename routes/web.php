<?php

use App\Http\Controllers\Auth\AuthUserRoleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserRoleController;
use Illuminate\Support\Facades\Route;

Route::group([], function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');

    Route::post('login', [AuthUserRoleController::class, 'login'])->name('login');

    Route::group(['middleware' => 'auth:user_role'], function() {

        Route::get('/', [HomeController::class, 'home'])->name('home');

        Route::resources([
            'userRoles' => UserRoleController::class,
            'roles' => RoleController::class,
            'partners' => PartnerController::class,
            'requests' => RequestController::class,
            'products' => ProductController::class,
            'catalogs' => CatalogController::class
        ]);

        Route::get('logout', [AuthUserRoleController::class, 'logout'])->name('logout');

    });

});

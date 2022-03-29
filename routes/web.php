<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function(){
    /* Route::get(config('usercrud.urls.user-list', 'user'), function(){
        echo 'Hello from the user crud package!';
    }); */
    Route::get(config('usercrud.urls.user-list', 'admin/user'), [\Smiley\UserCrud\Http\Controllers\UserManagementController::class, 'index'])->name('usercrud::admin.user.index');
    Route::get(config('usercrud.urls.user-create', 'admin/user/create'), [\Smiley\UserCrud\Http\Controllers\UserManagementController::class, 'create'])->name('usercrud::admin.user.create');
    Route::post(config('usercrud.urls.user-create', 'admin/user/create'), [\Smiley\UserCrud\Http\Controllers\UserManagementController::class, 'store'])->name('usercrud::admin.user.create');
    Route::get(config('usercrud.urls.user-edit', 'admin/user/edit/{id}'), [\Smiley\UserCrud\Http\Controllers\UserManagementController::class, 'edit'])->name('usercrud::admin.user.edit');
    Route::put(config('usercrud.urls.user-edit', 'admin/user/edit/{id}'), [\Smiley\UserCrud\Http\Controllers\UserManagementController::class, 'update'])->name('usercrud::admin.user.edit');

    Route::get('forgot-password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgotPassword'])->middleware('guest')->name('password.request'); // forgot password page
});
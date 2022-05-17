<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
 * Created by : Elko Aditya
 */
Route::get('/', [\App\Http\Controllers\LandingController::class, 'index']);
Route::post('/form/register', [\App\Http\Controllers\LandingController::class, 'register']);
Route::get('/login', function () {
    if (\Illuminate\Support\Facades\Auth::user()){
        if (\Illuminate\Support\Facades\Auth::user()->role == 'superadmin'){
            return redirect('/superadmin/webinar')->with('notiv', json_encode([
                'status' => 'warning',
                'header' => 'Login with Session',
                'sub' => 'Selamat datang kembali '.Auth::user()->name,
            ]));
        }
    }
    return view('auth.login');
});

//Route::get('/admin/register', [\App\Http\Controllers\UserLoginController::class, 'AdminRegister']);
Route::get('/zoom', [\App\Http\Controllers\SettingController::class, 'zoom']);
Route::get('/email/test1', function () {
   return view('email.webinar');
});

// Route Untuk Login
Route::post('/login', [\App\Http\Controllers\UserLoginController::class, 'Login']);
Route::post('/logout', [\App\Http\Controllers\UserLoginController::class, 'Logout']);

Route::group(['middleware' => ['authrole:superadmin']], function () {
    Route::group(['prefix' => 'superadmin'], function (){
        Route::get('home', [\App\Http\Controllers\SuperadminController::class, 'Home']);

        Route::get('webinar', [\App\Http\Controllers\WebinarController::class, 'index']);
        Route::post('webinar/add', [\App\Http\Controllers\WebinarController::class, 'create']);
        Route::post('webinar/import', [\App\Http\Controllers\WebinarController::class, 'import']);
        Route::get('webinar/laporan', [\App\Http\Controllers\WebinarController::class, 'Laporan']);


        Route::get('webinar/{id}', [\App\Http\Controllers\WebinarController::class, 'view']);
        Route::post('webinar/delete', [\App\Http\Controllers\WebinarController::class, 'delete']);
    });
});




/**
 * Untuk All user Role
 */
Route::group(['middleware' => ['authrole:superadmin']], function () {
    Route::get('/user/setting', [\App\Http\Controllers\UserController::class, 'Setting']);
    Route::get('/user/security', [\App\Http\Controllers\UserController::class, 'SettingPassword']);
    Route::post('/user/setting/save', [\App\Http\Controllers\UserController::class, 'SaveSetting']);
    Route::post('/user/setting/savepassword', [\App\Http\Controllers\UserController::class, 'ChangePass']);
});
Route::get('/redirect/home', function (){
    if (Auth::user()->role == 'superadmin'){
        return redirect('/superadmin/home');
    }
    dd('cek route');
});

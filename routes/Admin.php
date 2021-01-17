<?php

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

Route::get('/Admin', function () {
    return "hellow admin";
});

/*Route::namespace('Front')->group(function (){
    //all route only access controller or methode in folder name Front
    Route::get('user',"UserController@ShowAdminName");
});*/

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


Route::group(['prefix'=>'/panel','as' => 'backend.','middleware'=>['auth']], function () {
    Route::resource('module', 'ModuleController');
});


Route::group(['prefix'=>'/module', 'as' => 'frontend.module.'], function () {
    Route::get('/', 'ModuleController@front')->name('front');
    Route::get('/{slug}', 'ModuleController@detail')->name('detail');


});



/*
Route::prefix('module')->group(function() {
    Route::get('/', 'ModuleController@index');
});
*/

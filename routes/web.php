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

Route::get('/', function () {
    return view('welcome');
});
Route::get('todos','TodosController@index')->name('todoss');
Route::get('todos-show/{todo}', 'TodosController@show');
Route::get('new-todos','TodosController@create');
Route::post('store-todos','TodosController@store');
Route::get('Edit/{id}','TodosController@edittodo');
Route::post('todos/{todo}/update-todos','TodosController@updatetodo');
Route::get('del/{id}','TodosController@destroy');
Route::get('edit/{id}','TodosController@edittodo');
// Route::get('del/{id}',function($id){
//     echo "user".$id;
// });



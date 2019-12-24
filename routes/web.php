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

Route::get('/', 'TasksController@index');

Route::resource('tasks', 'TasksController');

// Route::get('/', function () {
//     return view('welcome');
// });


// // CRUD
// // メッセージの個別詳細ページ表示
// Route::get('tasklists/{id}', 'TasklistsController@show');
// // メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
// Route::post('tasklists', 'TasklistsController@store');
// // メッセージの更新処理（編集画面を表示するためのものではありません）
// Route::put('tasklists/{id}', 'TasklistsController@update');
// // メッセージを削除
// Route::delete('tasklists/{id}', 'TasklistsController@destroy');

// // index: showの補助ページ
// Route::get('tasklists', 'TasklistsController@index')->name('tasklists.index');
// // create: 新規作成用のフォームページ
// Route::get('tasklists/create', 'TasklistsController@create')->name('tasklists.create');
// // edit: 更新用のフォームページ
// Route::get('tasklists/{id}/edit', 'TasklistsController@edit')->name('tasklists.edit');


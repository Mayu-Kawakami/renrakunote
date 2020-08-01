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

Route::group(['middleware' => 'auth'], function() {
    Route::get('admin/', 'Admin\MypageController@index'); //保護者マイページ(子どものプロフィール)
    Route::get('admin/create', 'Admin\MypageController@add');  
    Route::post('admin/create', 'Admin\MypageController@create');
    Route::get('admin/edit', 'Admin\MypageController@edit');
    Route::post('admin/edit', 'Admin\MypageController@update');
    Route::get('admin/delete', 'Admin\MypageController@delete');
    Route::get('admin/renraku/create', 'Admin\RenrakuController@add'); //保護者からの連絡ノート投稿
    Route::post('admin/renraku/create', 'Admin\RenrakuController@create');
    Route::get('admin/renraku', 'Admin\RenrakuController@index'); 
    Route::get('admin/renraku/edit', 'Admin\RenrakuController@edit');
    Route::post('admin/renraku/edit', 'Admin\RenrakuController@update');
    Route::get('renraku/', 'JournalController@index'); //連絡ノート一覧(今日のできごと)
    Route::get('notice/', 'NoticeController@index'); //お知らせ一覧
});

Route::get('notice/create', 'NoticeController@add'); //お知らせ投稿
Route::post('notice/create', 'NoticeController@create');
Route::get('notice/', 'NoticeController@index'); //お知らせ一覧
Route::get('notice/edit', 'NoticeController@edit'); //お知らせ編集
Route::post('notice/edit', 'NoticeController@update'); 
Route::get('notice/delete', 'NoticeController@delete');
Route::get('renraku/create', 'JournalController@add'); //今日のできごと(保育園から)連絡ノート投稿
Route::post('renraku/create', 'JournalController@create'); 
Route::get('renraku/edit', 'JournalController@edit');
Route::post('renraku/edit', 'JournalController@update');
Route::get('renraku/delete', 'JournalController@delete');




Route::get('/', 'ToppageController@index')->middleware('auth'); //トップページ
Route::get('osirase/', 'OsiraseController@index'); //保護者が見るお知らせ一覧
Route::get('dekigoto/', 'DekigotoController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

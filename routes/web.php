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
    Route::get('admin/', 'Admin\MypageController@index'); //保護者マイページ
    Route::get('admin/create', 'Admin\MypageController@add');  //プロフィール登録
    Route::get('admin/edit', 'Admin\MypageController@edit');  //プロフィール
    Route::get('admin/renraku/create', 'Admin\MypageController@create'); //保護者からの連絡ノート投稿
    Route::get('renraku/', 'JournalController@index'); //連絡ノート一覧(今日のできごと)
    Route::get('notice/', 'NoticeController@index'); //お知らせ一覧
});

Route::get('notice/create', 'NoticeController@add'); //お知らせ投稿
Route::post('notice/create', 'NoticeController@create'); //お知らせ投稿

Route::get('notice/edit', 'NoticeController@edit'); //お知らせ編集
Route::post('notice/create', 'NoticeController@create'); //お知らせ投稿
Route::get('notice/', 'NoticeController@index'); //お知らせ一覧
Route::get('renraku/create', 'JournalController@add'); //今日のできごと(保育園から)連絡ノート投稿
Route::post('renraku/create', 'JournalController@create'); //お知らせ投稿


Route::get('/', 'ToppageController@index')->middleware('auth'); //トップページ



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

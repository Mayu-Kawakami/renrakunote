<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //お知らせ投稿
    public function create()
    {
        return view('notice.create');
    }
    
    //お知らせ編集
    public function edit()
    {
        return view('notice.edit');
    }
    
    //お知らせ一覧
    public function index()
    {
        return view('notice.index');
    }
    
    //(保育園から)連絡ノート投稿
    public function renraku()
    {
        return view('renraku.create');
    }
}

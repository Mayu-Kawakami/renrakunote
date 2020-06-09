<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JournalController extends Controller
{
    //今日のできごと(保育園から)連絡ノート投稿
    public function add()
    {
        return view('renraku.create');
    }
    
        //今日のできごと（園からの）連絡ノート一覧
    public function index()
    {
        return view('renraku.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MypageController extends Controller
{
    //保護者マイページ
    public function index()
    {
        return view('admin.index');
    }
    
    //プロフィール登録
    public function add()
    {
        return view('admin.create');
    }
    
    //プロフィール編集
    public function edit()
    {
        return view('admin.edit');
    }
    
    //連絡ノート投稿
    public function create()
    {
        return view('admin.renraku.create');
    }
    

}

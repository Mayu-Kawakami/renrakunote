<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Notice;

class OsiraseController extends Controller
{
    //
    public function index(Request $request)
    {
        $posts = Notice::all()->sortByDesc('updated_at');
        return view('osirase.index', ['posts' => $posts]);
    }
}

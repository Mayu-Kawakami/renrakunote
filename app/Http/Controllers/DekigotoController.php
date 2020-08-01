<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Journal;

class DekigotoController extends Controller
{
    //
    public function index(Request $request)
    {
        $posts = Journal::all()->sortByDesc('updated_at');
        return view('dekigoto.index', ['posts' => $posts]);
    }
}

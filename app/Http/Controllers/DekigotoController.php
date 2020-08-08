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
        $allposts = Journal::all()->sortByDesc('updated_at');
        $date = $allposts[0]->created_at;
        $posts = Journal::whereDate('created_at', $date->isoformat('Y-MM-DD'))->get();
        return view('dekigoto.index', ['posts' => $posts, 'date' => $date]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
use App\Toppage;

class ToppageController extends Controller
{
    //
    public function index()
    {
        return view('top');
    }
}

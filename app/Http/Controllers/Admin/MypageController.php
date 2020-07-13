<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;

class MypageController extends Controller
{
    //子どものプロフィール登録
    public function add()
    {
        return view('admin.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
       
        $profile = new Profile;
        $form = $request->all();

        unset($form['_token']);
        
        $profile->fill($form);
        $profile->save();
        
        
        return redirect('admin/create');
    }
    
    public function index(Request $request)
    {
        $posts = Profile::all();
        
        return view('admin.index', ['posts' => $posts]);
    }
    
    public function edit(Request $request)
    {
        $profile = Profile::find($request->id);
        
        return view('admin.edit', ['profile_form' => $profile]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $profile = Profile::find($request->id);
        $profile_form = $request->all();
        unset($profile_form['_token']);
        
        $profile->fill($profile_form)->save();
        
        return redirect('admin');
    }
}

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
    
}

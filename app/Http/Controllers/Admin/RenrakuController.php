<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RenrakuController extends Controller
{
    public function add()
    {
        return view('admin.renraku.create');
    }
    
    //連絡ノート投稿
    public function create(Request $request)
    {
        $this->validate($request, Note::$rules);
        
         $note = new Note;
         $form = $request->all();
         
         
         if ($form->medicine == 'あり'){
            $this->validate($request, Note::$sub_rules); 
         }
         
         unset($form['_token']);
         
         $note->fill($form);
         $note->save();

        return redirect('admin/renraku/create');
    }
}

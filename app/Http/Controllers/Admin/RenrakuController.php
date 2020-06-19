<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Note;

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
         
         unset($form['_token']);
         
         $note->fill($form);
         $note->save();

        return redirect('admin/renraku/create');
    }
    
    public function edit(Request $request)
    {
        $note = Note::find($request->id);
        if(empty($note)){
            abort(404);
        }
        return view('admin.renraku.edit', [$note_form => $note]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Note::$rules);
        if ($form->medicine == 'あり'){
            $this->validate($request, Note::$sub_rules);
        }    
        $note = Note::find($request->id);
        $note_form = $request->all();
        unset($note_form['_token']);
        
        $note->fill($note_form)->save();
        
        return redirect('admin/renraku');
    }
    
    public function index(Request $request)
    {
        return view('admin.renraku.index');
    }
}

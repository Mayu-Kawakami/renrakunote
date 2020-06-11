<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Journal;

class JournalController extends Controller
{
    //今日のできごと(保育園から)連絡ノート投稿
    public function add()
    {
        return view('renraku.create');
    }
    
    public function create(Request $request)
    {
      $this->validate($request, Journal::$rules);
      $journal = new Journal;
      $form = $request->all();
      
      unset($form['_token']);
      
      $journal->fill($form);
      $journal->save();
      
       return redirect('renraku/create');
    }
      
    
    //今日のできごと（園からの）連絡ノート一覧
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
           $posts = Journal::where('title', $cond_title)->get();
      } else {
            $posts = Journal::all();
      } 
        return view('renraku.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    //今日のできごと（園からの）連絡ノート編集
    public function edit(Request $request)
    {
        $journal = Journal::find($request->id);
        if (empty($journal)) {
        abort(404);    
      }
      return view('renraku.edit', ['journal_form' => $journal]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Journal::$rules);
        $journal = Journal::find($request->id);
        $journal_form = $journal->all();
        unset($journal['_token']);
        
        $journal->fill($journal_form)->save();
        
        return redirect('renraku');
    }
    
     public function delete(Request $request)
     {
         $journal = Journal::find($request->id);
         
         $journal->delete();
         return redirect('renraku');
     }

}

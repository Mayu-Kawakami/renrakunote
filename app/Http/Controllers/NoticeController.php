<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Notice;


class NoticeController extends Controller
{
    //お知らせ投稿
     public function add()
  {
      return view('notice.create');
  }
    public function create(Request $request)
    {
        $this->validate($request, Notice::$rules);
        
        $notice = new Notice;
        $form = $request->all();
        
        unset($form['_token']);
        
        $notice->fill($form);
        $notice->save();
        
        return redirect('notice/create');
    }
    
    
    //お知らせ一覧
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Notice::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Notice::all();
      }
      return view('notice.index', ['posts' => $posts, 'cond_title' => $cond_title]);    
        
    }
    
    //お知らせ編集
    public function edit(Request $request)
    {
        $notice = Notice::find($request->id);
        if (empty($notice)) {
        abort(404);    
      }
        return view('notice.edit', ['notice_form' => $notice]);
    }
    
     public function update(Request $request)
     {
        $this->validate($request, Notice::$rules);
        $notice = Notice::find($request->id);
         
        $notice_form = $request->all();
        unset($notice_form['_token']);
        
        $notice->fill($notice_form)->save();
        
        return redirect('notice');
     }
     
     //お知らせ削除
     public function delete(Request $request)
     {
         $notice = Notice::find($request->id);
         $notice->delete();
         
         return redirect('notice');
     }


}

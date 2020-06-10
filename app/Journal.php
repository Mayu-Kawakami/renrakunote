<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    //今日のできごと（園からの連絡ノート投稿）
    protected $guarded = array('id');
    // 以下を追記
    public static $rules = array(
        'year' => 'required',
        'body' => 'required',
    );
}

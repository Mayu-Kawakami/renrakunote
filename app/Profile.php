<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'nickname' => 'required',
        'gender' => 'required',
        'birthday' => 'required',
        );
        
    public function notes()
    {
        return $this->hasMany('App\Note');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'taion' => 'required',
        'breakfast' => 'required',
        'ben' => 'required',
        'medicine' => 'required',
    );
}

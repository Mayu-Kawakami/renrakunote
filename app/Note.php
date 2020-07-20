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
        'hospital' => 'required',
    );
    
    public static $sub_rules = array(
        'hospital' => 'required',
        'symptom' => 'required',
        'time' => 'required',
        'type' => 'required',
    ); 
}

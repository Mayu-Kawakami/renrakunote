<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $dates = [display_date];
    
    protected $guarded = array('id');
    //
    public static $rules = array(
        'taion' => 'required',
        'breakfast' => 'required',
        'ben' => 'required',
        'medicine' => 'required',
    );
    
    public static $sub_rules = array(
        'hospital' => 'required',
        'symptom' => 'required',
        'time' => 'required',
        'type' => 'required',
    ); 
}

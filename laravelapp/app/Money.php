<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    //
    protected $table = 'money';
    protected $guarded = array('id');

    public static $rules = array(
        'name'=>'required',
        'age'=>'integer|min:0|max:150',
        'mail'=>'email',
        'totalAssets'=>'numeric',
        'investmentPrincipal'=>'numeric',
        'annuaIncome'=>'numeric',
    );
}

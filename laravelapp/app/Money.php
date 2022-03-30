<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    public function getData(){
        return $this->id.':'.$this->name.'('.$this->age.')';

    }

}

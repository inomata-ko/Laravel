<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Money_Controller extends Controller
{
    //
    public function index(Request $request){
        $hasItems = Money::has('boards')->get();
        $noItems = Money::doesntHave('boards')->get();
        $param = ['hasItems' => $hasItems, 'noItems'=>$noItems];

        return view('money.index',$param);
    }

}

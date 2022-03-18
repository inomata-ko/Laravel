<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class Jissyu6_1Controller extends Controller
{
    public function index(Request $request)
    {
        $items = ___(5)___;
        $param = ___(6)___;
        return view('jissyu6_1.index', ___(7)___);
    }
    public function find(Request $request)
    {
        $item = ___(8)___;
        return view('___(9)___', ['item' => $item]);
    }
}

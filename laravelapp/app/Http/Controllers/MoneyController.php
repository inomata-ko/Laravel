<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Money;

class MoneyController extends Controller
{
    //
    public function index(Request $request){
        $user = Auth::user();
        $items = DB::table('money')
        ->whereRaw('? = name and ? = mail',[$user->name, $user->email])
        ->get();

        $param = ['items'=> $items,'user'=>$user];

        return view('money.index',$param);

    }

    public function show(Request $request){
        $user = Auth::user();
        $items = DB::table('money')
        ->whereRaw('? = name and ? = mail',[$user->name, $user->email])
        ->get();

        $param = ['items'=> $items,'user'=>$user];

        return view('money.show',$param);
    }

    public function add(Request $request){
        return view('money.input');
    }

    public function create(Request $request){
        $param =[
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
            'totalAssets' => $request->totalAssets,
            'investmentPrincipal' => $request->investmentPrincipal,
            'annuaIncome' => $request->annuaIncome,
        ];
        DB::table('money')
        ->insert($param);
        return redirect('/money');
    }

    public function edit(Request $request){
        $item = DB::table('people')
        ->where('id',$request->id)
        ->first();
        return view('hello.edit',['form'=>$item]);
    }

    public function update(Request $request){
        $param=[
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];
        DB::table('people')
        ->where('id',$request->id)
        ->update($param);
        return redirect('/hello');
    }

}

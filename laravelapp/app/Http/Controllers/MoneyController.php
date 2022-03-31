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
        $param = ['user'=>$user];

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
        return view('money.add');
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
        $user = Auth::user();
        $items = DB::table('money')
        ->whereRaw('? = name and ? = mail',[$user->name, $user->email])
        ->get();
        return view('money.edit',['items'=>$items,'user'=>$user]);
    }

    public function update(Request $request){
        $user = Auth::user();
        $param =[
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
            'totalAssets' => $request->totalAssets,
            'investmentPrincipal' => $request->investmentPrincipal,
            'annuaIncome' => $request->annuaIncome,
        ];
        DB::table('money')
        ->whereRaw('? = name and ? = mail',[$user->name, $user->email])
        ->update($param);
        return redirect('/money');
    }
}

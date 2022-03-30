<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoneyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param=[
            'name'=>'あいうえお',
            'age'=>28,
            'mail'=>'qwe@asd',
            'totalAssets'=>'1000',//総資産額(万円)
            'investmentPrincipal'=>'800',//投資元本(万円)
            'annuaIncome'=>'400',//年収(万円)
        ];
        DB::table('money')->insert($param);

        $param=[
            'name'=>'たくみ',
            'age'=>22,
            'mail'=>'zxc@vbnm',
            'totalAssets'=>'200',//総資産額(万円)
            'investmentPrincipal'=>'40',//投資元本(万円)
            'annuaIncome'=>'300',//年収(万円)
        ];
        DB::table('money')->insert($param);

        $param=[
            'name'=>'ゆうた',
            'age'=>25,
            'mail'=>'asd@@fghj',
            'totalAssets'=>'500',//総資産額(万円)
            'investmentPrincipal'=>'60', //投資元本(万円)
            'annuaIncome'=>'300',//年収(万円)
        ];
        DB::table('money')->insert($param);

    }
}

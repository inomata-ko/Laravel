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
            'name'=>'五条',
            'age'=>28,
            'mail'=>'gojou@5',
            'totalAssets'=>'1000',
            'investmentPrincipal'=>'800',
            'annuaIncome'=>'400',
        ];
        DB::table('money')->insert($param);

        $param=[
            'name'=>'山田',
            'age'=>22,
            'mail'=>'yamada@^',
            'totalAssets'=>'200',
            'investmentPrincipal'=>'40',
            'annuaIncome'=>'300',
        ];
        DB::table('money')->insert($param);

    }
}

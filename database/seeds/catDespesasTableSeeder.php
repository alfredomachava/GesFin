<?php

use Illuminate\Database\Seeder;

class catDespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('cat_despesas')->insert([
            'name' => 'Alimentação'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Despesas Pessoais'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Dívidas'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Impostos e Taxas'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Lazer'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Moradia'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Outros'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Renda'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Saúde'
        ]);
		DB::table('cat_despesas')->insert([
            'name' => 'Transporte'
        ]);
		
    }
}

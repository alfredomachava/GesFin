<?php

use Illuminate\Database\Seeder;

class tipoLacamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('tipo_lacamentos')->insert([
            'name' => 'Despesa'
        ]);
		DB::table('tipo_lacamentos')->insert([
            'name' => 'Receita'
        ]);
		DB::table('tipo_lacamentos')->insert([
            'name' => 'Transferência'
        ]);
    }
}

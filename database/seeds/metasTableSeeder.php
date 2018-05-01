<?php

use Illuminate\Database\Seeder;

class metasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '1',
        ]);
		DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '2'
        ]);
		DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '3'
        ]);
		DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '4'
        ]);
		DB::table('metas')->insert([
           'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '5'
        ]);
		DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '6'
        ]);
		DB::table('metas')->insert([
          'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '7'
        ]);
		DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '8'
        ]);
		DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '9'
        ]);
		DB::table('metas')->insert([
            'val_inicial' => '0',
			'val_corrente' => '0',
			'mes' => 'Abril',
			'cat_despesa_id' => '10'
        ]);
		
    }
    
}

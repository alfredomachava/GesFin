<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		//$this->call(catDespesasTableSeeder::class);
		//$this->call(tipoLacamentoTableSeeder::class);
		$this->call(metasTableSeeder::class);
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
			$table->double('val_inicial', 10, 2);
			$table->double('val_corrente', 10, 2);
			$table->string('mes');
			$table->integer('cat_despesa_id')->unsigned();
            $table->foreign('cat_despesa_id')->references('id')->on('cat_despesas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas');
    }
}

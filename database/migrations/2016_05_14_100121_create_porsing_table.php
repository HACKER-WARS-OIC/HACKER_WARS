<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorsingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('porsing', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hero_id')->nullable()->unsigned();
            $table->binary('porsing_data')->nullable();

            $table->foreign('hero_id')->references('id')->on('heros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('porsing');
    }
}

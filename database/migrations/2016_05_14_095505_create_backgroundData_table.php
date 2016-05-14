<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackgroundDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('background_data', function (Blueprint $table) {
            $table->increments('id');
            $table->string('background_data')->nullable();
            $table->string('template_text')->nullable();
            $table->float('hero_x_position')->nullable();
            $table->float('hero_y_position')->nullable();
            $table->float('face_x_position')->nullable();
            $table->float('face_y_position')->nullable();

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
        Schema::drop('background_data');
    }
}

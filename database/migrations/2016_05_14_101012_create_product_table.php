<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('puroduct', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('face_data_id')->nullable();
            $table->integer('panel_id1')->nullable();
            $table->integer('panel_id2')->nullable();
            $table->integer('panel_id3')->nullable();
            $table->integer('panel_id4')->nullable();
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
    }
}

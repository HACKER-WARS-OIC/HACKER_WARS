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
            $table->integer('face_data_id')->nullable()->unsigned();
            $table->integer('panel_id1')->nullable()->unsigned();
            $table->integer('panel_id2')->nullable()->unsigned();
            $table->integer('panel_id3')->nullable()->unsigned();
            $table->integer('panel_id4')->nullable()->unsigned();
            
            $table->foreign('face_data_id')->references('id')->on('face_photo');
            $table->foreign('panel_id1')->references('id')->on('panel');
            $table->foreign('panel_id2')->references('id')->on('panel');
            $table->foreign('panel_id3')->references('id')->on('panel');
            $table->foreign('panel_id4')->references('id')->on('panel');
        });
        Schema::rename('puroduct', 'product');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('product');
    }
}

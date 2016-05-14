<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('panel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_id')->nullable()->unsigned();
            $table->integer('background_id')->nullable()->unsigned();
            $table->integer('hero_id')->nullable()->unsigned();
            $table->integer('porsing_id')->nullable()->unsigned();
            $table->string('main_text')->nullable();

            $table->foreign('story_id')->references('id')->on('story');
            $table->foreign('background_id')->references('id')->on('background_data');            
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
        Schema::drop('panel');
    }
}

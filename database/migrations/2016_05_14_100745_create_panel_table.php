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
            $table->integer('story_id')->nullable();
            $table->integer('background_id')->nullable();
            $table->integer('hero_id')->nullable();
            $table->integer('porsing_id')->nullable();
            $table->string('main_text')->nullable();
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

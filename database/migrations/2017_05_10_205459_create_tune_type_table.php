<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTuneTypeTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('tune_type', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->integer('tune_id')->unsigned();
            $table->integer('type_id')->unsigned();

            $table->foreign('tune_id')->references('id')->on('tunes');
            $table->foreign('type_id')->references('id')->on('types');
        });
    }
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('tune_type');
    }
}

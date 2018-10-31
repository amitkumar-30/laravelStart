<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::enableForeignKeyConstraints();
        Schema::create('matchrecord', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('player1_id')->unsigned();
            $table->integer('player2_id')->unsigned();
            $table->foreign('player1_id')->references('id')->on('users');
            $table->foreign('player2_id')->references('id')->on('users');
            $table->string('player1_name');
            $table->string('player2_name');
            $table->integer('player1_score');
            $table->integer('player2_score');
            $table->date('played_on');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchrecord');
    }
}

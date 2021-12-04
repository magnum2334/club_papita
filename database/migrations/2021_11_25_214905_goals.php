<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Goals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id'); 
            $table->foreign('player_id')->references('id')->on('players');
            $table->unsignedBigInteger('equiment_id'); 
            $table->foreign('equiment_id')->references('id')->on('equipments');          
            $table->unsignedBigInteger('match_id'); 
            $table->foreign('match_id')->references('id')->on('matches');            
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

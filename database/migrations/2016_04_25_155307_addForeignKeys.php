<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('serial_keys', function ($table) {
            $table->foreign('game')->references('id')->on('games');
            $table->foreign('usuario')->references('id')->on('users');
        });

        Schema::table('historicos', function ($table) {
            $table->foreign('game')->references('id')->on('games');
            $table->foreign('usuario')->references('id')->on('users');
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

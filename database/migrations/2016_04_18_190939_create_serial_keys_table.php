<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSerialKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serial_keys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('game')->unsigned();
            $table->string('serialkey', 30)->unique();
            $table->tinyInteger('usado');
            $table->integer('usuario')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('serial_keys');
    }
}

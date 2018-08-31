<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservatiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservaties', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('boten_id');
            $table->integer('klanten_id');
            $table->integer('tijdsloten_id');
            $table->date('datum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaties');
    }
}

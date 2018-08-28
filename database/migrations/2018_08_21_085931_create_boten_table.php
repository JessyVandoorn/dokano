<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boten', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('aantal_plaatsen');
            $table->integer('max_kids');
            $table->integer('types_id');
            $table->integer('prijs');
            $table->integer('aantal_beschikbaar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boten');
    }
}

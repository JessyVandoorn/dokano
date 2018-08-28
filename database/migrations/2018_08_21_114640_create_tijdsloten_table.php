<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTijdslotenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tijdsloten', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('dagen');
            $table->time('uur_start');
            $table->time('uur_eind');
            $table->integer('companies_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tijdsloten');
    }
}

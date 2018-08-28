<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeslotenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gesloten', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->boolean('dag')->nullable();
            $table->boolean('periode')->nullable();
            $table->date('date1')->nullable();
            $table->date('date2')->nullable();
            $table->date('date3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gesloten');
    }
}

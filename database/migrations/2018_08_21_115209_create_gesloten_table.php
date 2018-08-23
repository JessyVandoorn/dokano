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
            $table->string('dag')->nullable();
            $table->string('periode')->nullable();
            $table->date('date1')->nullable();
            $table->date('date2')->nullable();
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

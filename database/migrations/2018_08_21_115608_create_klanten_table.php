<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlantenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klanten', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('voornaam');
            $table->string('naam');
            $table->integer('telefoon');
            $table->string('email');
            $table->integer('companies_id');
            $table->text('opmerkingen');
            $table->integer('vat')->nullable();
            $table->string('company_name')->nullable();
            $table->string('street')->nullable();
            $table->integer('number')->nullable();
            $table->integer('zip')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klanten');
    }
}

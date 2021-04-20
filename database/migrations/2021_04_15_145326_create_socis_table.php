<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socis', function (Blueprint $table) {
            $table->id();
	    $table->string('nif');
	    $table->string('nom');
	    $table->string('cognoms');
	    $table->string('adreça');
	    $table->string('poblacio');
	    $table->string('comarca');
	    $table->integer('telefonFixe');
	    $table->integer('telefonMobil');
	    $table->string('email');
	    $table->string('dataAlta');
	    $table->string('quotaMensual');
	    $table->string('aportacioAnual');
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
        Schema::dropIfExists('socis');
    }
}

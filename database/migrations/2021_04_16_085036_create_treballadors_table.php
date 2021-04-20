<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreballadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treballadors', function (Blueprint $table) {
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
            $table->string('dataIngres');
            $table->string('professionalVoluntari');
            $table->string('sou')->nullable();
	    $table->string('carrec')->nullable();
            $table->string('seguretatSocial')->nullable();
            $table->string('irpf')->nullable();
            $table->string('edat')->nullable();
            $table->string('professio')->nullable();
            $table->string('hores')->nullable();
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
        Schema::dropIfExists('treballadors');
    }
}

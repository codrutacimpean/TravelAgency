<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacante', function (Blueprint $table) {
            $table->id();
            $table->string('Destinatie');
            $table->string('Tara');
            $table->string('Cazare');
            $table->integer('Stele');
            $table->integer('Nr_Camere');
            $table->date('Data_Sosire');
            $table->date('Data_Plecare');
            $table->integer('Nopti_Cazare');
            $table->string('Modalitate_Transport');
            $table->string('All_Inclusive');
            $table->integer('Pret/Pers/Euro');
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
        Schema::dropIfExists('vacante');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id')->unsigned()->autoIncrement();
            $table->string('nombre', 100);
            $table->string('apellido1', 50);
            $table->string('apellido2', 50)->nullable();
            $table->string('correo', 50);
            $table->integer('documento');
            $table->string('estado', 100)->default("Normal");
            $table->text('semestre');
            $table->text('jornada');
            $table->text('pilo_paga');
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
        Schema::dropIfExists('estudiante');
    }
}

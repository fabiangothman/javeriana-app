<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTutorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor', function (Blueprint $table) {
            $table->increments('id')->unsigned()->autoIncrement();
            $table->string('nombre_consejero', 150);
            $table->string('correo', 150);
            $table->text('horario');
            $table->string('imagen', 100);
            $table->timestamps();
        });

        Schema::create('estudiante_tutor', function (Blueprint $table) {
            $table->increments('id')->unsigned()->autoIncrement();
            $table->integer('estudiante_id')->unsigned();
            $table->integer('tutor_id')->unsigned();
            
            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tutor_id')->references('id')->on('tutor')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('tutor');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->unsignedInteger('idalumno');
           $table->foreign('idalumno')->references('id')->on('users')->onDelete('cascade');

           
            $table->string('nombrealumno');
            
            $table->integer('currentcurso')->default(-1);

            $table->time('time1')->nullable();
            $table->time('time2')->nullable();
            $table->time('time3')->nullable();
            $table->time('time4')->nullable();
            $table->time('time5')->nullable();
            $table->time('time6')->nullable();
            $table->time('time7')->nullable();
            $table->time('time8')->nullable();
            $table->time('time9')->nullable();

            $table->time('time10')->nullable();
            $table->time('time11')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuiz3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz3s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

                //doest work since users uses increments which is big not bigint, also foreginId is not working
            //$table->unsignedBigInteger('idalumno'); //->integer('idalumno');
           // $table->foreignId('idalumno')->references('id')->on('users')->onDelete('cascade');
           $table->unsignedInteger('idalumno');
           $table->foreign('idalumno')->references('id')->on('users')->onDelete('cascade');

           $table->string('nombrealumno');

            $table->integer('a1')->nullable();
            $table->integer('a2')->nullable();
            $table->integer('a3')->nullable();
            $table->integer('a4')->nullable();
            $table->integer('a5')->nullable();
            $table->integer('score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz3s');
    }
}

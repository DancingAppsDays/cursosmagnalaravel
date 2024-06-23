<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuiz2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz2s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

           // $table->integer('idalumno');
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
        Schema::dropIfExists('quiz2s');
    }
}

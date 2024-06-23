<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuiz4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz4s', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

           // $table->integer('idalumno');
            $table->string('nombrealumno');

            //$table->unsignedBigInteger('idalumno'); 
            //this creates anew column, not what we want which is to asign the foreign key to the existing column
            //$table->foreignId('idalumno')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('idalumno');
$table->foreign('idalumno')->references('id')->on('users')->onDelete('cascade');


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
        Schema::dropIfExists('quiz4s');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZapatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zapatos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('color');
            $table->string('modelo');
            $table->string('avatar')->nullable();

            $table->integer('t1')->nullable();
            $table->integer('t2')->nullable(); 
            $table->integer('t3')->nullable();
            $table->integer('t4')->nullable();
            $table->integer('t5')->nullable();
            $table->integer('t6')->nullable();
            $table->integer('t7')->nullable();
            $table->integer('t8')->nullable();
            $table->integer('t9')->nullable();

            $table->integer('c1')->nullable();
            $table->integer('c2')->nullable();
            $table->integer('c3')->nullable();
            $table->integer('c4')->nullable();
            $table->integer('c5')->nullable();
            $table->integer('c6')->nullable();
            $table->integer('c7')->nullable();
            $table->integer('c8')->nullable();
            $table->integer('c9')->nullable();


            $table->unsignedBigInteger('emp_id')->nullable();;
            $table->foreign('emp_id')->references('id')->on('empresas');
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
        Schema::dropIfExists('zapatos');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
            $table->id();
            $table->float('cant1');
            $table->float('cant2')->nullable();
            $table->float('cant3')->nullable();
            $table->float('cant4')->nullable();
            $table->float('cant5')->nullable();
            $table->float('cant6')->nullable();
            $table->float('cant7')->nullable();
            $table->float('cant8')->nullable();
            $table->float('cant9')->nullable();
            $table->float('cant10')->nullable();
            
            $table->string('mat1');
            $table->string('mat2')->nullable();
            $table->string('mat3')->nullable();
            $table->string('mat4')->nullable();
            $table->string('mat5')->nullable();
            $table->string('mat6')->nullable();
            $table->string('mat7')->nullable();
            $table->string('mat8')->nullable();
            $table->string('mat9')->nullable();
            $table->string('mat10')->nullable();
            $table->unsignedBigInteger('emp_id')->nullable();
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
        Schema::dropIfExists('insumos');
    }
}

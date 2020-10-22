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
            $table->string('avatar');
            $table->string('pt');
            $table->float('material');
            $table->string('avatar');
            $table->integer('t33');
            $table->integer('t34');
            $table->integer('t35');
            $table->integer('t36');
            $table->integer('t37');
            $table->integer('t38');
            $table->integer('t39');
            $table->integer('t40');
            $table->integer('t41');
            $table->integer('t42');
            $table->integer('t43');
            $table->integer('t44');
            $table->unsignedBigInteger('emp_id');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produccions', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->unsignedBigInteger('emp_id')->nullable();;
            $table->unsignedBigInteger('zapato_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('emp_id')->references('id')->on('empresas');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('zapato_id')->references('id')->on('zapatos');
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
        Schema::dropIfExists('produccions');
    }
}

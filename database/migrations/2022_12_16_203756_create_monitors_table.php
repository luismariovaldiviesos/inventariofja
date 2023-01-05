<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitors', function (Blueprint $table) {
            $table->id();
            $table->string('serie');
            $table->string('af');
            // $table->unsignedBigInteger('marca_id');
            // $table->foreign('marca_id')->references('id')->on('marcas');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->unsignedBigInteger('unidad_id');
            // $table->foreign('unidad_id')->references('id')->on('unidads');
            $table->foreignId('marca_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('unidad_id')->constrained();
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
        Schema::dropIfExists('monitors');
    }
};

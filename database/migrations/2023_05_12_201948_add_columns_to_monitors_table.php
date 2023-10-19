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
        Schema::table('monitors', function (Blueprint $table) {
            $table->boolean('inventariado')->default(false)->before('user_id');
            $table->boolean('revisar_delegado')->default(false)->before('inventariado');
            $table->boolean('activo')->default(true)->before('revisar_delegado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('monitors', function (Blueprint $table) {
            
            $table->dropColumn(['inventariado', 'revisar_delegado','activo']);
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FkPed extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('nif')->references('nif')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign('nif');
        });
    }
}

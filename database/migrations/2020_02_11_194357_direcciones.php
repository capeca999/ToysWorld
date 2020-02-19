<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Direcciones extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('street');
            $table->smallInteger('number');
            $table->mediumInteger('postal_code');
            $table->string('location');
            $table->string('province');
            $table->string('country');
            $table->enum('type', ['envio', 'facturacion']);
            $table->enum('way', ['plaza', 'avenida', 'bulevar', 'calle']);
            $table->string('nif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('addresses');
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pedidos extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('date');
            $table->double('total_price',8,2);
            $table->enum('payment_method', ['PayPal', 'Tarjeta']);
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
        Schema::dropIfExists('orders');
    }
}
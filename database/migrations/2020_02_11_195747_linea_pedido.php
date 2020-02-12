<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LineaPedido extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('linea_pedido', function (Blueprint $table) {
            $table->bigInteger('id_producto')->unsigned();
            $table->bigInteger('id_pedido')->unsigned();
            $table->integer('cantidad');
            $table->double('precio');
            $table->primary(['id_producto', 'id_pedido']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('linea_pedido');
    }
}
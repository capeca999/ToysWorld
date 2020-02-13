<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('impuesto');
            $table->double('descuento')->nullable();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('marca');
            $table->double('peso');
            $table->double('precio');
            $table->smallInteger('edad');
            $table->integer('stock');
            $table->string('estado');
            $table->bigInteger('id_categoria')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('productos');
    }
}
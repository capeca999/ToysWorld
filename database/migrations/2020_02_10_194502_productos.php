<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('stock');
            $table->bigInteger('impuesto');
            $table->bigInteger('descuento');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('marca');
            $table->bigInteger('peso');
            $table->bigInteger('precio');
            $table->bigInteger('edad');
            $table->enum('estado');
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
        Schema::dropIfExists('productos');
    }
}

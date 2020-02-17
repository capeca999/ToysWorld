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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('taxes');
            $table->double('discount')->nullable();
            $table->string('name');
            $table->string('description');
            $table->string('brand');
            $table->double('weight');
            $table->double('price');
            $table->smallInteger('age');
            $table->integer('stock');
            $table->enum('status', ['Disponible', 'No_Disponible']);
            $table->bigInteger('id_category')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::dropIfExists('products');
    }
}
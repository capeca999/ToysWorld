<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('nif')->primary();
            $table->string('name');
            $table->string('surname1')->nullable();
            $table->string('surname2')->nullable();
            $table->string('email')->unique();
            $table->enum('role', ['Usuario', 'Administrador'])->nullable();
            $table->string('password');
            $table->date('date_of_birth');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}

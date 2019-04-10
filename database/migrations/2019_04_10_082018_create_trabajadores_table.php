<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->bigIncrements('id_employee');
            $table->string('name');
            $table->string('surname1');
            $table->string('surname2');
            $table->string('telephone');
            $table->string('address');
            $table->string('cp');
            $table->string('password')->unique();
            $table->timestamp('password_verified_at')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('nif');
            $table->string('nationality');
            $table->string('nie');
            $table->string('post');
            $table->rememberToken();
            $table->bigIncrements('id');
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
        Schema::dropIfExists('trabajadores');
    }
}

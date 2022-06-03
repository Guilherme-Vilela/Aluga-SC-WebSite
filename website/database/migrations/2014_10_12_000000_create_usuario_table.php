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
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email',190)->unique();
            $table->timestamp('data_verificacao_email')->nullable();
            $table->binary('senha');
            $table->String("sobrenome"); 
            $table->String("CPF",14); 
            $table->String("status"); 
            $table->dateTime("atualizado");
            $table->String("caminho_imagem");
            $table->integer("cargo");
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
        Schema::dropIfExists('usuario');
    }
};

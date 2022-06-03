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
        Schema::create('imovel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("nome");
            $table->integer("capacidade");
            $table->String("status");
            $table->text("descricao");
            $table->double("valor");
            $table->String("caminho_imagem");
            $table->integer("usuario");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imovel');
    }
};

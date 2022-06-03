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
        Schema::create('endereco_imovel', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("numero");
            $table->String("rua",45);
            $table->String("bairro",45); 
            $table->String("cidade",45); 
            $table->String("estado",45); 
            $table->String("CEP",10);
            $table->String("complemento",100);
            $table->integer("imovel");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('endereco_imovel');
    }
};

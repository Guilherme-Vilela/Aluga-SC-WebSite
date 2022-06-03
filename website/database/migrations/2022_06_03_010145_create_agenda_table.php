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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date("data_entrada");
            $table->date("data_saida");
            $table->String("status");
            $table->integer("usuario");
            $table->integer("pagamento");
            $table->integer("imovel");
            $table->String("comentario");
            $table->integer("nota");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
};

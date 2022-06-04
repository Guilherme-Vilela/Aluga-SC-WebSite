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
        Schema::create('immobile_adresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("number");
            $table->String("road",45);
            $table->String("district",45); 
            $table->String("city",45); 
            $table->String("state",45); 
            $table->String("CEP",10);
            $table->String("complement",100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('immobile_adresses');
    }
};

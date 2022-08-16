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
        Schema::create('furniture_immobiles', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity");
            $table->foreignId('immobile_id')->references('id')->on('immobiles');
            $table->foreignId('furniture_id')->references('id')->on('furniture');
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
        Schema::dropIfExists('furniture_immobiles');
    }
};

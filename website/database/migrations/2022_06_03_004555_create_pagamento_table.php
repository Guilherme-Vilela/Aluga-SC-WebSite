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
        Schema::create('pagamento', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String("metodo",45);
            $table->String("status");
            $table->String("payment_id",45);
            $table->String("seller_id",45);
            $table->double("amount");
            $table->String("order_id",45);
            $table->String("transaction_id",45);
            $table->Json("json");
            $table->String("session",45);
            $table->String("customer_id",45);
            $table->ipAddress("ip");
            $table->dateTime("update_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagamento');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_accessories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order', 50);
            $table->integer('price');
            $table->date('date_order');
            $table->bigInteger('provider_id')->unsigned();
            $table->bigInteger('accessory_id')->unsigned();
            $table->timestamps();

            $table->foreign('provider_id')->references('id')->on('providers');
            $table->foreign('accessory_id')->references('id')->on('accessories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase_accessories');
    }
}

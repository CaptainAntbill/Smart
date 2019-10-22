<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('model', 50);
            $table->integer('quantity');
            $table->integer('price');
            $table->bigInteger('spectrum_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->timestamps();

            $table->foreign('spectrum_id')->references('id')->on('spectrums');
            $table->foreign('brand_id')->references('id')->on('brands');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phones');
    }
}

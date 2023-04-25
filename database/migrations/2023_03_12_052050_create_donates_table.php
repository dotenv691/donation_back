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
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default('USD');
            $table->double('value');
            $table->string('card_number');
            $table->string('exp');
            $table->string('verf');
            $table->string('name');
            $table->integer('hasShow')->default(0);
            $table->string('lang')->default('EN');
            $table->string('responseCode')->default('000');
            $table->string('sessionId')->nullable();
            $table->string('brand')->default('VISA');
            $table->string('cardHolderName')->default('');
            $table->string('tranId')->default('');
            $table->text('description')->default('');
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
        Schema::dropIfExists('donates');
    }
};

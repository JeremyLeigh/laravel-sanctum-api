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
        Schema::create('familiar_hps', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('max-hp');
            $table->string('hit-dice-num');
            $table->string('hit-dice-type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_hps');
    }
};

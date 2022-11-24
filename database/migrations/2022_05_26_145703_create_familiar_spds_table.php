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
        Schema::create('familiar_spds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('speed-1');
            $table->string('speed-2')->nullable();
            $table->string('speed-3')->nullable();
            $table->string('speed-4')->nullable();
            $table->string('speed-5')->nullable();
            $table->string('speed-6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_spds');
    }
};

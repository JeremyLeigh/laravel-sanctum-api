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
        Schema::create('familiar_senses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('passive-perc');
            $table->string('sense-1')->nullable();
            $table->string('sense-2')->nullable();
            $table->string('sense-3')->nullable();
            $table->string('sense-4')->nullable();
            $table->string('sense-5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_senses');
    }
};

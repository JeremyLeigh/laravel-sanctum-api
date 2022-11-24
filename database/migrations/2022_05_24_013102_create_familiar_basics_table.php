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
        Schema::create('familiar_basics', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('unique-name')->nullable();
            $table->string('creature-name');
            $table->string('size');
            $table->string('creature-type');
            $table->string('alignment')->nullable();
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_basics');
    }
};

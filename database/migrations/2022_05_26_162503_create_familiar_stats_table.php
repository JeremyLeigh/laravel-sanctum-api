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
        Schema::create('familiar_stats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('str');
            $table->string('dex');
            $table->string('con');
            $table->string('int');
            $table->string('wis');
            $table->string('cha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_stats');
    }
};

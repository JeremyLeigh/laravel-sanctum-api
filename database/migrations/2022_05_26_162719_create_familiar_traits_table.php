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
        Schema::create('familiar_traits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('trait-1')->nullable();
            $table->string('trait-2')->nullable();
            $table->string('trait-3')->nullable();
            $table->string('trait-4')->nullable();
            $table->string('trait-5')->nullable();
            $table->string('trait-6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_traits');
    }
};

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
        Schema::create('familiar_actions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('action-1')->nullable();
            $table->string('action-2')->nullable();
            $table->string('action-3')->nullable();
            $table->string('action-4')->nullable();
            $table->string('action-5')->nullable();
            $table->string('b-action-1')->nullable();
            $table->string('b-action-2')->nullable();
            $table->string('b-action-3')->nullable();
            $table->string('b-action-4')->nullable();
            $table->string('reaction-1')->nullable();
            $table->string('reaction-2')->nullable();
            $table->string('reaction-3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_actions');
    }
};

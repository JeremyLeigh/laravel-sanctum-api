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
        Schema::create('familiar_acs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ac-num');
            $table->string('is-nat')->nullable();
            $table->string('ac-mod')->nullable();
            $table->string('ac-desc')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_acs');
    }
};

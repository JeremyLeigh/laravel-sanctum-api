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
        Schema::create('familiar_skills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('skill-1')->nullable();
            $table->string('skill-2')->nullable();
            $table->string('skill-3')->nullable();
            $table->string('skill-4')->nullable();
            $table->string('skill-5')->nullable();
            $table->string('skill-6')->nullable();
            $table->string('skill-7')->nullable();
            $table->string('skill-8')->nullable();
            $table->string('skill-9')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('familiar_skills');
    }
};

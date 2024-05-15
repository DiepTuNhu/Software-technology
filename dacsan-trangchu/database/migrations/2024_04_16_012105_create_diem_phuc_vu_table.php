<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('service_point', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->string('address');
            $table->time('open_time');
            $table->time('close_time');
            
            $table->unsignedInteger('id_food');
            $table->foreign('id_food')->references('id')->on('food')->onDelete('cascade')->onUpdate('cascade');

            $table->string('image')->nullable();
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_point');
    }
};

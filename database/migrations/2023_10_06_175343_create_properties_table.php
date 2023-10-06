<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->longText('description');
            $table->string('prise');
            $table->foreignId('city_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

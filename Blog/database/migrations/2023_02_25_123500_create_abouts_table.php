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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('headTitle')->nullable();
            $table->string('navbarTitle')->nullable();
            $table->string('upTitle')->nullable();
            $table->string('title')->nullable();
            $table->string('aboutTitle')->nullable();
            $table->string('aboutContent',5000)->nullable();
            $table->string('aboutImage',400)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};

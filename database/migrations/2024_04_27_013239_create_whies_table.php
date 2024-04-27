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
        Schema::create('whies', function (Blueprint $table) {
            $table->id();
            $table->String('icon')->nullable();
            $table->string('title')->nullable();
            $table->string('desc1')->nullable();
            $table->string('desc2')->nullable();
            $table->string('desc3')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('whies');
    }
};

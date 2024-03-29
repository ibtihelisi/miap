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
        Schema::create('users', function (Blueprint $table) {
            /*$table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role',['admin','user'])->default('user');
            $table->rememberToken();
            $table->timestamps();*/


            $table->id();
            $table->string('restaurant_name')->unique();
            $table->string('owner_name');
            $table->string('email')->unique();
            $table->string('owner_phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('active',['active','not active'])->default('active');
            $table->string('password');
            $table->enum('role',['admin','user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

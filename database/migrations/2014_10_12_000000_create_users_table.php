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
           


            $table->id();
            
            $table->string('restaurant_name')->unique();
            $table->text('desc');
            $table->string('logo');
            $table->string('location');
            $table->string('location2')->nullable(); // Ajout de la colonne location2
            $table->string('governorate'); // Ajout de la colonne governorate
            $table->string('city'); // Ajout de la colonne city
            $table->string('patnumber'); // Ajout de la colonne patnumber
            $table->string('postal_code'); // Ajout de la colonne postal_code
          
            $table->string('owner_name');
            $table->string('email')->unique();
            $table->string('owner_phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('active',['active','not active'])->default('active');
            $table->string('password');
            $table->enum('role',['admin','user'])->default('user');
            $table->string('plan')->default('free');
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
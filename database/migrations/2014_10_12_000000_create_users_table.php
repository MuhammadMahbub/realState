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
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('role')->comment('admin=1,agent=2,tenant=3,landlord=4,contractor=5,service_provider=6');
            $table->string('phone')->nullable();
            $table->string('password');
            $table->string('gender')->nullable();
            $table->string('about')->nullable();
            $table->string('location')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('website')->nullable();
            $table->string('social_links')->nullable();
            $table->boolean('landlord_choice')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('status')->default(0)->comment('approve=1,disapprove=0');
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

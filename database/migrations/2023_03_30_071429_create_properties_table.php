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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('role_id');
            $table->integer('category_id');
            $table->integer('property_type_id');
            $table->string('thumbnail_image');
            $table->string('multiple_feature_image')->nullable();
            $table->string('short_title');
            $table->string('slug');
            $table->string('location')->nullable();
            $table->integer('price');
            $table->boolean('isFavorite');
            $table->string('property_id')->nullable();
            $table->longText('description');
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};

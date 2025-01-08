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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->longText('banner', 255)->nullable();
            $table->longText('description', 255)->nullable();
            $table->longText('meta_title', 255)->nullable();
            $table->longText('meta_keywords', 255)->nullable();
            $table->longText('meta_tag', 255)->nullable();
            $table->longText('meta_description', 255)->nullable();
            $table->longText('canonical_url')->nullable();
            $table->longText('code')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("slug");
            $table->longText("description");
            $table->string("banner")->nullable();
            $table->string("images")->nullable();
            $table->unsignedBigInteger("category_id")->nullable();
            $table->foreign('category_id')->on('categories')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger("state_id")->nullable();
            $table->foreign('state_id')->on('states')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger("city_id")->nullable();
            $table->foreign('city_id')->on('cities')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger("user_id")->nullable();
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->json("service_ids")->nullable();
            $table->longText('code')->nullable();
            $table->enum('status', ['pending','approved','rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};

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
        Schema::create('customized_links', function (Blueprint $table) {
            $table->id();
            $table->string('Link');
            $table->string('Source');
            $table->unsignedBigInteger('TotalVisited')->default(0);
            $table->foreignId('CreatedBy')->nullable()->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('CategoryId')->nullable()->references('id')->on('categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customized_links');
    }
};

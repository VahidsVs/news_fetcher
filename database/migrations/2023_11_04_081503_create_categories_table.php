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
            $table->foreignId('parent_category_id')->constrained('parent_categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name');
            $table->string('api_url');
            $table->tinyInteger('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->string('description');
            $table->string('api_url_options')->nullable();
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

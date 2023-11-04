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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('summary');
            $table->text('body');
            $table->string('thubmnail_path');
            $table->string('slug')->unique();
            $table->string('meta_keyword');
            $table->string('meta_description');
            $table->string('tags');
            $table->tinyInteger('commentable')->default(1)->comment('0=>uncommentable, 1=>commentable');
            $table->tinyInteger('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->foreignId('author_id')->constrained('users')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('api_id')->constrained('api_resources')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

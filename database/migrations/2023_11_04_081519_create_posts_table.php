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
            $table->string('summary',510);
            $table->text('body')->nullable();
            $table->string('thumbnail_path',510)->nullable();
            $table->string('slug',510)->unique();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('tags')->nullable();
            $table->tinyInteger('commentable')->default(1)->comment('0=>uncommentable, 1=>commentable');
            $table->integer('likes')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->enum('display',['section1','section2','section3','section4','section5'])->nullable();
            $table->foreignId('author_id')->constrained('users')->nullable()->default(null)->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->nullable()->onUpdate('cascade')->onDelete('cascade');
            $table->string('source')->nullable();
            $table->timestamp('published_at')->nullable();
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

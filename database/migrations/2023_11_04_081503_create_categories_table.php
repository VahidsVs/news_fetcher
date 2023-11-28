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
            $table->string('parent_name');
            $table->string('name');
            $table->string('api_url');
            $table->enum('source',['user','api','rss']);
            $table->enum('source_data_type',['text','xml','json']);
            $table->tinyInteger('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->string('api_url_options')->nullable();
            $table->string('description');
            $table->tinyInteger('order');
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

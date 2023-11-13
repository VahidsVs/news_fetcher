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
        Schema::create('parent_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('source',['user','api']);
            $table->enum('source_data_type',['text','xml','json']);
            $table->tinyInteger('status')->default(1)->comment('0=>inactive, 1=>active');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_categories');
    }
};

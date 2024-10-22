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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('text');
            $table->string('image')->default('https://placehold.co/600x400');
            $table->integer('likes')->default(0);
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->index('category_id', 'article_category_idx');
            $table->foreign('category_id', 'article_category_fk')->on('categories')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};


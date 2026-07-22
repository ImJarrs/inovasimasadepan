<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_showcases', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('page_title')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('intro_heading')->nullable();
            $table->text('intro_text')->nullable();
            $table->json('advantages')->nullable();
            $table->json('slider_images')->nullable();
            $table->string('feature_banner_text')->nullable();
            $table->json('spec_sections')->nullable();
            $table->json('detail_cards')->nullable();
            $table->json('gallery_images')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_showcases');
    }
};

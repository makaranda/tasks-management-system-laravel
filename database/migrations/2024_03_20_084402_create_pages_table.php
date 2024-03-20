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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->text('short_description2')->nullable();
            $table->text('short_description3')->nullable();
            $table->text('short_description4')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('feature_image2')->nullable();
            $table->string('feature_image3')->nullable();
            $table->string('feature_image4')->nullable();
            $table->string('button_link',255)->nullable();
            $table->string('button_link2',255)->nullable();
            $table->string('page_type',255)->nullable();
            $table->string('seo_title',255)->nullable();
            $table->string('seo_description',255)->nullable();
            $table->string('seo_keywords',255)->nullable();
            $table->string('page_url',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};

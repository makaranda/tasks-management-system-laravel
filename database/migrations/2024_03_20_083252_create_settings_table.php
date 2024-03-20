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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name',255)->nullable()->default('Online Dubai Visas');
            $table->string('main_logo',255)->nullable();
            $table->string('footer_logo',255)->nullable();
            $table->string('contact_number',15)->nullable();
            $table->string('whatsapp_number',15)->nullable();
            $table->string('main_email',255)->nullable();
            $table->string('locaion_url',255)->nullable();
            $table->string('facobook_url',255)->nullable();
            $table->string('instagram_url',255)->nullable();
            $table->string('linkedin_url',255)->nullable();
            $table->string('youtube_url',255)->nullable();
            $table->string('main_url',255)->nullable()->default('https://onlinedubaivisas.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

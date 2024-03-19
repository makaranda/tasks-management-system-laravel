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
        Schema::create('visas', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('valid_days',50);
            $table->string('visa_price',50);
            $table->string('type',50);
            $table->string('visa_type',200)->nullable();
            $table->string('procesing_time',200)->nullable();
            $table->string('visa_validity',200)->nullable();
            $table->string('stay_period',200)->nullable();
            $table->string('extension',200)->nullable();
            $table->string('url');
            $table->integer('status')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visas');
    }
};

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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->foreignId('user_id')->constrained();
            $table->string('theme')->default('light');
            $table->string('theme_color')->default('#f7906c');
            $table->string('currency')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('background_img')->nullable();
            $table->string('wifi_password')->nullable();
            $table->boolean('can_make_order')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};

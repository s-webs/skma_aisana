<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('preview');
            $table->string('title_ru');
            $table->string('title_kk');
            $table->string('title_en');
            $table->longText('text_ru');
            $table->longText('text_kk');
            $table->longText('text_en');
            $table->string('slug_ru');
            $table->string('slug_kk');
            $table->string('slug_en');
            $table->boolean('is_published');
            $table->timestamps();
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

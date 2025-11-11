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
        Schema::create('steps', function (Blueprint $table) {
            $table->id();
            $table->integer('step_num')->default(0);
            $table->string('name_ru');
            $table->string('name_kk');
            $table->string('name_en');
            $table->text('description_ru');
            $table->text('description_kk');
            $table->text('description_en');
            $table->string('badge_ru');
            $table->string('badge_kk');
            $table->string('badge_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('steps');
    }
};

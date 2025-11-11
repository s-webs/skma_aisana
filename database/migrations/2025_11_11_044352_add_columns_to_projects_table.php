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
        Schema::table('projects', function (Blueprint $table) {
            $table->text('short_description_ru')->after('text_en')->nullable();
            $table->text('short_description_kk')->after('text_en')->nullable();
            $table->text('short_description_en')->after('text_en')->nullable();
            $table->integer('ready')->after('text_en')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('short_description_ru');
            $table->dropColumn('short_description_kk');
            $table->dropColumn('short_description_en');
            $table->dropColumn('ready');
        });
    }
};

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
        Schema::create('timelines', function (Blueprint $table) {
            $table->id();
            $table->datetime('start');
            $table->datetime('end');
            $table->year('year');
            $table->enum('metode', [
                'ppk', 'kpa'
            ]);
            $table->enum('category', [
                'creat', 'revision', 'all'
            ])->default('all');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timelines');
    }
};

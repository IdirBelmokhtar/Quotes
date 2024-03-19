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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->boolean('is_free')->nullable();
            $table->string('type');
<<<<<<<< HEAD:database/migrations/2024_02_26_134119_create_categories_table.php
========

>>>>>>>> 71ab626ba6118b5e445a36f9b4e130b525f6ebcc:database/migrations/2024_02_26_134500_create_categories_table.php
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};

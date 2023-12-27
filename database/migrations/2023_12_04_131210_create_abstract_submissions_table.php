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
        Schema::create('abstract_submissions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('author')->nullable();
            $table->string('email')->unique();
            $table->text('country')->nullable();
            $table->string('code')->nullable();
            $table->string('phone')->nullable();
            $table->text('company')->nullable();
            $table->text('presenter')->nullable();
            $table->text('title')->nullable();
            $table->longText('biography')->nullable();
            $table->bigInteger('theme_id')->unsigned()->nullable();
            $table->bigInteger('poster_id')->unsigned()->nullable();
            $table->text('abstract_path')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstract_submissions');
    }
};

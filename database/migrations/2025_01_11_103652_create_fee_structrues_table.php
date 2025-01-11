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
        Schema::create('fee_structrues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained()->onDelete('cascade');
            $table->foreignId('acadamic_year_id')->constrained()->onDelete('cascade');
            $table->foreignId('fee_head_id')->constrained()->onDelete('cascade');
            $table->string('April')->nullable();
            $table->string('May')->nullable();
            $table->string('June')->nullable();
            $table->string('July')->nullable();
            $table->string('August')->nullable();
            $table->string('Octoble')->nullable();
            $table->string('November')->nullable();
            $table->string( 'December')->nullable();
            $table->string('Januery')->nullable();
            $table->string('Februeary')->nullable();
            $table->string('March')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fee_structrues');
    }
};

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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('ar_name');
            $table->string('en_name');
            $table->longText('ar_content');
            $table->longText('en_content');
            // $table->foreignId('library_id')->constrained('libraries')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->boolean('prefer')->default(true);
            $table->string('video')->nullable();
            $table->string('photo');
            $table->date('publication_date');
            $table->string('ar_author_name');
            $table->string('en_author_name');
            $table->integer('display_order')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};

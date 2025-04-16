<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('culture', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('id_category');
            $table->string('main_image')->nullable();
            $table->text('images')->nullable(); // Bisa berupa JSON string
            $table->string('provincy');
            $table->string('city');
            $table->integer('view_count')->default(0);
            $table->boolean('is_popular')->default(false);
            $table->timestamps();

            // Optional: tambahkan foreign key kalau id_category berelasi
            // $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('culture');
    }
};
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
        Schema::create('cultures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('id_category');
            $table->string('main_image')->nullable();
            $table->text('images')->nullable();
            $table->string('provincy')->nullable(); // kemungkinan typo: "province"
            $table->string('city')->nullable();
            $table->integer('view_count')->default(0);
            $table->boolean('is_popular')->default(false);
            $table->timestamps();

            $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultures');
    }
};

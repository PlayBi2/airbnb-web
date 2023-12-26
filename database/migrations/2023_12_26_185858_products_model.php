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
        // Schema::dropIfExists('product');
      Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('image_path')->nullable();
            $table->string('name');
            $table->decimal('price_per_month', 8, 2);
            $table->decimal('price', 8, 2);
            $table->string('address');
            $table->boolean('rented')->default(false);
            $table->text('infor')->nullable();
            $table->text('description')->nullable();
            $table->decimal('area', 8, 2)->nullable();
            $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

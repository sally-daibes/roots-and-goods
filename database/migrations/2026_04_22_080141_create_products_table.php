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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            // Links the product to a specific cooperative. 
            $table->foreignId('cooperative_id')->constrained()->cascadeOnDelete();
            
            $table->string('title');
            $table->text('description');
            $table->json('images')->nullable(); 
            $table->decimal('price', 8, 2); 
            $table->string('category');
            $table->integer('stock_quantity')->default(0);
            $table->json('weight_size_options')->nullable(); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

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
        Schema::table('carts', function (Blueprint $table) {
            // Add product_id column as a foreign key referencing the products table
            $table->unsignedBigInteger('product_id'); 
            
            // Add quantity column
            $table->integer('quantity')->default(1); 
            
            // Add price column
            $table->decimal('price', 10, 2); 

            // Add foreign key constraint for product_id referencing the products table
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['product_id']);
            
            // Drop the columns
            $table->dropColumn('product_id');
            $table->dropColumn('quantity');
            $table->dropColumn('price');
        });
    }
};

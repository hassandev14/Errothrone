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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->integer('quantity')->default(0);  // Current available stock
            $table->integer('incoming_stock')->default(0);  // Incoming stock
            $table->integer('outgoing_stock')->default(0);  // Outgoing stock (sales, returns)
            $table->enum('stock_status', ['available', 'low', 'out_of_stock'])->default('available');
            $table->timestamp('restocked_at')->nullable();  // Date when stock was last restocked
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};

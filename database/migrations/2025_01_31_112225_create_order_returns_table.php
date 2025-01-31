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
        Schema::create('order_returns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('customer_id')->constrained('customers')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->text('return_reason');
            $table->enum('return_status', ['pending', 'approved', 'rejected', 'completed'])->default('pending');
            $table->decimal('refund_amount', 10, 2)->nullable();
            $table->timestamp('return_date')->nullable();
            $table->string('received_by')->nullable();  // Person/team handling the return
            $table->text('comments')->nullable();  // Optional additional info
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_returns');
    }
};

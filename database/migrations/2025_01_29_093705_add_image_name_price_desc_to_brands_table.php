<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->string('image_name')->nullable(); // Add image_name column
            $table->text('desc')->nullable(); // Add description column (nullable)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('brands', function (Blueprint $table) {
            $table->dropColumn('image_name');
            $table->dropColumn('price');
            $table->dropColumn('desc');
        });
    }
};

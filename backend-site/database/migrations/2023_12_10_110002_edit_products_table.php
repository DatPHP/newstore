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
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('active')->default(0)->index()->after('title');
            $table->float('price', 8, 2);
            $table->float('sales_off', 8, 2)->nullable();
            $table->float('low_price', 8, 2)->nullable();
            $table->boolean('status')->default(0)->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('active');
            $table->dropColumn('price');
            $table->dropColumn('sales_off');
            $table->dropColumn('low_price');
            $table->dropColumn('status');
        });
    }
};

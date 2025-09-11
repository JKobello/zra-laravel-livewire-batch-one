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
    Schema::create('purchases', function (Blueprint $table) {
        
        $table->id();         
        // $table->unsignedBigInteger('supplier_id');  
        $table->string('invoice_number')->nullable(); 
        $table->string('purchase_order_number')->nullable(); 
        
        $table->enum('status', ['pending', 'approved', 'completed', 'cancelled'])->default('pending');
        $table->enum('payment_status', ['unpaid', 'partial', 'paid'])->default('unpaid');
        $table->string('payment_method')->nullable();
        $table->string('currency', 10)->default('TZS');
    
        $table->decimal('total_amount', 15, 2)->default(0);
        $table->decimal('discount', 15, 2)->default(0);
        $table->decimal('tax', 15, 2)->default(0);
        
        $table->timestamps();
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};

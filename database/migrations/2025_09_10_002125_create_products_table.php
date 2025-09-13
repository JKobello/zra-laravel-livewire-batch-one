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
        // $methods = get_class_methods(Blueprint::class);
        // dd($methods);

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->decimal('unit_price', 10, 2);
            $table->bigInteger('category_id'); /// Foreign Key from Category Table - Must match data type
            $table->date('mf_date');
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->integer('stock');
            $table->string('photo')->nullable();
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

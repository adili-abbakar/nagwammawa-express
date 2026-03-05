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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('email');
            $table->string('phone');
            $table->string('company_name')->nullable();
            $table->string('pickup_location');
            $table->string('destination');
            $table->decimal('weight', 8, 2);
            $table->string('service_type');
            $table->string('cargo_type');
            $table->string('dimension')->nullable();
            $table->date('pickup_date');
            $table->date('delivery_date')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->decimal('price', 10, 2)->nullable();
            $table->text('special_instructions')->nullable();
            $table->string('special_document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
};

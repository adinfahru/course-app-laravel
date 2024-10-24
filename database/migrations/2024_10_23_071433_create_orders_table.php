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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke tabel users
            $table->foreignId('course_id')->nullable()->constrained()->onDelete('set null'); // Relasi ke tabel courses, set null jika dihapus
            $table->decimal('amount', 8, 2); // Total pembelian
            $table->decimal('donation', 8, 2); // Total pembelian
            $table->string('status')->default('pending'); // Status pembayaran (e.g., pending, completed)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

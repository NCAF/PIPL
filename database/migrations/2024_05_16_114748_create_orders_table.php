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
            $table->id(); // Primary Key
            $table->unsignedBigInteger('id_user'); // Foreign Key ke tabel users
            $table->unsignedBigInteger('id_destinasi'); // Foreign Key ke tabel destinasi
            $table->timestamps(); // Kolom created_at dan updated_at

            // Definisi foreign key
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_destinasi')->references('id')->on('destinasi')->onDelete('cascade');
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

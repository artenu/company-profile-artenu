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
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('title');                          // Contoh: "Custom Web Application"
        $table->string('slug')->unique();                 // Contoh: "custom-web-application" (untuk SEO URL)
        $table->text('short_description')->nullable();    // Ringkasan untuk kartu di Beranda
        $table->longText('content')->nullable();          // Detail lengkap layanan
        $table->string('icon')->nullable();               // Nama heroicon atau URL icon
        $table->integer('order')->default(0);             // Urutan tampilan (1, 2, 3...)
        $table->boolean('is_active')->default(true);      // Status tampil / draft
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

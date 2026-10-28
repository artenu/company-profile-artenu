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
    Schema::create('case_studies', function (Blueprint $table) {
        $table->id();
        $table->string('title');                           // Judul Proyek
        $table->string('slug')->unique();                  // URL ramah SEO
        $table->string('client_name')->nullable();         // Nama Klien (cth: PT Logistik Jaya)
        $table->string('industry')->nullable();            // Industri (Fintech, Logistik, Startup, dll)
        $table->text('summary')->nullable();               // Ringkasan singkat untuk kartu beranda
        $table->longText('description')->nullable();       // Cerita lengkap tantangan & solusi
        $table->string('thumbnail')->nullable();           // Gambar Cover Proyek
        $table->json('tech_stack')->nullable();            // Tag teknologi: ["Laravel", "React", "MySQL"]
        $table->string('project_url')->nullable();         // Link website/aplikasi (opsional)
        $table->integer('order')->default(0);              // Urutan tampil
        $table->boolean('is_featured')->default(false);    // Apakah tampil sebagai highlight di Beranda?
        $table->boolean('is_published')->default(true);    // Status publikasi
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
};
